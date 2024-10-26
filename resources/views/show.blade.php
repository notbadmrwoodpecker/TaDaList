@extends('layouts.app')

@section('title', $task->title)

@section('content')
    @if($task->description)
        <p>{{ $task->description }}</p>
    @else
        <p>🕵🏽‍♂️ No more details..</p>
    @endif
@endsection
