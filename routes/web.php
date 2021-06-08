<?php

use App\Http\Controllers\pageUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageAdmin;
use App\Http\Controllers\AdminsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [pageUser::class, 'home']);
Route::get('/profil', [pageUser::class, 'profil']);
Route::get('/magang', [pageUser::class, 'magang']);
Route::get('/berita', [pageUser::class, 'berita']);
// admin
Route::get('/admin', [pageAdmin::class, 'home']);
Route::get('/admin/login', [pageAdmin::class, 'login']);
// konten
Route::get('/admin/konten-home', [pageAdmin::class, 'kontenhome']);
Route::get('/admin/konten-profile', [pageAdmin::class, 'kontenprofile']);
Route::get('/admin/konten-berita', [pageAdmin::class, 'kontenberita']);
Route::get('/admin/konten-magang', [pageAdmin::class, 'kontenmagang']);
Route::get('/admin/konten-prestasi', [pageAdmin::class, 'kontenprestasi']);
// kategori
Route::get('/admin/kategori-berita', [pageAdmin::class, 'kategoriberita']);
Route::get('/admin/kategori-magang', [pageAdmin::class, 'kategorimagang']);
Route::get('/admin/kategori-prestasi', [pageAdmin::class, 'kategoriprestasi']);
// pengaturan-admin
Route::delete('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'destroy']);
Route::get('/admin/pengaturan-admin', [AdminsController::class, 'index']);
Route::get('/admin/pengaturan-admin/edit/{admin}', [AdminsController::class, 'edit']);
Route::patch('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'update']);
Route::get('/admin/pengaturan-admin/create', [AdminsController::class, 'create']);
Route::post('/admin/pengaturan-admin', [AdminsController::class, 'store']);
Route::get('/admin/pengaturan-admin/{admin}', [AdminsController::class, 'show']);