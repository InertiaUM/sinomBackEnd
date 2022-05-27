<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController,
    LogController,
    OrgEfficiencyController,
    ScreenVersusController,
    SettingsProfileController
};
use App\Http\Controllers\Company\{
    CompanyInfoController,
    CompanyNewsController,
    ProductController,
    ProfitController,
    RatingController
};
use App\Http\Controllers\Superadmin\{
    VerifyCompanyController
};
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
    Route::get('/comparison', function () {
        return view('comparison');
    })->name('comparison');
    Route::get('/consument-analyst', function () {
        return view('consument-analyst');
    })->name('consument-analyst');
    Route::get('/profit-analyst', function () {
        return view('profit-analyst');
    })->name('profit-analyst');
    Route::get('/organization', function () {
        return view('organization');
    })->name('organization');
    Route::get('/organization/detail', function () {
        return view('organization-detail');
    })->name('organization-detail');

    Route::middleware('superadmin')->group(function () {
        Route::resource('verification', VerifyCompanyController::class)->except(['create', 'store', 'edit']);
        Route::get('verification/{verification}/file', [VerifyCompanyController::class, 'file'])->name('verification.file');
    });

    Route::middleware('company.active')->group(function () {
        Route::resource('info', CompanyInfoController::class);
        Route::resource('news', CompanyNewsController::class);
        Route::resource('product', ProductController::class);
        Route::resource('product.profit', ProfitController::class);
        Route::resource('product.rating', RatingController::class);
    });
});
