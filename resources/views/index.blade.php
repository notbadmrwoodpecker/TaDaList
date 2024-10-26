@extends('layouts.app')

@section('title', 'Today')

@section('content')
<div>
    @forelse ($tasks as $task)
        <a href="{{ route('tasks.show', ['id' => $task->id]) }}">{{ $task->title }}</a>
    @empty
        <p>Everything done for today. 🎉</p>
    @endforelse
</div>
@endsection
