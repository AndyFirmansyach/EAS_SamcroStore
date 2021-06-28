<?php

use App\Http\Controllers\UserController;
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

// admin
Route::get('/regist', 'UsersController@regist')->middleware('guest');
Route::post('/regist', 'UsersController@postRegist')->middleware('guest')->name('regist');
Route::get('/login', 'UsersController@index')->name('login');
Route::post('/login', 'UsersController@postLogin')->middleware('guest');
Route::get('/logout', 'UsersController@logout')->middleware('auth')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/menu', 'AdminController@dashboard');
    Route::get('/menu1', 'AdminController@profil');

    Route::get('/menu3', 'AdminController@DaftarPendapatan');
    Route::get('/menu2', 'barangController@index');
    Route::get('/tambahBrg', 'barangController@create');
    Route::post('/tambahBrg', 'barangController@store');
    Route::get('/editBrg/{id}', 'barangController@edit');
    Route::post('/updateBrg', 'barangController@update');
    Route::get('/deleteBrg/{id}', 'barangController@delete');
    Route::post('/pesan', 'AdminController@masukan');
    Route::get('/menu4', 'AdminController@adminMasukan');
    Route::get('/deletePesan/{id}', 'AdminController@deletePesan');
    Route::get('/menu5', 'AdminController@pengeluaran');
    Route::get('/pengeluaran1', 'AdminController@pengeluaranTbh');
    Route::post('/pengeluaran2', 'AdminController@pengeluaranInput');
    Route::get('/editPengeluaran/{id}', 'AdminController@editPengeluaran');
    Route::post('/updatePengeluaran', 'AdminController@updatePengeluaran');
    Route::get('/deletePengeluaran/{id}', 'AdminController@deletePengeluaran');
    Route::get('/deletePemasukkan/{id}', 'AdminController@deletePemasukkan');
});

// user
Route::get('/', 'UserController@Home');
Route::get('/produk', 'UserController@Produk');
Route::get('/kontak', 'UserController@Kontak');
Route::get('/transaksi', 'UserController@Transaksi');
Route::get('/transaksiJ', 'UserController@hitung_js');
Route::post('/transaksi1', 'UserController@transaksiLanjut');
