<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class EditTask extends Component
{
    public $task;

    public function mount(Task $task)
    {
        $this->task = $task;
    }

    public function render()
    {
        return <<<'blade'
            <div>
                <button class="btn-todo flex-shrink-0 text-sm border-4 text-white py-1 px-2 rounded btn-purple bg-purple-500 border-purple-500 hover: bg-purple-700 border-purple-700 mb-2 sm:mb-0 mr-2" wire:click.stop="$emitTo('task-form', 'taskEditing', {{$this->task->id}})">
                    <x-icons.edit></x-icons.edit>
                </button>
            </div>
        blade;
    }
}