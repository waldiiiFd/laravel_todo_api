<?php
use App\Http\Controllers\Api\v1\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CompleteTaskController;

Route::prefix('v1') -> group(function() {
    Route::apiResource('/tasks', TaskController::class); // GET, POST, PATCH, DELETE
    Route::patch('/tasks/{task}/complete',CompleteTaskController::class); // PATCH
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


