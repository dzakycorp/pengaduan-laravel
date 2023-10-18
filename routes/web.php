<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\MasyarakatController;
use App\Http\Controllers\PetugasController;

Route::get('/', function () {
    return view('welcome');
});

Route ::get('/home', [PengaduanController::class, 'index']);

Route::get('/isi_pengaduan',[PengaduanController::class, 'proses_isi_pengaduan']);
Route::post('/isi_pengaduan', [PengaduanController::class, 'proses_tambah_pengaduan']);

Route ::get('/data-masyarakat', [MasyarakatController::class, 'data_masyarakat']);
Route ::post('/daftar',[MasyarakatController::class, 'daftar_masyarakat']);

Route ::post('/petugas',[PetugasController::class, 'daftar_petugas']);
Route ::get('/data-petugas', [PetugasController::class, 'data_petugas']);

Route ::get('/hapus_pengaduan/{id}', [ PengaduanController::class,'hapus']);
Route ::get('/detail_pengaduan/{id}', [PengaduanController::class, 'detail']);
Route ::get('/Update/{id}', [PengaduanController::class, 'update']);
Route ::post('/update/{id}', [PengaduanController::class, 'proses_update']);




// Route ::post('/login',[MasyarakatController::class,'login']);

Route ::get('/login', function(){
    return view('login');

});



Route ::get('/daftar', function(){
    return view('daftar');

});

Route ::get('/petugas', function(){
    return view('daftar-petugas');
});

