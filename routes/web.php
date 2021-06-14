<?php

use App\Http\Controllers\pageUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageAdmin;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\MagangController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KategoriberitaController;
use App\Http\Controllers\KategorimagangController;
use App\Http\Controllers\KategoriprestasiController;

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

// Route::get('/admin', [AdminHomeController::class, 'index']);
// Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
// Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
// Route::post('login', [AuthController::class, 'login']);
 
// Route::group(['middleware' => 'auth'], function () {
 
//     Route::get('home', [HomeController::class, 'index'])->name('home');
//     Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [pageUser::class, 'home']);
Route::get('/profil', [pageUser::class, 'profil']);
Route::get('/magang', [pageUser::class, 'magang']);
Route::get('/berita', [pageUser::class, 'berita']);
// admin
Route::get('/login', [LoginController::class, 'showLoginForm']);
Route::get('/admin', [AdminHomeController::class, 'index']);
Auth::routes();


// pengumuman
Route::get('/admin/konten-pengumuman', [PengumumanController::class, 'index']);
Route::delete('/admin/konten-pengumuman/{Pengumuman}', [PengumumanController::class, 'destroy']);
Route::get('/admin/konten-pengumuman/edit/{Pengumuman}', [PengumumanController::class, 'edit']);
Route::patch('/admin/konten-pengumuman/{Pengumuman}', [PengumumanController::class, 'update']);
Route::get('/admin/konten-pengumuman/create', [PengumumanController::class, 'create']);
Route::post('/admin/konten-pengumuman', [PengumumanController::class, 'store']);
Route::get('/admin/konten-pengumuman/{Pengumuman}', [PengumumanController::class, 'show']);
// profile
Route::get('/admin/konten-profile', [ProfileController::class, 'index']);
Route::delete('/admin/konten-profile/{Profile}', [ProfileController::class, 'destroy']);
Route::get('/admin/konten-profile/edit/{Profile}', [ProfileController::class, 'edit']);
Route::patch('/admin/konten-profile/{Profile}', [ProfileController::class, 'update']);
Route::get('/admin/konten-profile/create', [ProfileController::class, 'create']);
Route::post('/admin/konten-profile', [ProfileController::class, 'store']);
Route::get('/admin/konten-profile/{Profile}', [ProfileController::class, 'show']);
// magang
Route::get('/admin/konten-magang', [MagangController::class, 'index']);
Route::delete('/admin/konten-magang/{magang}', [MagangController::class, 'destroy']);
Route::get('/admin/konten-magang/edit/{magang}', [MagangController::class, 'edit']);
Route::patch('/admin/konten-magang/{magang}', [MagangController::class, 'update']);
Route::get('/admin/konten-magang/create', [MagangController::class, 'create']);
Route::post('/admin/konten-magang', [MagangController::class, 'store']);
Route::get('/admin/konten-magang/{magang}', [MagangController::class, 'show']);
// prestasi
Route::get('/admin/konten-prestasi', [PrestasiController::class, 'index']);
Route::delete('/admin/konten-prestasi/{prestasi}', [PrestasiController::class, 'destroy']);
Route::get('/admin/konten-prestasi/edit/{prestasi}', [PrestasiController::class, 'edit']);
Route::patch('/admin/konten-prestasi/{prestasi}', [PrestasiController::class, 'update']);
Route::get('/admin/konten-prestasi/create', [PrestasiController::class, 'create']);
Route::post('/admin/konten-prestasi', [PrestasiController::class, 'store']);
Route::get('/admin/konten-prestasi/{prestasi}', [PrestasiController::class, 'show']);
// berita
Route::get('/admin/konten-berita', [BeritaController::class, 'index']);
Route::delete('/admin/konten-berita/{Berita}', [BeritaController::class, 'destroy']);
Route::get('/admin/konten-berita/edit/{Berita}', [BeritaController::class, 'edit']);
Route::patch('/admin/konten-berita/{Berita}', [BeritaController::class, 'update']);
Route::get('/admin/konten-berita/create', [BeritaController::class, 'create']);
Route::post('/admin/konten-berita', [BeritaController::class, 'store']);
Route::get('/admin/konten-berita/{Berita}', [BeritaController::class, 'show']);
// pengaturan-admin
Route::delete('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'destroy']);
Route::get('/admin/pengaturan-admin', [AdminsController::class, 'index']);
Route::get('/admin/pengaturan-admin/edit/{admin}', [AdminsController::class, 'edit']);
Route::patch('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'update']);
Route::get('/admin/pengaturan-admin/create', [AdminsController::class, 'create']);
Route::post('/admin/pengaturan-admin', [AdminsController::class, 'store']);
Route::get('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'show']);

// kategori - index
Route::get('/admin/kategori-berita', [KategoriberitaController::class, 'index']);
Route::get('/admin/kategori-magang', [KategorimagangController::class, 'index']);
Route::get('/admin/kategori-prestasi', [KategoriprestasiController::class, 'index']);
//kategori - input
Route::get('/admin/kategori-berita/create', [KategoriberitaController::class, 'create']);
Route::get('/admin/kategori-magang/create', [KategorimagangController::class, 'create']);
Route::get('/admin/kategori-prestasi/create', [KategoriprestasiController::class, 'create']);
Route::post('/admin/kategori-berita', [KategoriberitaController::class, 'store']);
Route::post('/admin/kategori-magang', [KategorimagangController::class, 'store']);
Route::post('/admin/kategori-prestasi', [KategoriprestasiController::class, 'store']);
//kategori - edit
Route::get('/admin/kategori-berita/edit/{KategoriBerita}', [KategoriberitaController::class, 'edit']);
Route::get('/admin/kategori-magang/edit/{KategoriMagang}', [KategorimagangController::class, 'edit']);
Route::get('/admin/kategori-prestasi/edit/{KategoriPrestasi}', [KategoriprestasiController::class, 'edit']);
//kategori - upload
Route::put('/admin/kategori-berita/{KategoriBerita}',[KategoriberitaController::class,'update']);
Route::put('/admin/kategori-magang/{KategoriMagang}',[KategorimagangController::class,'update']);
Route::put('/admin/kategori-prestasi/{KategoriPrestasi}',[KategoriprestasiController::class,'update']);
//kategori - delete
Route::delete('/admin/kategori-berita/{KategoriBerita}',[KategoriberitaController::class,'destroy']);
Route::delete('/admin/kategori-magang/{KategoriMagang}',[KategorimagangController::class,'destroy']);
Route::delete('/admin/kategori-prestasi/{KategoriPrestasi}',[KategoriprestasiController::class,'destroy']);
// pengaturan-admin
Route::delete('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'destroy']);
Route::get('/admin/pengaturan-admin', [AdminsController::class, 'index']);
Route::get('/admin/pengaturan-admin/edit/{admin}', [AdminsController::class, 'edit']);
Route::patch('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'update']);
Route::get('/admin/pengaturan-admin/create', [AdminsController::class, 'create']);
Route::post('/admin/pengaturan-admin', [AdminsController::class, 'store']);
Route::get('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'show']);
