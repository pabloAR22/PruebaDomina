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

<label for="" class="uppercase text-white text-xs">Password</label>
<input type="password" class="rounded border-gray-200 w-full mb-4 text-black" name="password">

<div class="flex justify-between items-center">
    <a href=" {{ route('users.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="border-red-700 text-white rounded px-4 py-2">
</div>