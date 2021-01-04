<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class Tasks extends Component
{
    public $task;

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function complete()
    {
        $this->task->toggleCompletion();
    }

    public function inProgress()
    {
        $this->task->toggleInProgress();
    }

    public function render()
    {
        return view('livewire.tasks');
    }
}
