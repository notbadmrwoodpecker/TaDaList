@extends('layouts.app')

@section('title', 'Ready for your next Ta-Da 🥳')

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <div>
            <label for="title">What's to do?</label>
            <input type="text" name="title" id="title" />
            @error('title')
                <p>{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Note</label>
            <textarea name="description" id="description" rows="5"></textarea>
        </div>
            @error('description')
                <p>{{ $message }}</p>
            @enderror
        <button type="submit">Add to my list</button>
    </form>
@endsection
