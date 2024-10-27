@extends('layouts.app')

@section('title', 'Today')

@section('content')
<div>
    <a href="{{ route('tasks.create') }}">Create your next To-Do <span class="text-xl font-bold text-gray-700">
        ›
    </span></a>
</div>
<div class="">
    @forelse ($tasks as $task)
            <a class="px-4 py-3 block border-b border-gray-200 flex items-center justify-between first:border-t even:bg-gray-100 hover:bg-lime-50" href="{{ route('tasks.show', ['task' => $task->id]) }}">
                <p class="mr-3">{{ $task->title }}</p>
                <p class="text-xl font-bold text-gray-700">
                    ›
                </p>
            </a>
    @empty
        <p>Everything done for today. 🎉</p>
    @endforelse

    @if ($tasks->count())
        {{ $tasks->links() }}
    @endif
</div>
@endsection
