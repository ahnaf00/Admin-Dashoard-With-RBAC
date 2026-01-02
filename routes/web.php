<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\PrivilegeController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin-only routes
    Route::prefix('admin')->group(function () {
        // Super Admin only - Roles, Permissions & User Role management
        Route::middleware(['super-admin'])->group(function () {
            Route::resource('roles', RoleController::class);
            Route::resource('privileges', PrivilegeController::class)->only(['index', 'create', 'store', 'edit', 'update', 'destroy']);
            Route::resource('users', UserController::class)->only(['index', 'edit', 'update']);
        });
    });

    Route::post('/logout', [DashboardController::class, 'logout'])->name('logout');
});
