<?php
use App\Http\Controllers\Api\v1\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\CompleteTaskController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\LogoutController;
use App\Http\Controllers\Api\Auth\RegisterController;

Route::middleware('auth:sanctum')->prefix('v1') -> group(function() {
    Route::apiResource('/tasks', TaskController::class); // GET, POST, PUT, DELETE
    Route::patch('/tasks/{task}/complete',CompleteTaskController::class); // PATCH
});

Route::prefix('auth')->group(function(){
    Route::post('/login', LoginController::class);
    Route::post('/logout', LogoutController::class)->middleware('auth:sanctum');
    Route::post('/register', RegisterController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


