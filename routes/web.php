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
    return view('bbm.input');
});

Route::resource('databbm','BbmsController');

Route::resource('transaksibbm','TransaksibbmsController');

Route::resource('keterangan','KeteranganbbmsController');

Route::resource('input','InstansibbmsController');

Route::get('hapusdatabbm/{id}', 'BbmsController@hapusdatabbm');


// Route::get('/inputbbmedit', function () {
//     return view('bbm.inputedit');
// });

// Route::get('/rekapbbmedit', function () {
//     return view('bbm.rekapedit');
// });
// Route::get('/databbm', function () {
//     return view('bbm.data');
// });

// Route::get('/transaksibbm', function () {
//     return view('bbm.transaksi');
// });

// Route::get('/inputbbm', function () {
//     return view('bbm.input');
// });

// Route::get('/rekapbbm', function () {
//     return view('bbm.rekap');
// });
