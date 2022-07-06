<?php

use App\Http\Controllers\API\Admin\AdminController;
use App\Http\Controllers\API\Admin\AuthController as AdminAuthController;
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

Route::prefix('v1')->group(function () {

    Route::prefix('user')->namespace("User")->group(function () {
        Route::post('login', [AuthController::class, "login"])->name('login');
        Route::post('register', [AuthController::class, "register"])->name('register');
    });

    Route::prefix("admin")->name("admin.")->group(function () {
        Route::post('login', [AdminAuthController::class, "login"])->name('login');
        Route::post('register', [AdminAuthController::class, "register"])->name('register');
    });

    Route::name("shared.")->group(function () {
        Route::get("categories/list", [\App\Http\Controllers\API\Shared\CategoryController::class, "list"]);
        Route::get("categories/{slug}", [\App\Http\Controllers\API\Shared\CategoryController::class, "findBySlug"]);
        Route::resource("categories", \App\Http\Controllers\API\Shared\CategoryController::class);

        Route::get("services/list", [\App\Http\Controllers\API\Shared\ServiceController::class, "list"]);
        Route::resource("services", \App\Http\Controllers\API\Shared\ServiceController::class);

        Route::get("admins/list", [AdminController::class, "list"]);
        Route::resource("admins", AdminController::class);
    });
});
