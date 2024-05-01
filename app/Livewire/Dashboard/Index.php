<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;

class Index extends Component
{

//    public function sendNotify(): void
//    {
////        $dispatch('notify', { content, type })
//        $this->dispatch('notify', ['content' => "Your message here", 'type' => 'info']);
////        $this->dispatch('notify', ['content' => "success", 'type' => 'info']);
//    }

    public function render()
    {
        return view('livewire.dashboard.index');
    }
}
