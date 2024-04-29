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
    public function __invoke($party,$start_date,$end_date)
    {
        $sale=$this->getList($party,$start_date,$end_date);
        Pdf::setOption(['dpi' => 150, 'defaultPaperSize' => 'a4', 'defaultFont' => 'sans-serif', 'fontDir']);

        $pdf = PDF::loadView('pdf.salesreport.report',
        [
            'obj'=>$sale,
        ]
        );

        $pdf->render();
        return $pdf->stream();
    }




    private function getList($party,$start_date,$end_date)
    {

        return Sale::select(
            'sales.*',
            'contacts.vname as contact_name',
        )
            ->join('contacts', 'contacts.id', '=', 'sales.contact_id')
            ->where('contact_id','=',$party)
            ->whereBetween('invoice_date', [$start_date, $end_date])
            ->get()->all();


    }



}
