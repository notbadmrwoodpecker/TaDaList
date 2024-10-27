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

    <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete To-Do</button>
    </form>
@endsection
