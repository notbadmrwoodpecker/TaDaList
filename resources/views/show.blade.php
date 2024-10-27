@extends('layouts.app')

@section('title', $task->title)

@section('content')
    @if (session()->has('success'))
    <div>
        <p>{{ session('success') }}</p>
    </div>
    @endif
    @if($task->description)
        <p>{{ $task->description }}</p>
    @else
        <p>🕵🏽‍♂️ No more details..</p>
    @endif

    <div>
        <a href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit this To-Do</a>
    </div>

    <form action="{{ route('tasks.toggle-complete', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">
            @if ($task->completed)
                Bring it back 🥲
            @else
                I'm done - cross it from the list! 💪
            @endif
        </button>
    </form>

    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete this To-Do</button>
    </form>
@endsection
