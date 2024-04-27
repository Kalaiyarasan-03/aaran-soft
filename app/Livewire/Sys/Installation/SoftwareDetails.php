<?php

namespace App\Livewire\Sys\Installation;

use Aaran\Common\Models\Software_details;
use App\Livewire\Trait\CommonTrait;
use Illuminate\Support\Str;
use Livewire\Component;

class SoftwareDetails extends Component
{
    use CommonTrait;


    public string $sub_domain = '';
    public string $database = '';
    public string $git = '';
    public string $copy_build_folder = '';
    public string $copy_env = '';
    public string $db_migrate = '';
    public string $storage_link = '';
    public string $user_created = '';
    public string $user_tenant_id = '';
    public  $installed_on = '';
    public string $soft_version = '';
    public string $Db_version = '';
    public $sortField_1='sub_domain';


    #region[save]
    public function getSave(): string
    {
        if ($this->sub_domain != '') {
            if ($this->vid == "") {
                Software_details::create([
                    'sub_domain' => Str::ucfirst($this->sub_domain),
                    'database' => Str::upper($this->database),
                    'git' => Str::upper($this->git),
                    'copy_build_folder' => Str::upper($this->copy_build_folder),
                    'copy_env' => Str::upper($this->copy_env),
                    'db_migrate' => Str::upper($this->db_migrate),
                    'storage_link' => Str::upper($this->storage_link),
                    'user_created' => Str::upper($this->user_created),
                    'user_tenant_id' => Str::upper($this->user_tenant_id),
                    'installed_on' => Str::upper($this->installed_on),
                    'soft_version' => Str::upper($this->soft_version),
                    'Db_version' => Str::upper($this->Db_version),
                    'active_id' => $this->active_id,
                ]);
                $message = "Saved";

            } else {
                $obj = Software_details::find($this->vid);
                $obj->sub_domain = Str::ucfirst($this->sub_domain);
                $obj->database = Str::upper($this->database);
                $obj->git = Str::upper($this->git);
                $obj->copy_build_folder = Str::upper($this->copy_build_folder);
                $obj->copy_env = Str::upper($this->copy_env);
                $obj->db_migrate = Str::upper($this->db_migrate);
                $obj->storage_link = Str::upper($this->storage_link);
                $obj->user_created = Str::upper($this->user_created);
                $obj->user_tenant_id = Str::upper($this->user_tenant_id);
                $obj->installed_on = Str::upper($this->installed_on);
                $obj->soft_version = Str::upper($this->soft_version);
                $obj->Db_version = Str::upper($this->Db_version);
                $obj->active_id = $this->active_id;
                $obj->save();
                $message = "Updated";
            }
            return $message;
        }
        return '';
    }
    #endregion

    #region[clear]
    public function clearFields(): void
    {
        $this->sub_domain = '';
        $this->database = '';
        $this->git = '';
        $this->copy_build_folder = '';
        $this->copy_env = '';
        $this->db_migrate = '';
        $this->storage_link = '';
        $this->user_created = '';
        $this->user_tenant_id = '';
        $this->installed_on = '';
        $this->soft_version = '';
        $this->Db_version = '';
        $this->active_id = true;
    }
    #endregion

    #region[obj]
    public function getObj($id)
    {
        if ($id) {
            $obj = Software_details::find($id);
            $this->vid = $obj->id;
            $this->sub_domain = $obj->sub_domain;
            $this->database = $obj->database;
            $this->git = $obj->git;
            $this->copy_build_folder = $obj->copy_build_folder;
            $this->copy_env = $obj->copy_env;
            $this->db_migrate = $obj->db_migrate;
            $this->storage_link = $obj->storage_link;
            $this->user_created = $obj->user_created;
            $this->user_tenant_id = $obj->user_tenant_id;
            $this->installed_on = $obj->installed_on;
            $this->soft_version = $obj->soft_version;
            $this->Db_version = $obj->Db_version;
            $this->active_id = $obj->active_id;
            return $obj;
        }
        return null;
    }
    #endregion

    #region[list]
    public function getList()
    {
        return Software_details::search($this->searches)
            ->where('active_id', '=', $this->activeRecord)
            ->orderBy($this->sortField_1, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
    }
    #endregion
    #region[sort]
    public function sortBy($field): void
    {
        if ($this->sortField_1=== $field) {
            $this->sortAsc = !$this->sortAsc;
        } else {
            $this->sortAsc = true;
        }
        $this->sortField = $field;
    }
    #endregion

    #region[render]
    public function reRender(): void
    {
        $this->render()->render();
    }

    public function render()
    {
        return view('livewire.sys.installation.software-details')->with([
            'list' => $this->getList()
        ]);
    }
}
