<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notes') }}
        </h2>
        
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a class="inline-flex items-center justify-center h-12 px-6 mb-3 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" href="{{ route('notes.create') }}">Create</a>

            <div class="bg-white rounded shadow border p-6">
                @if($notes->isEmpty())
                    <h5 class="text-8xl font-bold mb-4 mt-0"> You have not created any notes!&nbsp;<a class="inline-flex items-center justify-center h-12 px-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-400 hover:bg-deep-purple-accent-700 focus:shadow-outline focus:outline-none" href="{{ route('notes.create') }}">Create one</a> now.</h5>
                @else

                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        SN.
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Title
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Body
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Created At
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Role
                        </th>
                        <th scope="col" class="relative px-6 py-3">Actions
                        <span class="sr-only">Actions</span>
                        </th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($notes as $note)
                            
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-500">{{$note->id}}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900"> {{ $note->title }}</div>
                            <div class="text-sm text-gray-500"></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap w-64">
                        <div class="text-sm text-gray-900">{!! $note->body !!}</div>
                        <div class="text-sm text-gray-500"></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $note->created_at->diffForHumans() }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-2 inline-flex text-xs leading-5 font-semibold rounded bg-green-100 text-green-800">
                                Admin  
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                        <a href="{{ route('notes.show', $note->id )}}" class="inline-flex items-center justify-center h-8 px-6 font-small text-white transition duration-200 rounded shadow-md bg-deep-purple-accent-200 hover:bg-deep-purple-accent-400 focus:shadow-outline focus:outline-none">Show</a>
                        <a href="{{ route('notes.edit', $note->id )}}" class="inline-flex items-center justify-center h-8 px-6 font-small text-white transition duration-200 rounded shadow-md bg-teal-accent-200 hover:bg-teal-accent-400 focus:shadow-outline focus:outline-none">Edit</a>
                        <a href="{{ route('notes.delete', $note->id )}}" class="inline-flex items-center justify-center h-8 px-6 font-small text-white transition duration-200 rounded shadow-md bg-red-accent-200 hover:bg-red-accent-400 focus:shadow-outline focus:outline-none">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                    <!-- More rows... -->
                    </tbody>
                </table>
            </div>
                @endif
        </div>
    </div>
</x-app-layout>