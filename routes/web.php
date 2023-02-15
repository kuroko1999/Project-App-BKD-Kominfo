<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', 'PegawaiController@halamanutama');
    Route::get('pegawai/pdf', 'PegawaiController@pdf')->name('pegawai-pdf');
    Route::resource('/pegawai', 'PegawaiController');

    Route::resource('/KontrakdanJabatan', 'JabatanController');
    Route::get('pegawai/{id}/showKontrakdanJabatan', 'JabatanController@tampil');

    Route::resource('/chart', 'ChartController');

    Route::resource('pegawai.KontrakdanJabatan', 'JabatanController');
    Route::get('pegawai/KontrakdanJabatan/{id}', 'JabatanController@pel');
    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes();
