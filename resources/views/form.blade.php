@extends('layouts.app')

@section('title', isset($task) ? 'Edit & Fine-Tune your To-Do 🛠️' : 'Ready for your next Ta-Da 🥳')

@section('content')
    <form class="mb-4" method="POST" action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-2">
            <label class="text-sm text-gray-700" for="title">What's your next To-Do?</label>
            <input class="w-full block border px-2 py-1 rounded" type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" />
            @error('title')
                <p class="text-sm text-red-800">⚠️ {{ $message }}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label class="text-sm text-gray-700" for="description">Note</label>
            <textarea class="w-full block border px-2 py-1 rounded" name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
        </div>
            @error('description')
                <p class="text-sm text-red-800">⚠️ {{ $message }}</p>
            @enderror
            <button type="submit" class="w-full bg-lime-400 text-lime-900 px-3 py-4 rounded hover:bg-lime-500">
                🤩 Make it happen!
            </button>
    </form>

    @isset($task)
        <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="w-full text-sm bg-red-300 text-red-900 px-2 py-2 rounded hover:bg-red-400">
                🗑️ Delete this To-Do
            </button>
        </form>
    @endisset
@endsection
