<?php

use App\Http\Controllers\CompleteTaskController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('/tasks',TaskController::class);
Route::patch('/tasks/{task}/complete',CompleteTaskController::class);

Route::apiResource('/products',ProductController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
