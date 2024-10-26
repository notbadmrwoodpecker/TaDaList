<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    $tasks = \App\Models\Task::all();

    return view('index', [
        'tasks' => $tasks,
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) {
    $task = \App\Models\Task::findOrFail($id);

    return view('show', [
        'task' => $task
    ]);
})->name('tasks.show');

Route::fallback(function() {
    return 'Your personal 404 :o';
});
