<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v2\TaskController;
use App\Http\Controllers\Api\v2\CompleteTaskController;


Route::middleware('auth:sanctum')->prefix('v2') -> group(function() {
    Route::apiResource('/tasks', TaskController::class); // GET, POST, PUT, DELETE
    Route::patch('/tasks/{task}/complete',CompleteTaskController::class); // PATCH
});
