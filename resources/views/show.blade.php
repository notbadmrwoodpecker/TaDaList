@extends('layouts.app')

@section('title', $task->title)

@section('content')
<p>{{ $task->description }}</p>

@if($task->long_description)
    <p>{{ $task->long_description }}</p>
@else
    <p>No more details.. 🕵🏽‍♂️</p>
@endif
@endsection
