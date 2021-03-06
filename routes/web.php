<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('menu', 'App\Http\Controllers\MenuController');

Route::resource('provinsi', 'App\Http\Controllers\ProvinsiController');//slese
Route::resource('kota', 'App\Http\Controllers\KotaController');//slese
Route::resource('pulau', 'App\Http\Controllers\PulauController');//slese
Route::resource('pembayaranJenis', 'App\Http\Controllers\PembayaranJenisController');//slese
Route::resource('barangJenis', 'App\Http\Controllers\BarangJenisController');//selse
Route::resource('role', 'App\Http\Controllers\RoleController');//selese


Route::resource('menu', 'App\Http\Controllers\MenuController');//selese menu input
Route::resource('pengirimanJenis', 'App\Http\Controllers\PengirimanJenisController');//selese menu input
Route::resource('hargaPengiriman', 'App\Http\Controllers\HargaPengirimanController');//selese menu input
Route::resource('notaPengiriman', 'App\Http\Controllers\NotaPengirimanController');//selese menu input
Route::get('/print/invoice/{notaPengiriman}',[App\Http\Controllers\NotaPengirimanController::class, 'print']); //cobak gini ta

Route::resource('tracking', 'App\Http\Controllers\TrackingController');//selese menu input
//Route::get('/tracking/{dataEnkrip}',[App\Http\Controllers\TrackingController::class, 'show']);
Route::resource('approvePengiriman', 'App\Http\Controllers\ApprovePengirimanController');//selese menu input
Route::resource('kurir', 'App\Http\Controllers\KurirController');//selese menu input

Route::resource('userRole', 'App\Http\Controllers\UserRoleController');//selese menu input
Route::resource('roleAccess', 'App\Http\Controllers\RoleAccessController');//selese menu input
