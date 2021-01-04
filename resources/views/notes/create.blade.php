<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex flex-col justify-center items-center">
            <form class="w-full mb-2" action="{{ url('/notes/store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="flex flex-col mb-3 py-2">
                    <label class= "block text-gray-700 text-sm font-bold mb-2" for="title">Title</label>
                    <input class="shadow form-input rounded-md shadow-sm mt-1 block w-full"
                        type="text" placeholder="...Your Note title goes here"  name="title" value="{{ old('title') }}">

                </div>
                <div class="flex flex-col mb-3">
                    <label class= "block text-gray-700 text-sm font-bold mb-2" for="body">Body</label>
                    <textarea id="editor" class="shadow appearance-none bg-transparent border-2 border-gray-400 w-full text-gray-700 mr-3 py-1 px-4 leading-tight focus:outline-none" name="body" rows="5" placeholder="...and here goes your note body" >{{  old('body') }}</textarea>
                </div>

                <button class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" type="submit">
                    Save
                </button>
            </form>
        </section>

    </div>

    <script>
        
    </script>
</x-app-layout>