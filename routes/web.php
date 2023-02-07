<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\HomeUserController;
use App\Http\Controllers\Admin\HomeAdminController;
use App\Http\Controllers\Guest\AcountUserController;
use App\Http\Controllers\Admin\AcountAdminController;
use App\Http\Controllers\Admin\CategoryController;

//ADMIN
Route::get('/system_admin/login', [AcountAdminController::class, 'index'])->name('admin.login.form');
Route::post('/system_admin/login', [AcountAdminController::class, 'login'])->name('admin.login');
Route::get('/system_admin/logout', [AcountAdminController::class, 'logout'])->name('admin.logout');

Route::prefix('system_admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::get('/', [HomeAdminController::class, 'index'])->name('admin.home');

        //category
        Route::prefix('category')->group(function () {
            Route::get('add', [CategoryController::class, 'add'])->name('admin.category.add');
        });
    });
});


//GUEST
Route::get('/', [HomeUserController::class, 'index'])->name('home');

// register
Route::post('/register', [AcountUserController::class, 'register']);

//login
Route::post('/login', [AcountUserController::class, 'login']);
Route::get('/logout', [AcountUserController::class, 'logout'])->name('guest.logout');

//change password
Route::post('/changePassword', [AcountUserController::class, 'changePassword']);

// forgot password
Route::get('/forgot', [AcountUserController::class, 'showForgotForm'])->name('forgot.password.form');
Route::post('/forgot', [AcountUserController::class, 'sendResetLink'])->name('forgot.password.link');
Route::get('/reset/{token}', [AcountUserController::class, 'showResetForm'])->name('reset.password.form');
Route::post('/reset', [AcountUserController::class, 'resetPassword'])->name('reset.password');
