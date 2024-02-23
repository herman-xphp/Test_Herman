<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/soal1', [TestController::class, 'soalSatu'])->name('soalSatu.index');
Route::get('/soal2', [TestController::class, 'soalDua'])->name('soalDua.index');
Route::get('/soal3', [TestController::class, 'soalTiga'])->name('soalTiga.index');
Route::post('/soal3/proses', [TestController::class, 'proses'])->name('soalTiga.proses');
