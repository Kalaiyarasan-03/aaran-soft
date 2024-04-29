<?php

namespace App\Livewire\Reports\Statement;

use Aaran\Entries\Models\Receipt;
use Aaran\Entries\Models\Sale;
use Aaran\Master\Models\Contact;
use Aaran\Master\Models\Order;
use App\Livewire\Trait\CommonTrait;
use Illuminate\Database\Eloquent\Collection;
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
    #endregion

    #region[Contact]
    public function getContact()
    {
        $this->contact = Contact::where('company_id', '=', session()->get('company_id'))->get();
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
            ->when($this->by_company, function ($query, $by_company) {
                return $query->where('contact_id', $by_company);
            })
            ->when($this->start_date, function ($query, $start_date) {
                return $query->whereDate('invoice_date', '>=', $start_date);
            })
            ->when($this->end_date, function ($query, $end_date) {
                return $query->whereDate('invoice_date', '<=', $end_date);
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
            ->when($this->by_company, function ($query, $by_company) {
                return $query->where('contact_id', $by_company);
            })
            ->when($this->start_date, function ($query, $start_date) {
                return $query->whereDate('vdate', '>=', $start_date);
            })
            ->when($this->end_date, function ($query, $end_date) {
                return $query->whereDate('vdate', '<=', $end_date);
            })
            ->where('company_id', '=', session()->get('company_id'))
            ->union($sales)
            ->orderBy('vdate')
            ->orderBy('mode')
            ->paginate($this->perPage);
    }

    #endregion


    public function print()
    {
        if ($this->by_company&&$this->start_date&&$this->end_date !=null) {
            $this->redirect(route('receviables.print',
                ['party' => $this->by_company, 'start_date' => $this->start_date, 'end_date' => $this->end_date]));
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
