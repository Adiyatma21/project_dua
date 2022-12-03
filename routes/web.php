<?php

use App\Http\Controllers\MatkulController;
use App\Http\Controllers\KelomController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Session\Store;
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
Route::post('/preview-store', [NilaiController::class, 'store']);
Route::delete('/preview-destroy/{pertama}', [NilaiController::class, 'destroy']);
Route::put('/preview-update/{pertama}', [NilaiController::class, 'update']);




Route::get('/matkul',[PagesController::class, 'matkul'])->middleware(['auth', 'verified'])->name('matkul');
Route::post('/matkul-store',[MatkulController::class, 'store']);
Route::delete('/matkul-destroy/{matkul}',[MatkulController::class, 'destroy']);
Route::put('matkul-update/{matkul}', [MatkulController::class, 'update']);

Route::get('/kelom', [PagesController::class, 'kelom'])->middleware(['auth', 'verified'])->name('kelom');
Route::post('/kelom-store', [KelomController::class, 'store']);
Route::delete('/kelom-destroy/{kelom}', [KelomController::class, 'destroy']);
Route::put('/kelom-update/{kelom}', [KelomController::class, 'update']);



Route::post('refresh-csrf', function() {
    return csrf_token();
});



require __DIR__.'/auth.php';
