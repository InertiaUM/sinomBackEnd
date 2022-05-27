<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogController;
use App\Http\Controllers\{HomeController};
use App\Http\Controllers\AnalisaKonsumenController;
use App\Http\Controllers\AnalisaProdukController;
use App\Http\Controllers\AnalisaProfitController;
use App\Http\Controllers\OrgEfficiencyController;
use App\Http\Controllers\ScreenVersusController;
use App\Http\Controllers\SettingsProfileController;
use App\Http\Controllers\Superadmin\{VerifyCompanyController};
use Illuminate\Support\Facades\Auth;

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

// Route::get('/login', [LogController::class, 'index'])->name('login');
// Route::get('/register', [LogController::class, 'register'])->name('register');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware('superadmin')->group(function() {
        Route::resource('verification', VerifyCompanyController::class);
    });
});

