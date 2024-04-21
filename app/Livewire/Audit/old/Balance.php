<?php

namespace App\Livewire\Audit\old;

use Aaran\Audit\Models\ClientBank;
use Aaran\Audit\Models\ClientBankBalance;
use App\Livewire\Trait\CommonTrait;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Balance extends Component
{
    use CommonTrait;

    #region[Balance properties]
    public string $client_bank_id = '';
    public mixed $cdate;
    public mixed $balance = 0;
    public $clients;
    public $dates;
    #endregion

    #region[Mount]
    public function mount()
    {
        $this->cdate = (Carbon::parse(Carbon::now())->format('Y-m-d'));
        $this->clients = ClientBank::where('active_id', '=', '1')->where('company_id', '=', session()->get('company_id'))->get();
        $this->dates = DB::table('bank_balances')->select('cdate')->distinct('cdate')->limit(3)->orderBy('cdate', 'desc')->get();
    }
    #endregion

    #region[Save]
    public function getSave(): string
    {
        if ($this->client_bank_id != '' or $this->acno != '' or $this->ifsc != '') {
            if ($this->vid !== "") {
                $obj = ClientBankBalance::find($this->vid);
                $obj->client_bank_id = $this->client_bank_id;
                $obj->cdate = $this->cdate;
                $obj->balance = $this->balance;
                $obj->user_id = Auth::id();
                $obj->company_id = session()->get('company_id');
                $obj->save();
                $message = "Updated";
            }

            $this->client_bank_id = '';
            $this->balance = '';

            return $message;
        }
        return '';
    }
    #endregion

    #region[get Obj]
    public function getObj($id)
    {
        if ($id) {
            $obj = ClientBankBalance::find($id);
            $this->vid = $obj->id;
            $this->client_bank_id = $obj->client_bank_id;
            $this->cdate = $obj->cdate;
            $this->balance = $obj->balance;
            return $obj;
        }
        return null;
    }
    #endregion

    #region[Generate]
    public function generate(): void
    {
        $gstClient = ClientBank::where('active_id', '=', '1')->where('company_id', '=', session()->get('company_id'))->get();

        if ($this->cdate == '') {
            $this->cdate = now();
        }

        foreach ($gstClient as $obj) {

            $v = ClientBankBalance::where('client_bank_id', '=', $obj->id)
                ->where('company_id', '=', session()->get('company_id'))
                ->Where('cdate', '=', $this->cdate)
                ->get();

            if ($v->count() == 0) {
                ClientBankBalance::create([
                    'client_bank_id' => $obj->id,
                    'cdate' => $this->cdate,
                    'balance' => 0,
                    'company_id' => session()->get('company_id'),
                    'user_id' => Auth::id()
                ]);
            }
        }
    }
    #endregion

    #region[List]
    public function getList()
    {
        $this->sortField = 'client_bank_id';


        return ClientBankBalance::search($this->searches)
            ->whereDate('cdate', '=', $this->cdate)
            ->where('company_id', '=', session()->get('company_id'))
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
    }
    #endregion

    #region[Render]
    public function reRender()
    {
        $this->render();
    }

    public function render()
    {
        return view('livewire.audit.client.balance')->with([
            'list' => $this->getList()
        ]);
    }
    #endregion
}
