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
@endsection
