<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\jurusanController;
use App\Http\Controllers\pimpinanJurusanController;
use App\Http\Controllers\pimpinanProdiController;
use App\Http\Controllers\prodiController;
use App\Http\Controllers\dosenController;
use App\Http\Controllers\smsTahunAkademikController;
use App\Http\Controllers\kurikulumController;
use App\Http\Controllers\matakuliahController;
use App\Http\Controllers\kbkController;
use App\Http\Controllers\pengurusKbkController;
use App\Http\Controllers\dosenKbkController;
use App\Http\Controllers\dosenMatkulController;
use App\Http\Controllers\rpsMatkulController;
use App\Http\Controllers\soalController;
use App\Http\Controllers\verifikasiRpsController;
use App\Http\Controllers\verifikasiSoalController;
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
    return view('welcome');
});

//jurusan
Route::get('/jurusan', [jurusanController::class, 'view']);
Route::get('/formjurusan', [jurusanController::class, 'create'])->name('jurusanController.create');
Route::post('/formjurusan',[jurusanController::class,'save'])->name('admin/jurusan/save');
//prodi
Route::get('/pimpinanjurusan', [pimpinanJurusanController::class, 'view']);
Route::get('/pimpinanprodi', [pimpinanProdiController::class, 'view']);
Route::get('/insert-jurusan', [jurusanController::class, 'insertjurusan']);
Route::get('/insert-prodi', [prodiController::class, 'insertprodi']);
Route::get('/prodi', [prodiController::class, 'view']);
Route::get('/dosen', [dosenController::class, 'view']);
Route::get('/dosenkbk', [dosenKbkController::class, 'view']);
Route::get('/dosenmatkul', [dosenMatkulController::class, 'view']);
Route::get('/tahunAkademik', [smsTahunAkademikController::class, 'view']);
Route::get('/kurikulum', [kurikulumController::class, 'view']);
Route::get('/matakuliah', [matakuliahController::class, 'view']);
Route::get('/kbk', [kbkController::class, 'view']);
Route::get('/penguruskbk', [pengurusKbkController::class, 'view']);
Route::get('/rps', [rpsMatkulController::class, 'view']);
Route::get('/soal', [soalController::class, 'view']);
Route::get('/verifikasirps', [verifikasiRpsController::class, 'view']);
Route::get('/verifikasisoal', [verifikasiSoalController::class, 'view']);
Route::get('/prodi/filter', 'prodiController@filter')->name('prodiController.filter');



