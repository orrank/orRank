<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\QueueController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){

    Route::get('/dashboard', [UserController::class, 'dashboard']);

    Route::get('/dark-mode/{state}',  [UserController::class, 'darkMode']);

    Route::post('/user:profile:detail:update', [UserController::class, 'infoUpdate']);

    Route::post('/user:profile:image:upload', [UserController::class, 'imageUpdate']);

    Route::get('/organization/new', [OrganizationController::class, 'index']);

    Route::get('/queue/new', [QueueController::class, 'index']);

    Route::post('/queue/create', [QueueController::class, 'store']);
});

Route::post('/user:registration', [UserController::class, 'store']);

Route::get('/user:image:remove', [UserController::class, 'imageRemove']);

Route::get('/{username}', [UserController::class, 'index']);

Route::group(['prefix' => '{username}', 'middleware' => ['auth']], function ($username) {

    Route::get('/dashboard', [UserController::class, 'dashboard']);

    Route::get('/profile', [UserController::class, 'index']);

    Route::get('/profile:edit', [UserController::class, 'update']);

    Route::get('/queues', [QueueController::class, 'list']);

    Route::get('/{queue}', [QueueController::class, 'show']);
});
