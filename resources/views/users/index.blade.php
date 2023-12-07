<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight flex items-center justify-between">
            {{ __('Users') }}
            <a href="{{ route('users.create') }}" class="text-xs bg-indigo-600 text-black rounded px-2 py-1">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="mb-4">
                        @foreach ($users as $user)
                            <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4">{{ $user->name}}</td>
                                <td class="px-6 py-4">{{ $user->email }}</td>
                                <td class="px-6 py-4">
                                    <a href="{{ route('users.edit', $user) }}" class="text-indigo-600">Editar</a>
                                </td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('users.destroy', $user )}}" method="POST">
                                        @csrf
                                        @method('DELETE')

                                        <input type="submit" value="Eliminar" class="bg-red-600 text-black rounded px-4 py-2" onclick=" return confirm('Desea eliminar este registro?')">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    {{ $users->links()}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>