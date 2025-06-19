<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\BookingSaya;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CabangController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('master');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified','role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('users',AdminController::class);
    Route::get('/users/create', [AdminController::class, 'usersCreate'])->name('admin.users.create');
    Route::post('/users', [AdminController::class, 'usersStore'])->name('admin.users.store'); 
    Route::get('/admin/users/{user}', [AdminController::class, 'usersShow'])->name('admin.users.show');
Route::get('/admin/users/{id}/edit', [AdminController::class, 'edit'])->name('admin.users.edit');
Route::delete('/admin/users/{user}', [AdminController::class, 'usersDestroy'])->name('admin.users.destroy');
Route::get('/admin/users/{id}/edit', [AdminController::class, 'usersEdit'])->name('admin.users.edit');
Route::put('/admin/users/{user}', [AdminController::class, 'usersUpdate'])->name('admin.users.update');
Route::post('/cabang-layanan', [AdminController::class, 'storeCabangLayanan'])->name('admin.cabangLayanan.store');
});

Route::middleware(['auth', 'verified','role:teknisi'])->group(function () {
    Route::get('/teknisi/dashboard', [TeknisiController::class, 'index'])->name('teknisi.dashboard');
    Route::put('/booking/{id}/update-status', [TeknisiController::class, 'updateStatus'])->name('pemesanan.updateStatus');
    
});

Route::middleware(['auth', 'verified','role:customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('dashboard');
    Route::post('/customer/pesan', [CustomerController::class, 'store'])->name('customer.pesan');
    Route::post('/customer/pesan', [CustomerController::class, 'store'])->name('customer.pesan');
});

require __DIR__.'/auth.php';
