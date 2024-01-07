<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("/karyawan", KaryawanController::class);

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawans.index');

Route::post('/karyawans', [KaryawanController::class, 'update'])->name('karyawans.update');

Route::post('/karyawans', [KaryawanController::class, 'store'])->name('karyawans.store');

