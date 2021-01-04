<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{$note->title }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="bg-white rounded shadow border p-6">
            <div id="editor" class="text-8xl font-bold mb-4 mt-0"> {!! $note->body !!}</div>
        </div>
        <a class="inline-flex items-center justify-center h-12 px-6 my-3 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" href="{{ route('notes.edit', $note->id) }}">Edit</a>

    </div>

</x-app-layout>