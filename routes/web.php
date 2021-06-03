<?php

use App\Http\Controllers\pageUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageAdmin;

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
// kategori
Route::get('/admin/kategori-berita', [pageAdmin::class, 'kategoriberita']);
Route::get('/admin/kategori-magang', [pageAdmin::class, 'kategorimagang']);
Route::get('/admin/kategori-prestasi', [pageAdmin::class, 'kategoriprestasi']);
// pengaturan-admin
Route::get('/admin/pengaturan-admin', [pageAdmin::class, 'admin']);
