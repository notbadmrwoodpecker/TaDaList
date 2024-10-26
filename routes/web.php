<?php

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    $tasks = Task::latest()->get();

    return view('index', [
        'tasks' => $tasks,
    ]);
})->name('tasks.index');

Route::view('/tasks/create', 'create')->name('tasks.create');

Route::get('/tasks/{id}', function ($id) {
    $task = Task::findOrFail($id);

    return view('show', [
        'task' => $task
    ]);
})->name('tasks.show');

Route::post('/tasks', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'description' => '',
    ]);

    $task = new Task;
    $task->title = $data['title'];
    $task->description = $data['description'];
    $task->save();

    return redirect()->route('tasks.show', ['id' => $task->id])
        ->with('success', 'Ready to be you next Ta-Da 💪');
})->name('tasks.store');

Route::fallback(function() {
    return 'Your personal 404 :o';
});
