<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/task', [TaskController::class, 'index']);         // Get all tasks
Route::post('/store-task', [TaskController::class, 'store']);        // Create a task
Route::get('/tasks/{id}', [TaskController::class, 'show']);     // Get a single task
Route::put('/tasks/{id}', [TaskController::class, 'update']);   // Update a task
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']); // Delete a task