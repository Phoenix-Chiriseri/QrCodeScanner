<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeController;
use App\Http\Controllers\PatientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/welcome', [QrCodeController::class, 'generateQrCode'])->name('welcome');
Route::get('/form', [QrCodeController::class, 'showForm'])->name('form');
Route::post('/store/patients', [PatientController::class, 'store'])->name('patients.store');