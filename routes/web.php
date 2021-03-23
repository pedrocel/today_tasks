<?php

use Illuminate\Support\Facades\Route;


Auth::routes(
);
Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'getNew'])->name('register');
Route::get('logout', [\App\Http\Controllers\LoginController::class, 'getLogout'])->name('logout.get');
Route::middleware(['auth'])->group(function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('tarefa/assinadas', [\App\Http\Controllers\Task\TaskController::class, 'taskAssignedMe'])->name('task.assignedme.get');
    Route::get('tarefa/delegadas', [\App\Http\Controllers\Task\TaskController::class, 'delegateMe'])->name('task.delegateme.get');
    Route::get('tarefa/novo', [\App\Http\Controllers\Task\TaskController::class, 'getNew'])->name('task.new.get');
    Route::post('tarefa/novo', [\App\Http\Controllers\Task\TaskController::class, 'postNew'])->name('task.new.post');

    Route::get('tarefa/editar/{id_task}', [\App\Http\Controllers\Task\TaskController::class, 'getEdit'])->name('task.edit.get');
    Route::post('tarefa/editar/{id_task}', [\App\Http\Controllers\Task\TaskController::class, 'postEdit'])->name('task.edit.post');

    Route::post('tarefa/excluir/{id_task}', [\App\Http\Controllers\Task\TaskController::class, 'postDelete'])->name('task.delete.post');

    Route::get('perfil/editar', [\App\Http\Controllers\ProfileController::class, 'getEdit'])->name('profile.edit.get');
    Route::post('perfil/editar', [\App\Http\Controllers\ProfileController::class, 'postEdit'])->name('profile.edit.post');


});
