<?php

use App\Task;

Route::get('/tasks', function () {
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
});

Route::get('/tasks/incomplete', function() {
    $tasks = Task::incomplete()->get();
    return view('tasks.incomplete', compact('tasks'));
});

Route::get('/tasks/incomplete/{id}', function($id) {
    $task = Task::incomplete()->where('id', '=', $id)->first();
    return view('tasks.showIncomplete', compact('task'));
});

Route::get('/tasks/{id}', function($id) {
    $task =Task::find($id);
    return view('tasks.show', compact('task'));
});
