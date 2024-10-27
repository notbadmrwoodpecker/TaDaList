@extends('layouts.app')

@section('title', 'Today')

@section('content')
<div class="px-4 mb-2">
    <a class="inline flex items-center justify-between text-lime-700 hover:text-lime-900" href="{{ route('tasks.create') }}">
        <p class="underline">Create your next To-Do</p>
        <span class="text-xl font-bold ml-3 no-underline">
            ›
        </span>
    </a>
</div>
<div class="mb-4">
    <div class="mb-4">
        @forelse ($tasks as $task)
                <a class="px-4 py-3 block border-b border-gray-200 flex items-center justify-between first:border-t even:bg-gray-100 hover:bg-lime-50" href="{{ route('tasks.show', ['task' => $task->id]) }}">
                    <p class="mr-3 {{ $task->completed ? 'line-through opacity-50' : 'no-underline' }}">{{ $task->title }}</p>
                    <p class="text-xl font-bold text-gray-700">
                        ›
                    </p>
                </a>
        @empty
            <p>Everything done for today. 🎉</p>
        @endforelse
    </div>

    @if ($tasks->count())
        {{ $tasks->links() }}
    @endif
</div>
@endsection
