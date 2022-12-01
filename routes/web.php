<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashbaord');

Route::get('/knn', function () {
    return view('knn');
})->middleware(['auth', 'verified'])->name('knn');

Route::get('/tabel', [PagesController::class, 'tabel'])->middleware(['auth', 'verified'])->name('tabel');

Route::get('/report', function () {
    return view('report');
})->middleware(['auth', 'verified'])->name('report');

Route::get('/profile', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('profile');

Route::get('/preview/{dosen}', [PagesController::class, 'preview'])->middleware(['auth', 'verified'])->name('preview');



require __DIR__.'/auth.php';