@extends('layouts.app')

@section('title', 'Edit & Fine-Tune your To-Do')

@section('content')
    <form method="POST" action="{{ route('tasks.edit', ['id' => $task->id]) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">What's your next To-Do?</label>
            <input type="text" name="title" id="title" value="{{ $task->title }}" />
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Note</label>
            <textarea name="description" id="description" rows="5">{{ $task->description }}</textarea>
        </div>
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        <button type="submit">Make it happen</button>
    </form>
@endsection
