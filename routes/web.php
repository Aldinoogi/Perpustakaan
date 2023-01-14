<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/buku', 'BukuController@bukutampil');
Route::get('/buku/tambah', 'BukuController@bukutambah');
Route::get('/buku/hapus', 'BukuController@bukuhapus');
Route::get('/buku/edit', 'BukuController@bukuedit');





Route::get('/home', function () {
    return view('view_home');});

Route::get('/anggota', 'AnggotaController@anggotatampil');

Route::get('/petugas', 'PetugasController@petugastampil');

Route::get('/pinjam', 'PinjamController@pinjamtampil'); 