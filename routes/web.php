<?php

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    return view('index', ['tasks' => Task::latest()->paginate(10)]);
})->name('tasks.index');

Route::get('/tasks/create', function () {
    return view('create');
})->name('tasks.create');

Route::get('/tasks/{task}', function (Task $task) {
    return view('show', ['task' => $task]);
})->name('tasks.show');

Route::post('/tasks', function (TaskRequest $request) {
    $task = Task::create($request->validated());
    return redirect()->route('tasks.show', ['task' => $task])->with('success', 'Task Created Successfully');
})->name('tasks.store');

Route::fallback(function () {
    return 'Still got somewhere!';
});
