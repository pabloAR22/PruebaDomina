<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="my-3 flex justify-between">
                        <p class="text-xl text-white font-bold">{{ $task->title}}</p>
                        <div class="flex flex-col">
                            <div class="flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/></svg>
                                <p class="text-sm ml-3">Fecha final: {{ $task->expDate}}</p>
                            </div>
                            <div class="flex flex-row">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" /></svg>
                                <p class="text-sm ml-3">Usario Asignado: {{ $task->user_id}}</p>
                            </div>
                        </div> 
                    </div>
                    <hr>
                    <p class="text-lg font-semibold text-gray-100 my-3">Description</p>
                    <p class="text-sm my-3">{{ $task->description}}</p>
                    <hr>
                    <div class="comments mt-3">
                        @foreach($comments as $comment)
                            <div class="comment p-4 border rounded border-gray-200 my-3">
                                <div class="encabComment flex justify-between">
                                    <p class="text-lg font-semibold">{{$comment->name}}</p>
                                    <div class="info flex justify-between">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path fill="#ffffff" d="M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H64C28.7 64 0 92.7 0 128v16 48V448c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192 144 128c0-35.3-28.7-64-64-64H344V24c0-13.3-10.7-24-24-24s-24 10.7-24 24V64H152V24zM48 192H400V448c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V192z"/></svg>
                                        <p class="ml-3">{{$comment->created_at}}</p>
                                    </div>
                                    
                                </div>
                                <p class="my-3">{{$comment->comment}}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="mt-4">
                        <form action="{{ route('comments.store', $task->id)}}"  method="post">
                        @csrf
                            <textarea name="comment" id="comment" class="rounded border-gray-200 w-full mb-4 text-black" placeholder="Add a comment"></textarea>
                            <button type="submit" class="bg-blue-400 text-black rounded px-4 py-2"> Add comment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
