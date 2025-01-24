<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomTypeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminFasilitasHotelController;
use App\Http\Controllers\AdminController;

// Hotel homepage route
Route::get('/', function () {
    return view('landing.template');
});

Route::get('/dashboard', function () {
    return view('template.master');
});

// Reservation routes
Route::get('/reservasi', [ReservationController::class, 'create'])->name('reservations.create');
Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservations.store');

// Room types resource routes
Route::resource('room_types', RoomTypeController::class);

// Logout route
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Admin routes group
Route::prefix('admin')->name('admin.')->group(function () {
    // Room type routes
    Route::get('tipekamar', [RoomTypeController::class, 'index'])->name('tipekamar.index');
    Route::get('tipekamar/create', [RoomTypeController::class, 'create'])->name('tipekamar.create');
    Route::post('tipekamar', [RoomTypeController::class, 'store'])->name('tipekamar.store');
    Route::get('tipekamar/{roomType}/edit', [RoomTypeController::class, 'edit'])->name('tipekamar.edit');
    Route::put('tipekamar/{roomType}', [RoomTypeController::class, 'update'])->name('tipekamar.update');
    Route::delete('tipekamar/{roomType}', [RoomTypeController::class, 'destroy'])->name('tipekamar.destroy');

    // Fasilitas Hotel routes (use AdminFasilitasHotelController for this)
    Route::resource('fasilitashotel', AdminFasilitasHotelController::class);
    
    // Fasilitas Kamar routes (uncomment and use fasilitashotelController if needed)
    Route::get('fasilitashotel', [AdminFasilitasHotelController::class, 'index'])->name('fasilitashotel.index');
    Route::get('fasilitashotel/create', [AdminFasilitasHotelController::class, 'create'])->name('fasilitashotel.create');
    Route::post('fasilitashotel', [AdminFasilitasHotelController::class, 'store'])->name('fasilitashotel.store');
    Route::get('fasilitashotel/{fasilitashotel}/edit', [AdminFasilitasHotelController::class, 'edit'])->name('fasilitashotel.edit');
    Route::put('fasilitashotel/{fasilitashotel}', [AdminFasilitasHotelController::class, 'update'])->name('fasilitashotel.update');
    Route::delete('fasilitashotel/{fasilitashotel}', [AdminFasilitasHotelController::class, 'destroy'])->name('fasilitashotel.destroy');
});

// routes/web.php



// Route untuk login dan dashboard admin
Route::get('admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminController::class, 'login'])->name('login');