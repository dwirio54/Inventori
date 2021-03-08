<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * mendapatkan url atau route baru
 * untuk master barang
 */

 Route::group(['prefix'=>'master-barang'],function(){
     Route::get('/index','BarangController@index')->name('master-barang');
     Route::get('/formulir-barang','MasterBarang\MasterBarangController@create')->name('master-barang.formulir-barang');
     Route::get('laporan-barang', 'Laporan\BarangController@index')->name('laporan.periode.barang');
     Route::get('/laporan-suplier', 'Laporan\SuplierController@index')->name('laporan.periode.suplier');
     Route::get('/edit/{barang}', 'MasterBarang\MasterBarangController@edit')->name('master-barang.edit');
     Route::post('store','MasterBarang\MasterBarangController@store')->name('master-barang.store');
     Route::patch('update/{barang}','MasterBarang\MasterBarangController@update')->name('master-barang.update');
     Route::delete('delete/{barang}', 'MasterBarang\MasterBarangController@destroy')->name('master-barang.delete');
     Route::get('/show','MasterBarang\MasterBarangController@show')->name('master-barang.show');

 });

 Route::group(['prefix' => 'transaksi'], function(){
     Route::get('/index','Transaksi\TransaksiController@index')->name('transaksi');
     Route::get('/create','Transaksi\BarangKeluarController@create')->name('transaksi.barang-keluar');
     Route::get('/barang-keluar', 'Transaksi\BarangKeluarController@create')->name('transaksi.barang-keluar');
     Route::post('/store', 'Transaksi\BarangKeluarController@store')->name('transaksi.store');  
 });

 Route::group(['prefix'=> 'suplier'], function(){
    Route::get('index','Suplier\SuplierController@index')->name('suplier.index');
    Route::get('create','Suplier\SuplierController@create')->name('suplier.create');
    Route::post('store','Suplier\SuplierController@store')->name('suplier.store');
    Route::get('edit/{suplier}','Suplier\SuplierController@edit')->name('suplier.edit');
    Route::patch('update/{suplier}','Suplier\SuplierController@update')->name('suplier.update');
    Route::delete('delete/{suplier}', 'Suplier\SuplierController@destroy')->name('suplier.delete');
});

Route::group(['prefix'=> 'profile'], function(){
    Route::get('index','Profile\ProfileController@index')->name('profile.index');
    Route::get('create','Profile\ProfileController@create')->name('profile.create');
    Route::post('profile','Profile\ProfileController@store')->name('profile.store');
    Route::get('edit/{profile}','Profile\ProfileController@edit')->name('profile.edit');
    Route::patch('update/{profile}','Profile\ProfileController@update')->name('profile.update');
    Route::delete('delete/{profile}', 'Profile\ProfileController@destroy')->name('profile.delete');
    Route::get('/show/{profile}', 'Profile\ProfileController@show')->name('profile.show');
});