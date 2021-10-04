<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\SeasonController;
use App\Http\Controllers\Api\v1\MeaningController;

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

Route::prefix('v1')->group(function() {
    Route::get('/seasons', [SeasonController::class, 'index']);
});

Route::prefix('v1')->group(function() {
    Route::get('/meanings/{season}', [MeaningController::class, 'meanings']);
});
// Route::prefix('v1')->group(function() {
//     Route::apiResource('/seasons', SeasonController::class);
// });
