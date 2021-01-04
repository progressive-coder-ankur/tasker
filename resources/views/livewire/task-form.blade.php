<div class="w-8/12 mx-auto sm:px-6 lg:px-8">
    <div class="w-full">
        <form class="w-full mb-2" wire:submit.prevent="">
            <div class="flex items-center py-2">
                <input wire:model="name"
                    class="shadow h-12 appearance-none bg-transparent border-none w-full text-gray-700 mr-3 py-1 px-4 leading-tight focus:outline-none"
                    type="text" placeholder="Task..." aria-label="Full name">
                <button class="btn-todo flex-shrink-0 text-sm border-4 text-white py-1 px-2 rounded {{ $this->isEditing ? 'btn-purple bg-purple-500 border-purple-500 hover: bg-purple-700 border-purple-700 ' : 'btn-teal bg-teal-500 border-teal-500 hover: bg-teal-700 border-teal-700 ' }}" type="submit"
                    wire:click="{{ $this->isEditing ? 'edit' : 'add' }}" wire:loading.attr="disabled">
                    @if ($this->isEditing)
                    <x-icons.edit></x-icons.edit>
                    @else
                    <x-icons.plus></x-icons.plus>
                    @endif
                </button>
            </div>
        </form>
        @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
    </div>
</div>
