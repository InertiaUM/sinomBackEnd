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

// Route::get('/auth', [LogController::class, 'index'])->name('auth.login');
// Route::get('/register', [LogController::class, 'register'])->name('auth.register');

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/product-analyst', function () {
        return view('product-analyst');
    })->name('product-analyst');
    Route::get('/organitation', function () {
        return view('organitation');
    })->name('organitation');
    Route::get('/organitation/detail', function () {
        return view('organitation-detail');
    })->name('organitation-detail');

    Route::middleware('superadmin')->group(function () {
        Route::resource('verification', VerifyCompanyController::class)->except(['create', 'store', 'edit']);
    });
});
