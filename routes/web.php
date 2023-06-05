<?php

use Illuminate\Support\Facades\Route;

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
    return view('tpk.login.index');
});

Route::get('/login', [\App\Http\Controllers\Tpk\LoginController::class, 'index']);

Route::middleware(['auth' => 'tpk'])->group(function () {
    Route::prefix('tpk')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\Tpk\DashboardController::class, 'index'])->name('tpk.index');

        //profile
        Route::get('/profile', [\App\Http\Controllers\Tpk\ProfileController::class, 'index'])->name('tpk.profile');

        //catin
        Route::controller(\App\Http\Controllers\Tpk\CatinController::class)->group(function () {
            Route::get('/catin', 'index')->name('tpk.catin.index');
            Route::get('/catin/show', 'show')->name('tpk.catin.show');
        });

        //bumil
        Route::controller(\App\Http\Controllers\Tpk\BumilController::class)->group(function () {
            Route::get('/bumil', 'index')->name('tpk.bumil.index');
        });

        //pps
        Route::controller(\App\Http\Controllers\Tpk\PpsController::class)->group(function () {
            Route::get('/pps', 'index')->name('tpk.pps.index');
        });

        //baduta
        Route::controller(\App\Http\Controllers\Tpk\BadutaController::class)->group(function () {
            Route::get('/baduta', 'index')->name('tpk.baduta.index');
        });
    });
});
