<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

// Routes pour les todos
Route::apiResource('todos', TodoController::class);

// Route supplémentaire pour toggle complete
Route::patch('todos/{id}/toggle', [TodoController::class, 'toggleComplete']);