<?php

namespace App\Livewire\Audit\ClientBank;

use Aaran\Audit\Models\Client;
use Aaran\Audit\Models\ClientBank;
use App\Enums\Active;
use App\Livewire\Trait\CommonTrait;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Livewire\Component;

class show extends Component
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
        return view('livewire.audit.client-bank.show');
    }
    #endregion
}
