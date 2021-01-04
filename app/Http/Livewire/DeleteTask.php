<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class DeleteTask extends Component
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
                <button class="btn-todo flex-shrink-0 text-sm border-4 text-white py-1 px-2 rounded btn-red bg-red-500 border-red-500 hover: bg-red-700 border-red-700 mb-2 sm:mb-0" wire:click.stop="$emitTo('task-form', 'taskRemove', {{$this->task->id}})" wire:loading.attr="disabled">
                    <x-icons.trash></x-icons.trash>
                </button>
            </div>
        blade;
        }
}

