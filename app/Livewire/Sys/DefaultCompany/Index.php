<?php

namespace App\Livewire\Sys\DefaultCompany;

use Aaran\Master\Models\Company;
use App\Models\DefaultCompany;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Index extends Component
{
    #region[properties]
    public $showEditModal=false;
    public Collection $companies;
    public $tenant_id;

    public company $company;
    public string $company_1 = '';
    #endregion

    #region[Create]
    public function create(): void
    {
        $this->showEditModal = true;
    }
    #endregion

    #region[Mount]
    public function mount()
    {
//        $this->switchCompany();
        $this->setDefault(session()->get('tenant_id'));
    }
    #endregion

    #region[get Default]
    public function getDefaultCompany(): void
    {
        $defaultCompany = DefaultCompany::find(1);

        if ($defaultCompany != null) {
            if ($defaultCompany->company_id != 0) {
                $this->company = Company::find($defaultCompany->company_id);
                $this->company_1 = $this->company->vname;
                session()->put('company_id', $defaultCompany->company_id);
            } else {
                $this->company_1 = '';
                $this->getAllCompanies();
            }
        } else {
            $this->getAllCompanies();
        }
    }
    #endregion

    #region[get All]
    public function getAllCompanies(): void
    {
        $this->companies = Company::where('tenant_id', '=', session()->get('tenant_id'))->get();
    }
    #endregion

    #region[set Default]
    public function setDefault(
        $id
    ): void {
        $obj = DefaultCompany::find(1);
        if ($obj) {
            $obj->company_id = $id;
            $obj->tenant_id = session()->get('tenant_id');
            $obj->save();
        } else {
            DefaultCompany::create([
                'company_id' => $id,
                'tenant_id' => session()->get('tenant_id'),
                'acyear' => config('aadmin.current_acyear')
            ]);
        }
        $this->showEditModal=false;

        session()->put('company_id', $id);
    }
    #endregion

    #region[Switch]
    public
    function switchCompany($id): void
    {
        $obj = DefaultCompany::find(1);
        $obj->company_id = $id;
        $obj->save();

        session()->put('company_id', 0);

        $this->showEditModal = false;
    }
    #endregion

    #region[Render]
    public function render()
    {
        $this->getAllCompanies();
        $this->getDefaultCompany();
        return view('livewire.sys.default-company.index');
    }
    #endregion
}
