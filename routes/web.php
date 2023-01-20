<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\AdminDataCabangController;
use App\Http\Controllers\Admin\AdminDataDaerahController;
use App\Http\Controllers\Admin\AdminDataJabatanController;
use App\Http\Controllers\Admin\AdminDataKaderController;
use App\Http\Controllers\Admin\AdminDataRantingController;
use App\Http\Controllers\Admin\AdminSettingsController;
use App\Http\Controllers\Admin\Jabatan_Kader\TambahJabatanKaderController;
use App\Http\Controllers\Admin\Jabatan_Kader\TambahPimpinanCabangController;
use App\Http\Controllers\Admin\Jabatan_Kader\TambahPimpinanDaerahController;
use App\Http\Controllers\Admin\Jabatan_Kader\TambahPimpinanRantingController;
use App\Http\Controllers\Admin\Tambah\TambahAdminCabangController;
use App\Http\Controllers\Admin\Tambah\TambahAdminController;
use App\Http\Controllers\Admin\Tambah\TambahAdminDaerahController;
use App\Http\Controllers\Admin\Tambah\TambahAdminRantingController;
use App\Http\Controllers\Admin\Uraian\OrtomController;
use App\Http\Controllers\Admin\Uraian\PotensiController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\Kader\KaderDashboardController;
use App\Http\Controllers\Kader\KaderOrtomController;
use App\Http\Controllers\Kader\KaderPotensiController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PeriodeController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TempatLahirController;
use App\Http\Controllers\UploadFotoController;
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

// dashboard
Route::get('/admin', [AdminDashboardController::class, 'index']);

// upload foto
Route::get('/upload/foto', [UploadFotoController::class, 'index']);

// auth
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/change/password', [ChangePasswordController::class, 'edit']);
Route::put('/change/password', [ChangePasswordController::class, 'update']);

// teempat_lahir
Route::get('/tempat/lahir', [TempatLahirController::class, 'index']);

// periode
Route::get('/periode', [PeriodeController::class, 'index']);

// pekerjaan
Route::get('/pekerjaan', [PekerjaanController::class, 'index']);

// admin
Route::get('/profil', [ProfilController::class, 'edit']);
Route::put('/profil/update', [ProfilController::class, 'update']);
Route::resource('/data/kader', AdminDataKaderController::class);
Route::get('/get/ranting/{ranting:cabang_id_cabang}', [AdminDataKaderController::class, 'ranting']);
Route::get('/data/kota/kabupaten/', [AdminDataKaderController::class, 'kota_kabupaten']);
Route::get('/data/kecamatan/', [AdminDataKaderController::class, 'kecamatan']);
Route::get('/data/kelurahan/', [AdminDataKaderController::class, 'kelurahan']);
Route::resource('/admin/ortom', OrtomController::class);
Route::resource('/admin/potensi', PotensiController::class);
Route::resource('/data/jabatan', AdminDataJabatanController::class);
Route::get('/jabatan/kader', [TambahJabatanKaderController::class, 'index']);
Route::resource('/tambah/pimpinan/daerah', TambahPimpinanDaerahController::class);
Route::resource('/tambah/pimpinan/cabang', TambahPimpinanCabangController::class);
Route::resource('/tambah/pimpinan/ranting', TambahPimpinanRantingController::class);
Route::resource('/data/daerah', AdminDataDaerahController::class);
Route::get('/sk/pimpinan/daerah/{daerah:id_daerah}', [AdminDataDaerahController::class, 'download']);
Route::resource('/data/cabang', AdminDataCabangController::class);
Route::get('/sk/pimpinan/cabang/{cabang:id_cabang}', [AdminDataCabangController::class, 'download']);
Route::resource('/data/ranting', AdminDataRantingController::class);
Route::get('/sk/pimpinan/ranting/{ranting:id_ranting}', [AdminDataRantingController::class, 'download']);
Route::get('/tambah/admin', [TambahAdminController::class, 'index']);
Route::resource('/tambah/admin/daerah', TambahAdminDaerahController::class);
Route::resource('/tambah/admin/cabang', TambahAdminCabangController::class);
Route::get('/tambah/admin/cabang/getkader/{kader}', [TambahAdminCabangController::class, 'get_kader']);
Route::resource('/tambah/admin/ranting', TambahAdminRantingController::class);
Route::get('/settings', [AdminSettingsController::class, 'index']);
Route::post('/settings/ortom', [AdminSettingsController::class, 'ortom_store']);
Route::post('/settings/potensi', [AdminSettingsController::class, 'potensi_store']);
Route::post('/settings/tempat/lahir', [AdminSettingsController::class, 'tempat_lahir_store']);
Route::post('/settings/pekerjaan', [AdminSettingsController::class, 'pekerjaan_store']);
Route::post('/settings/periode', [AdminSettingsController::class, 'periode_store']);

// kader
Route::get('/kader', [KaderDashboardController::class, 'index']);
Route::get('/profil', [ProfilController::class, 'edit']);
Route::put('/profil/update', [ProfilController::class, 'update']);
Route::resource('/kader/ortom', KaderOrtomController::class);
Route::resource('/kader/potensi', KaderPotensiController::class);
