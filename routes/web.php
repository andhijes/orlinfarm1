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

// Route::get('/', function () {
//     return view('home');
// })->middleware('auth');

//---------------------------------------HOME AND CHARTS-------------------------------------//
Route::get('/', 'HomeController@getCharts')->name('home')->middleware('auth');
Route::get('/{tahun}', 'HomeController@getChartsWithParam')->name('home.param')->middleware('auth');
//Route::get('/tes', 'HomeController@getChartWithForEach')->name('home.test')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//===========================================================================================//
Route::get('/produk/create', 'ProdukController@create')->name('produk.create');
Route::get('/produk/history', 'ProdukController@history')->name('produk.history');
Route::post('/produk/create', 'ProdukController@store')->name('produk.store');

Route::get('/produk/edit/{id_produk}', 'ProdukController@edit')->name('produk.edit');
Route::patch('/produk/edit/{id_produk}', 'ProdukController@update')->name('produk.update');


Route::get('/produk/list/{id_produk}', 'ProdukController@delete')->name('produk.delete');



Route::get('/produk/historyEdit/{id_penjualan}', 'ProdukController@editHistory')->name('produk.historyEdit');
Route::patch('/produk/historyEdit/{id_penjualan}', 'ProdukController@updateHistory')->name('produk.historyUpdate');
Route::delete('/produk/history/{id_penjualan}', 'ProdukController@deletePenjualan')->name('penjualan.delete');


Route::get('/produk/list', 'ProdukController@list')->name('produk.list');

Route::get('/produk/sell', 'ProdukController@sell')->name('produk.sell');
Route::post('/produk/sell', 'ProdukController@sell_store')->name('produk.sell_store');

//----------------------------------AKUN ASET------------------------------------------------------------------
Route::get('akun/aset', 'AkunController@aset')->name('akun.aset');
Route::post('akun/aset', 'AkunController@asetStore')->name('akun.asetStore');
Route::get('/akun/aset/{id_cabang}', 'AkunController@cabangDelete')->name('aset.delete');
//==========================================CABANG EDIT============================================
Route::get('/akun/cabangEdit/{id_cabang}', 'AkunController@cabangEdit')->name('cabang.edit');
Route::patch('/akun/cabangEdit/{id_cabang}', 'AkunController@cabangUpdate')->name('cabang.update');


//================================AKUN MODAL==========================================
Route::get('akun/modal', 'AkunController@modal')->name('akun.modal');
Route::post('akun/modal', 'AkunController@modalStore')->name('akun.modalStore');
Route::get('/akun/modal/{id_cabang}', 'AkunController@cabangDelete')->name('modal.delete');


//===================================AKUN PEMASUKAN======================================
Route::get('akun/pemasukan', 'AkunController@pemasukan')->name('akun.pemasukan');
Route::post('akun/pemasukan', 'AkunController@pemasukanStore')->name('akun.pemasukanStore');
Route::get('/akun/pemasukan/{id_cabang}', 'AkunController@cabangDelete')->name('pemasukan.delete');

Route::get('akun/pengeluaran', 'AkunController@pengeluaran')->name('akun.pengeluaran');
Route::post('akun/pengeluaran', 'AkunController@pengeluaranStore')->name('akun.pengeluaranStore');
Route::get('/akun/pengeluaran/{id_cabang}', 'AkunController@cabangDelete')->name('pengeluaran.delete');


Route::get('akun/hutang', 'AkunController@hutang')->name('akun.hutang');
Route::post('akun/hutang', 'AkunController@hutangStore')->name('akun.hutangStore');
Route::get('/akun/hutang/{id_cabang}', 'AkunController@cabangDelete')->name('hutang.delete');


Route::get('akun/piutang', 'AkunController@piutang')->name('akun.piutang');
Route::post('akun/piutang', 'AkunController@piutangStore')->name('akun.piutangStore');
Route::get('/akun/piutang/{id_cabang}', 'AkunController@cabangDelete')->name('piutang.delete');



Route::get('kontak/datakontak', 'KontakController@kontak')->name('kontak.datakontak');
Route::post('kontak/datakontak', 'KontakController@kontakStore')->name('kontak.datakontakStore');

Route::get('transaksi/pemasukanTunai', 'TransaksiController@pemasukanTunai')->name('pemasukanTunai');
Route::post('transaksi/pemasukanTunai', 'TransaksiController@pemasukanTunaiStore')->name('pemasukanTunai.store');

Route::get('transaksi/pemasukanPiutang', 'TransaksiController@pemasukanPiutang')->name('pemasukanPiutang');
Route::post('transaksi/pemasukanPiutang', 'TransaksiController@pemasukanPiutangStore')->name('pemasukanPiutang.store');

Route::get('transaksi/pengeluaranTunai', 'TransaksiController@pengeluaranTunai')->name('pengeluaranTunai');
Route::post('transaksi/pengeluaranTunai', 'TransaksiController@pengeluaranTunaiStore')->name('pengeluaranTunai.store');

Route::get('transaksi/pengeluaranHutang', 'TransaksiController@pengeluaranHutang')->name('pengeluaranHutang');
Route::post('transaksi/pengeluaranHutang', 'TransaksiController@pengeluaranHutangStore')->name('pengeluaranHutang.store');

Route::get('transaksi/tambahHutang', 'TransaksiController@tambahHutang')->name('tambahHutang');
Route::post('transaksi/tambahHutang', 'TransaksiController@tambahHutangStore')->name('tambahHutang.store');

Route::get('transaksi/bayarHutang', 'TransaksiController@bayarHutang')->name('bayarHutang');
Route::post('transaksi/bayarHutang', 'TransaksiController@bayarHutangContact')->name('bayarHutang.contact');

Route::get('transaksi/bayarHutangUpdate/{id_transaksi}', 'TransaksiController@bayarHutangUpdate')->name('bayarHutang.update');
Route::patch('transaksi/bayarHutangUpdate/{id_transaksi}', 'TransaksiController@bayarHutangStore')->name('bayarHutang.store');

Route::get('laporan/jurnalUmum', 'LaporanController@jurnalUmum')->name('jurnalUmum');
Route::post('laporan/jurnalUmum', 'LaporanController@jurnalUmumStore')->name('jurnalUmum.store');

Route::get('laporan/bukuBesar', 'LaporanController@bukuBesar')->name('bukuBesar');
Route::post('laporan/bukuBesar', 'LaporanController@bukuBesarStore')->name('bukuBesar.store');

