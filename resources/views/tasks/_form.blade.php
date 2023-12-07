@csrf

<label for="" class="uppercase text-white text-xs">Task title</label>
<span class="text-xs text-red">
    @error('title')
        {{ $message }}
    @endError
</span>
<input type="text" class="rounded border-gray-200 w-full mb-4 text-black" name="title" value="{{ old('title', $task->title) }}">

<label for="" class="uppercase text-white text-xs">Description</label>
<span class="text-xs text-red">
    @error('description')
        {{ $message }}
    @endError
</span>
<textarea name="description" rows="5" class="rounded border-gray-200 w-full mb-4 text-black">{{ $task->description }}</textarea>

<label for="" class="uppercase text-white text-xs">Expiration date</label>
<input type="date" class="rounded border-gray-200 w-full mb-4 text-black" name="expDate" value="{{ old('expDate', $task->expDate) }}">

<label for="" class="uppercase text-white text-xs">Assign User: </label>
<select name="user" id="" class="text-black">
    @foreach ($users as $user)
        <option class="test-black" value="{{ $user->id }}">{{$user->name}}</option>
    @endforeach
</select>

<label for="" class="uppercase text-white text-xs">Select Project: </label>
<select name="project" id="" class="text-black">
    @foreach ($project as $p)
        <option class="test-black" value="{{ $p->id }}">{{$p->name}}</option>
    @endforeach
</select>

<label for="" class="uppercase text-white text-xs">Select status: </label>
<select name="status" id="" class="text-black">
    <option class="test-black" value="0">Pending</option>
    <option class="test-black" value="1">In Progress</option>
    <option class="test-black" value="2">Finished</option>
</select>

<div class="flex justify-between items-center">
    <a href=" {{ route('tasks.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="border-red-700 text-white rounded px-4 py-2">
</div> 