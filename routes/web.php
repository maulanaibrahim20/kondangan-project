<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/', [AppController::class, 'index']);

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'process']);

    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'process']);
});

Route::middleware('auth')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', function () {
            return view('admin.pages.dashboard');
        });
        Route::get('user', [UserController::class, 'index']);
        Route::get('user/create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('user/create', [UserController::class, 'store'])->name('admin.user.store');
        Route::get('user/{id}/edit', [UserController::class, 'edit'])->name('admin.user->edit');
        Route::get('user/{id}/view', [UserController::class, 'show'])->name('admin.user->view');
        Route::put('user/{id}/edit', [UserController::class, 'update'])->name('admin.user->update');
        Route::delete('user/{id}', [UserController::class, 'destroy'])->name('admin.user->destroy');
    });

    Route::get('/logout', LogoutController::class);
});
