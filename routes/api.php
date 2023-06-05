<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Contracts\Role;

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

//login tpk
Route::post('/login', [\App\Http\Controllers\Api\Tpk\LoginController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('tpk')->group(function () {

        //login

        //catin
        Route::post('/catin/store', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'store']);
        Route::get('/catin', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'index']);
        Route::get('/catin/show/{id}', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'show']);
        Route::post('/catin/update/{id}', [\App\Http\Controllers\Api\Tpk\CatinController::class, 'update']);

        //bumil
        Route::get('/bumil', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'index']);
        Route::post('/bumil/store', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'store']);
        Route::get('/bumil/show/{id}', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'show']);
        Route::post('/bumil/update/{id}', [\App\Http\Controllers\Api\Tpk\BumilController::class, 'update']);

        //Pasca persalinan
        Route::get('/pps', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'index']);
        Route::post('/pps/store', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'store']);
        Route::get('/pps/show/{id}', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'show']);
        Route::get('/pps/update/{id}', [\App\Http\Controllers\Api\Tpk\PpsController::class, 'update']);

        //baduta
        Route::get('/baduta', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'index']);
        Route::post('/baduta/store', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'store']);
        Route::get('/baduta/show/{id}', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'show']);
        Route::post('/baduta/update/{id}', [\App\Http\Controllers\Api\Tpk\BadutaController::class, 'update']);

        //data wilayah
        Route::get('/wilayah', [\App\Http\Controllers\Api\Tpk\WilayahController::class, 'index']);

        //data dashboard
        Route::get('/data_dashboard', [\App\Http\Controllers\Api\Tpk\DatadashboardController::class, 'index']);
    });
});
