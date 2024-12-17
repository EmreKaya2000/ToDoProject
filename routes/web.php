<?php


use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;



//Task Route'ları start
Route::get('/panel/tasks/create', [TaskController::class, 'createPage'])->name('panel.tasks.create');
Route::post('/panel/tasks/create', [TaskController::class, 'addTask'])->name('panel.tasks.add');

//Task Route'ları end
