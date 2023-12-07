<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mt-3 flex justify-between">
                        <p class="text-xl text-white font-bold">{{ $project->name}}</p>
                        <div class="flex">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/></svg>
                            <p class="text-sm ml-3">Fecha de inicio: {{ $project->startDate}}</p>
                        </div> 
                    </div>
                       
                    <p class="text-lg font-semibold text-gray-100 my-3">Description</p>
                    <hr>
                    <p class="text-sm mt-3">{{ $project->description}}</p>
                    <div class="mt-4">
                        <a href="{{ route('tasks.create') }}" class="bg-blue-400 text-black rounded px-4 py-2">Add Tasks</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
