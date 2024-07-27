<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarBookingController;
use App\Http\Controllers\CarListingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'home'], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/index', [HomeController::class, 'index']);
    Route::get('/autocomplete', [HomeController::class, 'autocomplete']);
    Route::get('/search', [HomeController::class, 'search']);
});
Route::group(['prefix' => 'details'], function () {
    Route::get('/', [DetailsController::class, 'index']);
    Route::get('/index/{id}', [DetailsController::class, 'index']);
    Route::post('/comment', [CommentController::class, 'index']);
});
Route::group(['prefix' => 'aboutus'], function () {
    Route::get('/', [AboutusController::class, 'index']);
    Route::get('/index', [AboutusController::class, 'index']);
});
Route::group(['prefix' => 'service'], function () {
    Route::get('/', [ServiceController::class, 'index']);
    Route::get('/index', [ServiceController::class, 'index']);
});
Route::group(['prefix' => 'carlisting'], function () {
    Route::get('/', [CarListingController::class, 'index']);
    Route::get('/index', [CarListingController::class, 'index']);
    Route::get('/segment/{id}', [CarListingController::class, 'segment']);
});
Route::group(['prefix' => 'carbooking'], function () {
    Route::get('/', [CarBookingController::class, 'index']);
    Route::get('/index/{id}', [CarBookingController::class, 'index']);
});
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'index']);
    Route::get('/index', [ContactController::class, 'index']);
});
Route::group(['prefix' => 'register'], function () {
    Route::get('/', [RegisterController::class, 'index']);
    Route::get('/index', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'register']);
});
Route::group(['prefix' => 'admin', 'middleware' => ['AdminMiddleware']], function () {
    Route::group(['prefix' => 'login', 'excluded_middleware' => ['AdminMiddleware']], function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/index', [AdminController::class, 'index']);
        Route::post('/login', [LoginController::class, 'login']);
        Route::get('/logout', [LoginController::class, 'logout']);
    });
    Route::group(['prefix' => 'action'], function () {
        Route::get('/addnewcar', [AdminController::class, 'addnewcar']);
        Route::get('/savedeletecar/{id}', [AdminController::class, 'savedeletecar']);
        Route::get('/editcar/{id}', [AdminController::class, 'editcar']);
        Route::post('/saveaddnewcar', [AdminController::class, 'saveaddnewcar']);
        Route::post('/saveeditcar', [AdminController::class, 'saveeditcar']);
        Route::get('/index', [AdminController::class, 'adminindex']);
    });
    Route::group(['prefix' => 'management'], function () {
        Route::get('/data', [ManagementController::class, 'data']);
        Route::get('/photo', [ManagementController::class, 'photo']);
        Route::get('/index', [ManagementController::class, 'index']);
        Route::get('/searchByName', [ManagementController::class, 'searchByName']);
    });
});
