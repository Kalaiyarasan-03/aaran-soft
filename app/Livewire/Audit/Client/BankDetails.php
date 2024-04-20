<?php

namespace App\Livewire\Audit\Client;

use Aaran\Audit\Models\ClientBank;
use App\Livewire\Trait\CommonTrait;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class BankDetails extends Component
{
    use CommonTrait;

    #region[Bank-details properties]
    public ClientBank $bank;
    public Collection $banks;
    #endregion

    #region[Client Bank]
    public function getClientBank()
    {
        $this->banks=ClientBank::all();
    }
    public function switch($i)
    {
        $this->mount($i);
    }
    #endregion

    #region[Mount]
    public function mount($id)
    {
        if ($id) {
            $this->bank = ClientBank::find($id);
        }
    }
    #endregion

    #region[Render]
    public function render()
    {
        $this->getClientBank();
        return view('livewire.audit.client.bank-details');
    }
    #endregion
}
