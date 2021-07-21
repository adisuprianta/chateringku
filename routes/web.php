<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmployeeController;

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

Route::get('/', "App\HTTP\Controllers\PelangganController@index");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');



// pelanggan
Route::post('/add-to-cart', 'App\HTTP\Controllers\PelangganController@add')->name('add')->middleware(['auth']);
Route::get('/keranjang', 'App\HTTP\Controllers\PelangganController@keranjang')->name('keranjang')->middleware(['auth']);
Route::get('/keranjang/delete/{id}', 'App\HTTP\Controllers\PelangganController@delete')->name('delete')->middleware(['auth']);
Route::get('/keranjang/change/{id}/{nilai}', 'App\HTTP\Controllers\PelangganController@change')->name('change')->middleware(['auth']);
Route::get('/checkout', 'App\HTTP\Controllers\PelangganController@checkout')->name('checkout')->middleware(['auth']);
Route::post('/checkout', 'App\HTTP\Controllers\PelangganController@bayar')->name('bayar')->middleware(['auth']);
Route::get('/pembayaran', 'App\HTTP\Controllers\PelangganController@pembayaran')->name('pembayaran')->middleware(['auth']);
Route::post('/pembayaran/upload', 'App\HTTP\Controllers\PelangganController@upload')->name('upload')->middleware(['auth']);
Route::get('/profile', 'App\HTTP\Controllers\PelangganController@profile')->name('profile')->middleware(['auth']);
Route::get('/profile/rincian/{id}', 'App\HTTP\Controllers\PelangganController@rincian')->name('rincian')->middleware(['auth']);

// admin

Route::get('/adminhome', 'App\HTTP\Controllers\AdminController@index')->name('adminhome')->middleware(['role:admin','auth']);
Route::get('/admin_pegawai','App\HTTP\Controllers\AdminController@pegawai')->middleware(['role:admin','auth']);
Route::post('/admin_pegawai/edit','App\HTTP\Controllers\AdminController@editpegawai')->name('editpegawai')->middleware(['role:admin','auth']);
Route::post('/admin_pegawai/tambah','App\HTTP\Controllers\AdminController@tambahpegawai')->middleware(['role:admin','auth']);
Route::get('/admin_pegawai/hapus/{id}','App\HTTP\Controllers\AdminController@hapuspegawai')->middleware(['role:admin','auth']);
Route::get('/admin_produk', 'App\HTTP\Controllers\AdminController@produk')->middleware(['role:admin','auth']);
Route::post('/admin_produk/tambah', 'App\HTTP\Controllers\AdminController@tambahproduk')->middleware(['role:admin','auth']);
Route::post('/admin_produk/edit', 'App\HTTP\Controllers\AdminController@editproduk')->middleware(['role:admin','auth']);
Route::get('/admin_produk/hapus/{id}', 'App\HTTP\Controllers\AdminController@hapusproduk')->middleware(['role:admin','auth']);
Route::get('/admin_pesanan', 'App\HTTP\Controllers\AdminController@pesanan')->middleware(['role:admin','auth']);
Route::resource('employees', EmployeeController::class);
Route::get('/admin/rincian/{id}', 'App\HTTP\Controllers\AdminController@rincian')->middleware(['role:admin','auth']);

Route::get('/admin/bayar/{id}', 'App\HTTP\Controllers\AdminController@bayar')->middleware(['role:admin','auth']);
Route::get('/admin/batal/{id}', 'App\HTTP\Controllers\AdminController@batal')->middleware(['role:admin','auth']);
Route::get('/admin_diterima', 'App\HTTP\Controllers\AdminController@diterima')->middleware(['role:admin','auth']);
Route::get('/admin_batal', 'App\HTTP\Controllers\AdminController@dibatalkan')->middleware(['role:admin','auth']);


// pengadaaan

Route::get('/adminpengadaan', 'App\HTTP\Controllers\PengadaanController@view')->middleware(['role:pengadaan','auth']);
Route::get('/pengadaan_supplier', 'App\HTTP\Controllers\PengadaanController@suplier')->middleware(['role:pengadaan','auth']);
Route::post('/pengadaan_supplier/tambah', 'App\HTTP\Controllers\PengadaanController@tambahsuplier')->middleware(['role:pengadaan','auth']);
Route::post('/pengadaan_supplier/edit', 'App\HTTP\Controllers\PengadaanController@editsuplier')->middleware(['role:pengadaan','auth']);
Route::get('/pengadaan_supplier/hapus/{id}', 'App\HTTP\Controllers\PengadaanController@hapussuplier')->middleware(['role:pengadaan','auth']);


Route::get('/produk-detail', function () {
    return view('produk-detail');
});
Route::get('/pesanan', function () {
    return view('profile');
});


Route::get('/admin-diproses', function () {
    return view('admin-diproses');
});
