<?php

use Illuminate\Support\Facades\Route;
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

Route::prefix('dashboard')
    ->middleware(['web', 'auth'])
    ->group(function(){
        //dashboard
        Route::get('/', [DashboardController::class, 'index'])
        ->name('dashboard.index');
});
