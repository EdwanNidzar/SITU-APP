<?php

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BagianController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\LahanController;
use App\Http\Controllers\TanamanController;
use App\Http\Controllers\PemeliharaanController;
use App\Http\Controllers\PanenController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
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
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('bagian', BagianController::class)->middleware(['auth', 'role:admin|pimpinan']);
Route::get('reportBagian', [BagianController::class, 'reportBagian'])->name('reportBagian')->middleware(['auth', 'role:admin|pimpinan']);

Route::resource('jabatan', JabatanController::class)->middleware(['auth', 'role:admin|pimpinan']);
Route::get('reportJabatan', [JabatanController::class, 'reportJabatan'])->name('reportJabatan')->middleware(['auth', 'role:admin|pimpinan']);

Route::resource('pegawai', PegawaiController::class)->middleware(['auth', 'role:admin|pimpinan']);
Route::get('reportPegawai', [PegawaiController::class, 'reportPegawai'])->name('reportPegawai')->middleware(['auth', 'role:admin|pimpinan']);

Route::resource('pelatihan', PelatihanController::class)->middleware(['auth', 'role:admin|pimpinan|user']);
Route::get('reportPelatihan', [PelatihanController::class, 'reportPelatihan'])->name('reportPelatihan')->middleware(['auth', 'role:admin|pimpinan']);

Route::resource('lahan', LahanController::class)->middleware(['auth', 'role:admin|pimpinan']);
Route::get('reportLahan', [LahanController::class, 'reportLahan'])->name('reportLahan')->middleware(['auth', 'role:admin|pimpinan']);

Route::resource('tanaman', TanamanController::class)->middleware(['auth', 'role:admin|pimpinan|user']);
Route::get('reportTanaman', [TanamanController::class, 'reportTanaman'])->name('reportTanaman')->middleware(['auth', 'role:admin|pimpinan|user']);

Route::resource('pemeliharaan', PemeliharaanController::class)->middleware(['auth', 'role:admin|pimpinan|user']);
Route::get('reportPemeliharaan', [PemeliharaanController::class, 'reportPemeliharaan'])->name('reportPemeliharaan')->middleware(['auth', 'role:admin|pimpinan|user']);

Route::resource('panen', PanenController::class)->middleware(['auth', 'role:admin|pimpinan|user']);
Route::get('reportPanen', [PanenController::class, 'reportPanen'])->name('reportPanen')->middleware(['auth', 'role:admin|pimpinan|user']);

require __DIR__.'/auth.php';
