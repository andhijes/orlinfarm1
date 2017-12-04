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
    return view('home');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/produk/create', 'ProdukController@create')->name('produk.create');
Route::get('/produk/history', 'ProdukController@history')->name('produk.history');
Route::post('/produk/create', 'ProdukController@store')->name('produk.store');

Route::get('/produk/edit/{id_produk}', 'ProdukController@edit')->name('produk.edit');
Route::patch('/produk/edit/{id_produk}', 'ProdukController@update')->name('produk.update');

Route::get('/produk/historyEdit/{id_penjualan}', 'ProdukController@editHistory')->name('produk.historyEdit');
Route::patch('/produk/historyEdit/{id_penjualan}', 'ProdukController@updateHistory')->name('produk.historyUpdate');


Route::get('/produk/list', 'ProdukController@list')->name('produk.list');

Route::get('/produk/sell', 'ProdukController@sell')->name('produk.sell');
Route::post('/produk/sell', 'ProdukController@sell_store')->name('produk.sell_store');

// Akun
Route::get('akun/aset', 'AkunController@aset')->name('akun.aset');
Route::post('akun/aset', 'AkunController@asetStore')->name('akun.asetStore');

Route::get('akun/modal', 'AkunController@modal')->name('akun.modal');
Route::post('akun/modal', 'AkunController@modalStore')->name('akun.modalStore');

Route::get('akun/pemasukan', 'AkunController@pemasukan')->name('akun.pemasukan');
Route::post('akun/pemasukan', 'AkunController@pemasukanStore')->name('akun.pemasukanStore');

Route::get('akun/pengeluaran', 'AkunController@pengeluaran')->name('akun.pengeluaran');
Route::post('akun/pengeluaran', 'AkunController@pengeluaranStore')->name('akun.pengeluaranStore');

Route::get('akun/hutang', 'AkunController@hutang')->name('akun.hutang');
Route::post('akun/hutang', 'AkunController@hutangStore')->name('akun.hutangStore');

Route::get('akun/piutang', 'AkunController@piutang')->name('akun.piutang');
Route::post('akun/piutang', 'AkunController@piutangStore')->name('akun.piutangStore');

Route::get('kontak/datakontak', 'KontakController@kontak')->name('kontak.datakontak');
Route::post('kontak/datakontak', 'KontakController@kontakStore')->name('kontak.datakontakStore');
