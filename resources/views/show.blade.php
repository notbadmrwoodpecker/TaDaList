@extends('layouts.app')

@section('title', $task->title)

@section('content')
    @if (session()->has('success'))
    <div class="w-full bg-lime-200 text-lime-800 px-2 py-2 rounded mb-4">
        <p class="font-bold text-sm">{{ session('success') }}</p>
    </div>
    @endif
    <div class="pb-2 mb-4 border-b">
        @if($task->description)
            <p>{{ $task->description }}</p>
        @else
            <p class="flex flex-col items-center text-sm text-gray-500"><span class="text-2xl">🕵🏽‍♂️</span> No more details..</p>
        @endif
    </div>

    <nav>
        <div class="mb-2">
            <form action="{{ route('tasks.toggle-complete', ['task' => $task->id]) }}" method="POST">
                @csrf
                @method('PUT')
                @if ($task->completed)
                    <button type="submit" class="w-full bg-blue-400 text-blue-900 px-3 py-4 rounded hover:bg-blue-500">
                        🥲 Bring it back
                    </button>
                @else
                    <button type="submit" class="w-full bg-lime-400 text-lime-900 px-3 py-4 rounded hover:bg-lime-500">
                        💪 <span class="font-bold">I'm done</span> - cross it from the list!
                    </button>
                @endif
            </form>
        </div>

        <div class="mb-2">
            <a class="inline flex items-center justify-between text-lime-700 hover:text-lime-900" href="{{ route('tasks.edit', ['task' => $task->id]) }}">
                <p class="w-full underline text-sm text-center">Edit this To-Do</p>
            </a>
        </div>
    </nav>
@endsection
