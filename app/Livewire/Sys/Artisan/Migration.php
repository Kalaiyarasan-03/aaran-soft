<?php

namespace App\Livewire\Sys\Artisan;

use App\Models\Role;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;
use Livewire\Component;

class Migration extends Component
{
    public Collection $user;
    public $no;
    public $tenant_id;
    public $role_id;
    public Collection $tenants;
    public Collection $roles;

    public function getUser()
    {
        $this->user = \DB::table('users')->get();
    }

    public function getTenants()
    {
        $this->tenants = \DB::table('tenants')->get();

    }
    public function getRoles()
    {
        $this->roles = \DB::table('roles')->get();
    }

    public function getObj($no)
    {
        $obj = User::find($no);
        $this->tenant_id=$obj->tenant_id;
        $this->role_id=$obj->role_id;
        dd($this->tenant_id);

    }

    public function update()
    {
        $obj = User::find($this->no);
        $obj->tenant_id = $this->tenant_id;
        $obj->role_id = $this->role_id;
        $obj->save();
        $this->role_id='';
        $this->tenant_id='';
        $this->no='';
    }


    #region[Migration]
    public function clearView(): void
    {
        Artisan::call('view:clear');
    }

    public function runMigration(): void
    {
        Artisan::call('migrate');
    }

    public function runMigrationRollBack(): void
    {
        Artisan::call('migrate:rollback');
    }


    public function runMigrationFreshSeed(): void
    {
        Artisan::call('migrate:fresh --seed');
    }

    public function storageLink(): void
    {
        Artisan::call('storage:link');
    }
    #endregion

    public function render()
    {
        $this->getUser();
        $this->getRoles();
        $this->getTenants();
        return view('livewire.sys.artisan.migration');
    }
}
