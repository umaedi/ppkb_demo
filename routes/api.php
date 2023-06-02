<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tpk')->group(function () {

    //login
    Route::post('/login', [\App\Http\Controllers\Api\Tpk\LoginController::class, 'login']);
    //catin
    Route::post('/catin/store', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'store']);

    //bumil
    Route::post('/bumil/store', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'store']);

    //Pasca persalinan
    Route::post('/pps/store', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'store']);

    //baduta
    Route::post('/baduta/store', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'store']);

    //data wilayah
    Route::get('/wilayah', [\App\Http\Controllers\Api\Tpk\WilayahController::class, 'index']);

    //data dashboard
    Route::get('/data_dashboard', [\App\Http\Controllers\Api\Tpk\DatadashboardController::class, 'index']);
});
