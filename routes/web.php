<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\OrganizationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/user:registration', [UserController::class, 'store']);

Route::get('/user:image:remove', [UserController::class, 'imageRemove']);

Route::get('/{username}', [UserController::class, 'index']);

Route::group(['prefix' => '{username}', 'middleware' => ['auth']], function ($username) {

    Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

    Route::get('/profile', [UserController::class, 'profile'])->name('profile');

    Route::get('/profile:edit', [UserController::class, 'update'])->name('edit-profile');

    Route::get('/organizations/new', [OrganizationController::class, 'index'])->name('new-org');
    
});

// Form Routes
Route::group(['middleware' => 'auth'], function(){

    Route::get('/dark-mode/{state}',  [UserController::class, 'darkMode'])->name('darkMode');

    Route::post('/user:profile:detail:update', [UserController::class, 'infoUpdate'])->name('infoUpdate');

    Route::post('/user:profile:image:upload', [UserController::class, 'imageUpdate'])->name('imageUpdate');

});
