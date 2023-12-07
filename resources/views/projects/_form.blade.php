@csrf

<label for="" class="uppercase text-white text-xs">Project Name</label>
<span class="text-xs text-red">
    @error('name')
        {{ $message }}
    @endError
</span>
<input type="text" class="rounded border-gray-200 w-full mb-4 text-black" name="name" value="{{ old('name', $project->name) }}">

<label for="" class="uppercase text-white text-xs">Description</label>
<span class="text-xs text-red">
    @error('description')
        {{ $message }}
    @endError
</span>
<textarea name="description" rows="5" class="rounded border-gray-200 w-full mb-4 text-black">{{ $project->description }}</textarea>

<label for="" class="uppercase text-white text-xs">Start date</label>
<input type="date" class="rounded border-gray-200 w-full mb-4 text-black" name="startDate" value="{{ old('startDate', $project->startDate) }}">

<div class="flex justify-between items-center">
    <a href=" {{ route('projects.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="border-red-700 text-white rounded px-4 py-2">
</div> 