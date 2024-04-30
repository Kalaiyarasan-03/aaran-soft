<?php

namespace App\Livewire\Reports\Statement;

use Aaran\Entries\Models\Receipt;
use Aaran\Entries\Models\Sale;
use Aaran\Master\Models\Contact;
use Aaran\Master\Models\Order;
use App\Livewire\Trait\CommonTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Receivables extends Component
{
    use CommonTrait;

    #region[properties]
    public Collection $contact;
    public Collection $orders;
    public $by_company;
    public $byOrder;
    public $start_date;
    public $end_date;
    public mixed $opening_balance;
    public mixed $old_balance = 0;
    public mixed $sale_total = 0;
    public $invoiceDate_first;
    #endregion

    #region[Contact]
    public function getContact()
    {
        $this->contact = Contact::where('company_id', '=', session()->get('company_id'))->get();
    }
    #endregion

    #region[opening_balance]

    public function opening_Balance($id)
    {
        $obj = Contact::find($id);
        $this->vname = $obj->vname;

        $this->opening_balance = $obj->opening_balance;
        $sale_all = Sale::where('contact_id', '=', $id)
            ->get();
        $data = $sale_all[0];
        $this->invoiceDate_first = $data['invoice_date'];

    }

    public function sale_Total()
    {

        if ($this->start_date != null) {


            $sale = Sale::when($this->start_date, function ($query, $start_date) {
                return $query->whereDate('invoice_date', '<', $start_date);
            })->where('contact_id', '=', $this->by_company)
                ->get();

            $this->sale_total = 0;
            foreach ($sale as $i) {
                $this->sale_total += floatval($i->grand_total);
            }

            if ($this->start_date > $this->invoiceDate_first) {
                $this->old_balance = floatval($this->opening_balance + $this->sale_total);
            } elseif ($this->start_date <= $this->invoiceDate_first) {
                $this->opening_Balance($this->by_company);
                $this->old_balance = $this->opening_balance;
            }
        }
    }
    #endregion


    #region[List]

    private function getList()
    {


        $sales = Receipt::select([
            'receipts.company_id',
            'receipts.contact_id',
            DB::raw("'receipt' as mode"),
            "receipts.id as vno",
            'receipts.vdate as vdate',
            DB::raw("'' as grand_total"),
            'receipts.receipt_amount',
        ])
            ->where('active_id', '=', $this->activeRecord)
            ->where('contact_id', '=', $this->by_company)
//            ->when($this->by_company, function ($query, $by_company) {
//                return $query->where('contact_id', $by_company);
//            })
            ->when($this->start_date, function ($query, $start_date) {
                return $query->whereDate('vdate', '>=', $start_date);
            })
            ->when($this->end_date, function ($query, $end_date) {
                return $query->whereDate('vdate', '<=', $end_date);
            })
            ->where('company_id', '=', session()->get('company_id'));


        return Sale::select([
            'sales.company_id',
            'sales.contact_id',
            DB::raw("'invoice' as mode"),
            "sales.invoice_no as vno",
            'sales.invoice_date as vdate',
            'sales.grand_total',
            DB::raw("'' as receipt_amount"),
        ])
            ->where('active_id', '=', $this->activeRecord)
            ->where('contact_id', '=', $this->by_company)
            ->when($this->start_date, function ($query, $start_date) {
                return $query->whereDate('invoice_date', '>=', $start_date);
            })
            ->when($this->end_date, function ($query, $end_date) {
                return $query->whereDate('invoice_date', '<=', $end_date);
            })
            ->where('company_id', '=', session()->get('company_id'))
            ->union($sales)
            ->orderBy('vdate')
            ->orderBy('mode')->get();


    }

    #endregion


    public function print()
    {

        if ($this->by_company != null) {
            $this->redirect(route('receviables.print',
                [
                    'party' => $this->by_company, 'start_date' => $this->start_date ?: $this->invoiceDate_first,
                    'end_date' => $this->end_date ?: Carbon::now()->format('Y-m-d'),
                ]));
        }
    }

    #region[Render]
    public function render()
    {
        $this->getContact();
        return view('livewire.reports.statement.receviables')->with([
            'list' => $this->getList()
        ]);
    }
    #endregion
}
