<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LandingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisionsController;
use App\Http\Controllers\SubVisionsController;
use App\Http\Controllers\TagsController;
use App\Http\Controllers\TaggablesController;

Route::get('/', [LandingController::class, 'index']);
Route::prefix('user')->group( function () {
    Route::get('/dashboard', [UserController::class, 'index']);
    Route::get('/settings', [UserController::class, 'preferences']);
    Route::get('/visions', [VisionsController::class, 'index']);
    Route::get('/tags', [TagsController::class, 'index']);
});
