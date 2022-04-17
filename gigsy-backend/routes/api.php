<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\User\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v1')->namespace("API")->group(function() {
    Route::prefix('user')->namespace("User")->group(function () {
        Route::post('login', [AuthController::class, "login"])->name('login');
        Route::post('register', [AuthController::class, "register"])->name('register');
    });
    Route::namespace("Shared")->name("shared.")->group(function () {
        Route::get("services", [\App\Http\Controllers\API\Shared\ServiceController::class,"index"])->name('services.index');
    });
});
