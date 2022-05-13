<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AnalisaKonsumenController;
use App\Http\Controllers\AnalisaProdukController;
use App\Http\Controllers\AnalisaProfitController;
use App\Http\Controllers\OrgEfficiencyController;
use App\Http\Controllers\ScreenVersusController;
use App\Http\Controllers\SettingsProfileController;

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

Route::get('/', [LogController::class, 'index']);
Route::get('/register', [LogController::class, 'register']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'dashboard']);
