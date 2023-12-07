<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('users.update', $user) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <label for="" class="uppercase text-white text-xs">Name</label>
                        <span class="text-xs text-red">
                            @error('name')
                                {{ $message }}
                            @endError
                        </span>
                        <input type="text" class="rounded border-gray-200 w-full mb-4 text-black" name="name" value="{{ old('name', $user->name) }}">

                        <label for="" class="uppercase text-white text-xs">Email</label>
                        <span class="text-xs text-red">
                            @error('email')
                                {{ $message }}
                            @endError
                        </span>
                        <input type="text" class="rounded border-gray-200 w-full mb-4 text-black" name="email" value="{{ old('email', $user->email) }}">

                        <label for="" class="uppercase text-white text-xs">new Password</label>
                        <span class="text-xs text-red">
                            @error('password')
                                {{ $message }}
                            @endError
                        </span>
                        <input type="text" class="rounded border-gray-200 w-full mb-4 text-black" name="password">

                        <div class="flex justify-between items-center">
                            <a href=" {{ route('users.index') }}" class="text-indigo-600">Volver</a>
                            <input type="submit" value="Enviar" class="border-red-700 text-white rounded px-4 py-2">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>