<?php

namespace App\Http\Controllers\Entries\SalesReport;

use Aaran\Common\Models\Despatch;
use Aaran\Entries\Models\Receipt;
use Aaran\Entries\Models\Sale;
use Aaran\Master\Models\Company;
use Aaran\Master\Models\Contact;
use Aaran\Master\Models\Contact_detail;
use Aaran\Master\Models\Style;
use App\Helper\ConvertTo;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function __invoke($party, $start_date, $end_date)
    {
        $sale = $this->getList($party, $start_date, $end_date);
        $this->getBalance($party, $start_date, $end_date);
        Pdf::setOption(['dpi' => 150, 'defaultPaperSize' => 'a4', 'defaultFont' => 'sans-serif', 'fontDir']);

        $pdf = PDF::loadView('pdf.salesreport.report',
            [
                'obj' => $sale,
                'cmp' => Company::printDetails(session()->get('company_id')),
                'contact' => Contact::find($party),
                'start_date' => date('d-m-Y', strtotime($start_date)),
                'end_date' => date('d-m-Y', strtotime($end_date)),
                'old_balance'=>$this->old_balance ,
            ]
        );

        $pdf->render();
        return $pdf->stream();
    }


    private function getList($party, $start_date, $end_date)
    {

        $sales = Receipt::select([
            'receipts.company_id',
            'receipts.contact_id',
            DB::raw("'receipt' as mode"),
            "receipts.id as vno",
            'receipts.vdate as vdate',
            DB::raw("'' as grand_total"),
            'receipts.receipt_amount',
            'receipts.chq_no',
        ])
            ->where('contact_id', '=', $party)
//            ->when($this->by_company, function ($query, $by_company) {
//                return $query->where('contact_id', $by_company);
//            })
            ->whereBetween('vdate', [$start_date, $end_date])
            ->where('company_id', '=', session()->get('company_id'));


        return Sale::select([
            'sales.company_id',
            'sales.contact_id',
            DB::raw("'invoice' as mode"),
            "sales.invoice_no as vno",
            'sales.invoice_date as vdate',
            'sales.grand_total',
            DB::raw("'' as receipt_amount"),
            DB::raw("'' as chq_no"),
        ])
            ->where('contact_id', '=', $party)
            ->whereBetween('invoice_date', [$start_date, $end_date])
            ->where('company_id', '=', session()->get('company_id'))
            ->union($sales)
            ->orderBy('vdate')
            ->orderBy('mode')->get();

    }


    #region[opening_balance]

    public mixed $opening_balance;
    public mixed $old_balance = 0;
    public mixed $sale_total = 0;
    public mixed $receipt_total = 0;
    public function getBalance($party, $start_date, $end_date)
    {
        $obj = Contact::find($party);
        $this->opening_balance = $obj->opening_balance;


        $sale_all = Sale::where('contact_id', '=', $party)
            ->get();
        $data = $sale_all[0];

        $sale = Sale::when($start_date, function ($query, $start_date) {
            return $query->whereDate('invoice_date', '<', $start_date);
        })->where('contact_id', '=', $party)
            ->get();

        $this->sale_total = 0;
        foreach ($sale as $i) {
            $this->sale_total += floatval($i->grand_total);
        }

        $receipt = Receipt::when($start_date, function ($query, $start_date) {
            return $query->whereDate('vdate', '<', $start_date);
        })->where('contact_id', '=', $party)
            ->get();

        $this->receipt_total = 0;
        foreach ($receipt as $i) {
            $this->receipt_total += floatval($i->receipt_amount);
        }

        if ($start_date >$data['invoice_date']) {
            $this->old_balance = floatval($this->opening_balance + $this->sale_total-$this->receipt_total);
        } elseif ($start_date <=$data['invoice_date']) {
            $this->old_balance = $obj->opening_balance;
        }

    }

    #endregion


}
