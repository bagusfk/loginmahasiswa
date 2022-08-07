<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth/login');
});
Route::get('/testing', function () {
    return view('home1');
});

Auth::routes();

// index
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/matakuliah', [App\Http\Controllers\MatakuliahController::class, 'index'])->name('matakuliah');
Route::get('/absensi', [App\Http\Controllers\AbsenController::class, 'index'])->name('absensi');
Route::get('/jadwal', [App\Http\Controllers\JadwalController::class, 'index'])->name('jadwal');
Route::get('/kontrak', [App\Http\Controllers\KontrakMatakuliahController::class, 'index'])->name('kontrak');
Route::get('/semester', [App\Http\Controllers\SemesterController::class, 'index'])->name('semester');

// Create
Route::post('/semester/create', [App\Http\Controllers\SemesterController::class, 'store'])->name('semester/create');
Route::post('/matakuliah/create', [App\Http\Controllers\MatakuliahController::class, 'store'])->name('matakuliah/create');
Route::post('/absensi/create', [App\Http\Controllers\AbsenController::class, 'store'])->name('absensi/create');
Route::post('/kontrak/create', [App\Http\Controllers\KontrakMatakuliahController::class, 'store'])->name('kontrak/create');
Route::post('/jadwal/create', [App\Http\Controllers\JadwalController::class, 'store'])->name('jadwal/create');

//update
Route::post('/semester/edit/{id}', [App\Http\Controllers\SemesterController::class, 'update'])->name('semester/edit');
Route::post('/matakuliah/edit/{id}', [App\Http\Controllers\MatakuliahController::class, 'update'])->name('matakuliah/edit');
Route::post('/jadwal/edit/{id}', [App\Http\Controllers\JadwalController::class, 'update'])->name('jadwal/edit');

//delete
Route::delete('/semester/{id}', [App\Http\Controllers\SemesterController::class, 'destroy'])->name('semester/delete');
Route::delete('/matakuliah/{id}', [App\Http\Controllers\MatakuliahController::class, 'destroy'])->name('matakuliah/delete');
Route::delete('/kontrak/{id}', [App\Http\Controllers\KontrakMatakuliahController::class, 'destroy'])->name('kontrak/delete');
Route::delete('/jadwal/{id}', [App\Http\Controllers\JadwalController::class, 'destroy'])->name('jadwal/delete');
