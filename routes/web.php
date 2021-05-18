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
Route::get('/admin', [pageAdmin::class, 'home']);
