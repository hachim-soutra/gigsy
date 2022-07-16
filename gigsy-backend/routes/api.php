<?php

use App\Http\Controllers\API\Admin\AdminController;
use App\Http\Controllers\API\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\API\User\AuthController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->middleware('seen')->group(function () {
    Route::prefix('user')->namespace('User')->group(function () {
        Route::post('login', [AuthController::class, 'login'])->name('login');
        Route::post('register', [AuthController::class, 'register'])->name('register');
    });

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::post('login', [AdminAuthController::class, 'login'])->name('login');
        Route::post('register', [AdminAuthController::class, 'register'])->name('register');
    });

    Route::prefix('seller')->name('seller.')->group(function () {
        Route::get('services/list/{userId}', [\App\Http\Controllers\API\seller\ServiceController::class, 'list']);
        Route::get('services/filter/{status}/{userId}', [\App\Http\Controllers\API\seller\ServiceController::class, 'filterByStatus']);
        Route::resource('services', \App\Http\Controllers\API\Shared\ServiceController::class);
    });

    Route::name('shared.')->group(function () {
        Route::get('categories/list', [\App\Http\Controllers\API\Shared\CategoryController::class, 'list']);
        Route::get('category/{slug}', [\App\Http\Controllers\API\Shared\CategoryController::class, 'findBySlug']);
        Route::resource('categories', \App\Http\Controllers\API\Shared\CategoryController::class);

        Route::get('services/list', [\App\Http\Controllers\API\Shared\ServiceController::class, 'list']);
        Route::get('services/filter/{status}', [\App\Http\Controllers\API\Shared\ServiceController::class, 'filterByStatus']);
        Route::get('gigs/{slug}', [\App\Http\Controllers\API\Shared\ServiceController::class, 'findBySlug']);
        Route::resource('services', \App\Http\Controllers\API\Shared\ServiceController::class);

        Route::get('admins/list', [AdminController::class, 'list']);
        Route::resource('admins', AdminController::class);

        Route::get('buyers/list', [\App\Http\Controllers\API\Shared\BuyerController::class, 'list']);
        Route::resource('buyers', \App\Http\Controllers\API\Shared\BuyerController::class);

        Route::get('sellers/list', [\App\Http\Controllers\API\Shared\SellerController::class, 'list']);
        Route::resource('sellers', \App\Http\Controllers\API\Shared\SellerController::class);

        Route::post('store-newsletter', [\App\Http\Controllers\API\Shared\NewsLetterController::class, 'store']);
        Route::post('store-contact', [\App\Http\Controllers\API\Shared\NewsLetterController::class, 'storeContact']);

        Route::get('/messages', [App\Http\Controllers\API\ChatsController::class, 'fetchMessages']);
        Route::post('/messages', [App\Http\Controllers\API\ChatsController::class, 'sendMessage']);
    });
});
