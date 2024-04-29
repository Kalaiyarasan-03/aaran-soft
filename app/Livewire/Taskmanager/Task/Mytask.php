<?php

namespace App\Livewire\Taskmanager\Task;

use Aaran\Audit\Models\Client;
use Aaran\Taskmanager\Models\Task;
use App\Enums\Active;
use App\Livewire\Trait\CommonTrait;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Mytask extends Component
{
    use CommonTrait;
    use WithFileUploads;

    #region[properties]
    public string $client_id = '1';
    public string $body;
    public mixed $cdate;
    public string $channel;
    public string $allocated;
    public string $status;

    public $tags;
    public $users;
    public $clients;
    public $commentsCount;
    public $verified;
    public $verified_on;

    public $image;
    public $isUploaded=false;
    #endregion

    #region[Mount]
    public function mount()
    {
        $this->cdate = (Carbon::parse(Carbon::now())->format('Y-m-d'));
        $this->users = User::all();
        $this->clients = Client::where('active_id','=',Active::ACTIVE )->get();
    }
    #endregion

    #region[Save]
    public function getSave(): string
    {
        if ($this->vname) {

            if ($this->vid == "") {
                Task::create([
                    'client_id' => $this->client_id,
                    'title' => $this->vname,
                    'body' => $this->body,
                    'channel' => $this->channel,
                    'allocated' => $this->allocated,
                    'status' => 1,
                    'verified' => $this->verified,
                    'verified_on' => $this->verified_on,
                    'image' => $this->save_image(),
                    'user_id' => Auth::user()->id,
                    'active_id' => $this->active_id ? 1 : 0
                ]);
                $message = "Saved";

            } else {
                $obj = Task::find($this->vid);
                $obj->client_id = $this->client_id;
                $obj->title = $this->vname;
                $obj->body = $this->body;
                $obj->channel = $this->channel;
                $obj->allocated = $this->allocated;
                $obj->status = $this->status;
                $obj->verified = $this->verified;
                $obj->verified_on = $this->verified_on;
                if ($obj->image != $this->image) {
                    $obj->image = $this->save_image();
                } else {
                    $obj->image = $this->image;
                }
                $obj->active_id = $this->active_id;
                $obj->save();
                $message = "Updated";
            }

            $this->client_id = '';
            $this->vname = '';
            $this->body = '';
            $this->channel = '';
            $this->allocated = '';
            $this->status = '';
            $this->verified = '';
            $this->verified_on = '';
            $this->image = '';

            return $message;
        }
        return '';
    }
    #endregion

    #region[get Obj]
    public function getObj($id)
    {
        if ($id) {
            $obj = Task::find($id);
            $this->vid = $obj->id;
            $this->client_id = $obj->client_id;
            $this->vname = $obj->title;
            $this->body = $obj->body;
            $this->channel = $obj->channel;
            $this->allocated = $obj->allocated;
            $this->status = $obj->status;
            $this->verified = $obj->verified;
            $this->verified_on = $obj->verified_on;
            $this->image=$obj->image;
            $this->active_id = $obj->active_id;

            return $obj;
        }
        return null;
    }

    #region[List]
    public function getList()
    {
        $this->sortField = 'id';

        return Task::search($this->searches)
            ->where('active_id', '=', $this->activeRecord)
            ->where('allocated', '=', Auth::id())
            ->where('status', '!=', 100)
            ->with('user',)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
            ->paginate($this->perPage);
    }
    #endregion

    #region[Image]
    public function updatedImage()
    {
        $this->validate([
            'image'=>'image|max:1024',
        ]);

        $this->isUploaded=true;
    }

    public function save_image()
    {
        if ($this->image == '') {
            return $this->image = 'empty';
        } else {
        $image_name=$this->image->getClientOriginalName();
            return $this->image->storeAs('photos', $image_name,'public');
        }
//        return $this->image->storeAs('photos',$image_name,'public');
    }
    #endregion

    #region[Render]
    public function render()
    {
        return view('livewire.taskmanager.task.mytask', [
            'list' => $this->getList()
        ]);
    }
    #endregion
}
