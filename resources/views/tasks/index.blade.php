<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Tasks') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="mb-4">
                        @foreach ($tasks as $task)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">{{ $task->title}}</td>
                                <td class="px-6 py-4">{{ $task->expDate }}</td>
                                <td class="px-6 py-4">{{ $task->state }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('tasks.edit', $task) }}" class="text-indigo-600">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('tasks.destroy', $task)}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" value="Eliminar" class="bg-red-600 text-black rounded px-4 py-2" onclick=" return confirm('Desea eliminar este registro?')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $tasks->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>