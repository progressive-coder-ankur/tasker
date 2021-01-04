<div class="w-8/12 mx-auto sm:px-6 lg:px-8">
    <div class="mt-2 w-full text-center">
        @forelse($this->tasks as $task)
        <livewire:tasks :task="$task" :key="$task->id . now()"></livewire:tasks>
        @empty
        <p>No tasks.</p>
        @endforelse
    </div>
</div>
