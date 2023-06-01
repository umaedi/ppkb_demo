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
    return view('welcome');
});

Route::prefix('tpk')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Tpk\DashboardController::class, 'index']);

    //catin
    Route::controller(\App\Http\Controllers\Tpk\CatinController::class)->group(function () {
        Route::get('/catin', 'index')->name('tpk.catin.index');
    });

    //bumil
    Route::controller(\App\Http\Controllers\Tpk\BumilController::class)->group(function () {
        Route::get('/bumil', 'index')->name('tpk.bumil');
    });
});
