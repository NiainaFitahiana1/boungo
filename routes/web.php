<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Page unique pour CRUD AJAX
Route::get('/crud', function () {
    return view('crud');
})->name('crud.page');

// CRUD API routes (JSON) via web routes so CSRF is enabled for AJAX from same origin
Route::prefix('crud-api')->group(function () {
    Route::apiResource('roles', \App\Http\Controllers\Crud\RoleController::class);
    Route::apiResource('ads', \App\Http\Controllers\Crud\AdController::class);
    Route::apiResource('ads-images', \App\Http\Controllers\Crud\AdImageController::class);
    Route::apiResource('favorites', \App\Http\Controllers\Crud\FavoriteController::class)->only(['index','store','show','destroy']);
    Route::apiResource('views', \App\Http\Controllers\Crud\ViewController::class)->only(['index','store','show','destroy']);
    Route::apiResource('comments', \App\Http\Controllers\Crud\CommentController::class)->only(['index','store','show','destroy']);
    Route::apiResource('applies', \App\Http\Controllers\Crud\ApplyController::class);
    Route::apiResource('notifications', \App\Http\Controllers\Crud\NotificationController::class);
});
