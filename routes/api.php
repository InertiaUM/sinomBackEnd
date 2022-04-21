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

Route::post('/user/register', [App\Http\Controllers\API\AuthController::class, 'register']);
Route::post('/user/login', [App\Http\Controllers\API\AuthController::class, 'login']);

Route::post('/adminPerusahaan/register', [App\Http\Controllers\API\AdminPerusahaanController::class, 'register']);
Route::post('/adminPerusahaan/login', [App\Http\Controllers\API\AdminPerusahaanController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/profile', function(Request $request) {
        return auth()->user();
    });

    Route::post('/user/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
    Route::post('/adminPerusahaan/logout', [App\Http\Controllers\API\AdminPerusahaanController::class, 'logout']);
});

