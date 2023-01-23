<?php

use App\Http\Controllers\Master\CountryController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix("master")->group(function () {
    Route::prefix("country")->group(function () {
        Route::post('/api/{action}/{authCode?}', [CountryController::class, 'api'])->name('api.master.country.index');
    });
});
