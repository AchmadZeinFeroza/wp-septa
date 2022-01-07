<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\RumahController;
use App\Http\Controllers\FurnitureController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\GambarController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\LokasiController;

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
Auth::routes();

// Hak Akses Superadmin,Admin dan Mandor
Route::group(['middleware' => ['checkRole:1,2,3']] , function(){
    Route::resource('/beranda', BerandaController::Class);
    Route::get('/profil', [UserController::Class, 'profil'])->name('user.profil');
    Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
});

// Hak Akses Superadmin dan Mandor
Route::group(['middleware' => ['checkRole:1,3']] , function(){
    Route::resource('/laporan', LaporanController::Class);
    Route::post('/laporan/foto/{id}' ,[LaporanController::Class, 'foto']);
    Route::delete('/laporan/foto/{id}' ,[LaporanController::Class, 'hapus_foto']);
    Route::post('/laporan/tambah-foto' ,[LaporanController::Class, 'tambah_foto']);
    Route::get('/laporan/detail/{id}' ,[LaporanController::Class, 'detail']);
    Route::group(['middleware' => ['checkRole:1']] , function(){
        Route::post('/laporan/verifikasi/disetujui/{id}' ,[LaporanController::Class, 'disetujui'])->name('laporan.disetujui');
        Route::post('/laporan/verifikasi/ditolak/{id}' ,[LaporanController::Class, 'ditolak'])->name('laporan.ditolak');
    });
});

// Hak Akses Superadmin dan Admin
Route::group(['middleware' => ['checkRole:1,2']] , function(){
    Route::get('/website/show', [WebsiteController::Class, 'show']);
    Route::patch('/website/update/{id}', [WebsiteController::Class, 'update']);
    Route::get('/website/slideshow', [WebsiteController::Class, 'slideshow']);
    Route::post('/website/slideshow', [WebsiteController::Class, 'create_slideshow']);
    Route::patch('/website/slideshow/{id}', [WebsiteController::Class, 'update_slideshow']);
    Route::delete('/website/slideshow/hapus/{id}', [WebsiteController::Class, 'delete_slideshow'])->name('slideshow.destroy');
    Route::resource('/user', UserController::Class);
    Route::resource('/pesan', PesanController::Class);
    Route::prefix('produk')->group(function () {
        Route::resource('/rumah', RumahController::Class);
        Route::resource('/lokasi', LokasiController::Class);
        Route::delete('/lokasi/foto/{id}', [LokasiController::Class, 'hapus_foto']);
        Route::post('/lokasi/tambah', [LokasiController::Class, 'tambah_foto']);
        Route::post('/lokasi/harga', [LokasiController::Class, 'harga']);
        Route::resource('/furniture', FurnitureController::Class);
        Route::resource('/kategori', KategoriController::Class);
        Route::resource('/jenis', JenisController::class);
        Route::resource('/gambar', GambarController::class);
    });
});

// Hak Akses Umum
Route::get('/', [WebsiteController::Class, 'index'])->name('index');
Route::get('/furniture', [WebsiteController::Class, 'kategori']);
Route::get('/furniture/produk/{id}', [WebsiteController::Class, 'furniture']);
Route::get('/furniture/produk/jenis/{id}', [WebsiteController::Class, 'jenis']);
Route::get('/furniture/produk/detail/{id}', [WebsiteController::Class, 'detail_furniture']);
Route::get('/furniture/produk/pilih/kategori/{id}', [WebsiteController::Class, 'pilih_kategori']);
Route::get('/furniture/produk/pilih/jenis/{id}', [WebsiteController::Class, 'pilih_jenis']);
Route::get('/rumah/produk/detail/{id}', [WebsiteController::Class, 'detail_rumah']);
Route::get('/rumah', [WebsiteController::Class, 'rumah']);
Route::get('/lokasi', [WebsiteController::Class, 'lokasi']);
Route::get('/lokasi/{id}', [WebsiteController::Class, 'detail_lokasi']);
Route::get('/kontak', [WebsiteController::Class, 'kontak']);
Route::get('/checkout/furniture/{id}', [WebsiteController::Class, 'form_furniture']);
Route::get('/checkout/rumah/{id}', [WebsiteController::Class, 'form_rumah']);
Route::get('/checkout/lokasi/{id}', [WebsiteController::Class, 'form_lokasi']);
Route::post('/checkout/rumah/pilih/{id}', [WebsiteController::Class, 'pilih_rumah']);
Route::post('/checkout/lokasi/pilih/{id}', [WebsiteController::Class, 'pilih_lokasi']);
Route::post('/checkout/rumah/harga', [WebsiteController::Class, 'harga_rumah']);
Route::post('/modal/{id}', [WebsiteController::Class, 'modal']);
Route::post('/pesan/customer', [PesanController::Class, 'pesan']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
