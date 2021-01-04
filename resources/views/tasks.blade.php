<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Task List') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <livewire:task-form></livewire:task-form>
            <livewire:taskslist></livewire:taskslist>
        </section>

    </div>
</x-app-layout>