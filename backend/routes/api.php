<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MaterialController;
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

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'create']);
    Route::post('login', [AuthController::class, 'login']);
});

Route::prefix('material')->middleware('auth:sanctum')->group(function () {
    Route::post('', [MaterialController::class, 'create']);
    Route::get('', [MaterialController::class, 'index']);
    Route::delete('', [MaterialController::class, 'delete']);
});