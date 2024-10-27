@extends('layouts.app')

@section('title', isset($task) ? 'Edit & Fine-Tune your To-Do 🛠️' : 'Ready for your next Ta-Da 🥳')

@section('content')
    <form method="POST" action="{{ isset($task) ? route('tasks.edit', ['task' => $task->id]) : route('tasks.store') }}">
        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div>
            <label for="title">What's your next To-Do?</label>
            <input type="text" name="title" id="title" value="{{ $task->title ?? old('title') }}" />
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Note</label>
            <textarea name="description" id="description" rows="5">{{ $task->description ?? old('description') }}</textarea>
        </div>
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        <button type="submit">Make it happen</button>
    </form>
@endsection
