<?php

namespace App\Livewire\Taskmanager\Task;

use Aaran\Taskmanager\Models\Reply;
use Aaran\Taskmanager\Models\Task;
use App\Enums\Active;
use App\Enums\Status;
use App\Livewire\Trait\CommonTrait;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Show extends Component
{
    use CommonTrait;

    #region[properties]
    public string $client_id;
    public string $body;
    public string $reply;
    public string $channel;
    public string $username;
    public $updated_at;
    public string $allocated;
    public string $status;
    public string $changeStatus = '';
    public int $actives;
    public $task_id;

    public Task $editing;
    public $tags;
    public $users;
    public $replies;
    public $commentsCount;
    public $verified;
    public $verified_on;
    public $images;
    #endregion

    #region[Mount]
    public function mount($id): void
    {
        $this->getObj($id);

        $this->replies = Reply::where('task_id', $id)->get();
        $this->commentsCount = Reply::where('task_id', $id)->count();
        $this->images = Image::where('task_id','=', $id)->get();
    }
    #endregion

    #region[Save]
    public function getSave(): string
    {
        if ($this->reply) {
            if ($this->task_id) {

                Reply::create([
                    'task_id' => $this->task_id,
                    'vname' => $this->reply,
                    'verified' => $this->verified,
                    'verified_on' => $this->verified_on,
                    'user_id' => Auth::user()->id,
                ]);

                $this->reply = '';
                $this->verified_on = '';
                $this->verified = '';
            }
        }
        redirect()->to(route('tasks.show', [$this->task_id]));

        return '';
    }
    #endregion

    #region[get Obj]
    public function getObj($id)
    {
        if ($id) {

            $obj = Task::find($id);

            $this->task_id = $obj->id;
            $this->client_id = $obj->client_id;
            $this->vname = $obj->title;
            $this->body = $obj->body;
            $this->channel = $obj->channel;
            $this->allocated = $obj->allocated;
            $this->verified = $obj->verified;
            $this->verified_on = $obj->verified_on;
            $this->updated_at = $obj->updated_at;
            $this->status = $obj->status;
            $this->username = $obj->user->name;
            $this->actives = $obj->actives ? 0 : 1;
            return $obj;
        }
        return null;
    }
    #endregion

    #region[Update]
    public function updateStatus(): void
    {
        $this->validate(['changeStatus' => 'required']);
        $obj = Task::find($this->task_id);
        $obj->status = $this->changeStatus;
        $obj->save();
        redirect()->to(route('tasks.show', [$this->task_id]));
    }
    #endregion

    #region[Admin]
    public function adminCloseTask(): void
    {
        $obj = Task::find($this->task_id);
        $obj->status = Status::ADMINCLOSED->value;
        $obj->active_id = Active::NOTACTIVE->value;
        $obj->save();
        redirect()->to(route('tasks'));
    }
    #endregion

    #region[Render]
    public function render()
    {
        return view('livewire.taskmanager.task.show');
    }
    #endregion
}
