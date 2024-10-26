<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class Task {
    public function __construct(
        public int $id,
        public string $title,
        public string $description,
        public ?string $long_description,
        public bool $completed,
        public string $created_at,
        public string $updated_at
    )
    {

    }
}

$tasks = [
    new Task(
        1,
        'Complete Chapter 1 of PHP + Laravel Course',
        'Do it!',
        '',
        false,
        '2024-10-26 14:00:00',
        '2024-10-26 14:00:00'
    )
];

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () use($tasks) {
    return view('index', [
        'tasks' => $tasks,
    ]);
})->name('tasks.index');

Route::get('/tasks/{id}', function ($id) use ($tasks) {
    $task = collect($tasks)->firstWhere('id', $id);

    if (!$task) {
        abort(Response::HTTP_NOT_FOUND);
    }

    return view('show', [
        'task' => $task
    ]);
})->name('tasks.show');

Route::fallback(function() {
    return 'Your personal 404 :o';
});
