<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use App\Models\User;

class Taskslist extends Component
{
    protected $listeners = [
        'taskAdded' => '$refresh',
        'taskEdited' => '$refresh',
        'taskRemoved' => '$refresh',
    ];

    public function getTasksProperty()
    {
        return auth()->user()->tasks()->latest()->get();
    }

    public function render()
    {
        return view('livewire.taskslist');
    }
}
