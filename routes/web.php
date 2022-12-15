<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LocalizationController;

Route::get('/localization/{language}',
[LocalizationController::class, 'switch'])
->name('localization.switch');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes([
    'register' => false
]);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'dashboard', 'middleware' => ['web', 'auth']], function () {
    //dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    //categories
    Route::get('/categories/select', [CategoryController::class, 'select'])->name('categories.select');
    Route::resource('/categories', CategoryController::class);
});

// Route::prefix('dashboard')
//     ->middleware(['web', 'auth'])
//     ->group(function(){
//         //dashboard
//         Route::get('/', [DashboardController::class, 'index'])
//         ->name('dashboard.index');

//         //categories
//         Route::resource('/categories', CategoryController::class);

// });
