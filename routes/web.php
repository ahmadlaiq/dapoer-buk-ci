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

// Route::get('/', function () {
//     return view('user.index');
// });

Route::get('/', 'User\UserController@Home')->name('/');

//Auth Admin
Route::get('admin/login', 'Auth\AdminController@LoginPage')->name('admin.login');
Route::post('admin/login', 'Auth\AdminController@Login')->name('admin.login');
Route::get('admin/logout', 'Auth\AdminController@Logout')->name('admin.logout');

//Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/setting', 'Admin\ProfilController@SettingPage')->name('admin.setting');
    Route::put('admin/updatesetting{User}', 'Admin\ProfilController@Setting')->name('admin.updatesetting');
    Route::get('admin/dashboard', 'Admin\DashboardController@DashboardPage')->name('admin.dashboard');
    //Produk
    Route::get('admin/data-produk', 'Admin\ProdukController@DataProdukPage')->name('admin.dataproduk');
    Route::get('admin/data-varian', 'Admin\ProdukController@DataVarianPage')->name('admin.datavarian');
    Route::get('admin/tambah-produk', 'Admin\ProdukController@TambahProdukPage')->name('admin.tambahproduk');
    Route::post('admin/tambah-produk', 'Admin\ProdukController@TambahProduk')->name('admin.tambahproduk');
    Route::delete('admin/deleteproduk{id}', 'Admin\ProdukController@DeleteProduk')->name('admin.deleteproduk');
    Route::put('admin/updateproduk{Produks}', 'Admin\ProdukController@UpdateProduk')->name('admin.updateproduk');
    Route::get('admin/tambah-varian', 'Admin\ProdukController@TambahVarianPage')->name('admin.tambahvarian');
    Route::post('admin/tambah-varian', 'Admin\ProdukController@TambahVarian')->name('admin.tambahvarian');
    Route::delete('admin/deletevarian{id}', 'Admin\ProdukController@DeleteVarian')->name('admin.deletevarian');
    Route::put('admin/updatevarian/{Varians}', 'Admin\ProdukController@UpdateVarian')->name('admin.updatevarian');
    //Promosi
    Route::get('admin/tambah-promosi', 'Admin\PromosiController@TambahPromosiPage')->name('admin.tambahpromosi');
    Route::post('admin/tambah-promosi', 'Admin\PromosiController@TambahPromosi')->name('admin.tambahpromosi');
    Route::delete('admin/deletepromosi{id}', 'Admin\PromosiController@DeletePromosi')->name('admin.deletepromosi');
    Route::get('admin/data-promosi', 'Admin\PromosiController@DataPromosiPage')->name('admin.datapromosi');
    //Pembayaran
    Route::get('admin/data-pembayaran', 'Admin\PembayaranController@DataPembayaranPage')->name('admin.datapembayaran');
    Route::get('admin/tambah-pembayaran', 'Admin\PembayaranController@TambahPembayaranPage')->name('admin.tambahpembayaran');
    Route::post('admin/tambah-pembayaran', 'Admin\PembayaranController@TambahPembayaran')->name('admin.tambahpembayaran');
    Route::delete('admin/deletepembayaran{id}', 'Admin\PembayaranController@DeletePembayaran')->name('admin.deletepembayaran');
    //Ongkir
    Route::get('admin/data-ongkir', 'Admin\OngkirController@DataOngkirPage')->name('admin.dataongkir');
    Route::get('admin/tambah-ongkir', 'Admin\OngkirController@TambahOngkirPage')->name('admin.tambahongkir');
    Route::post('admin/tambah-ongkir', 'Admin\OngkirController@TambahOngkir')->name('admin.tambahongkir');
    Route::delete('admin/deleteongkir{id}', 'Admin\OngkirController@DeleteOngkir')->name('admin.deleteongkir');
    Route::put('admin/updateongkir{Ongkirs}', 'Admin\OngkirController@UpdateOngkir')->name('admin.updateongkir');
    Route::get('admin/data-kecamatan', 'Admin\OngkirController@DataKecamatanPage')->name('admin.datakecamatan');
    Route::get('admin/tambah-kecamatan', 'Admin\OngkirController@TambahKecamatanPage')->name('admin.tambahkecamatan');
    Route::post('admin/tambah-kecamatan', 'Admin\OngkirController@TambahKecamatan')->name('admin.tambahkecamatan');
    Route::delete('admin/deletekecamatan/{id}', 'Admin\OngkirController@DeleteKecamatan')->name('admin.deletekecamatan');
    Route::put('admin/updatekecamatan/{Kecamatans}', 'Admin\OngkirController@UpdateKecamatan')->name('admin.updatekecamatan');
});


//User
Route::post('user/pesan', 'User\UserController@Pesan')->name('user.pesan');
Route::get('user/kategori', 'User\UserController@Kategori')->name('user.kategori');
Route::get('user/promo', 'User\UserController@Promo')->name('user.promo');
Route::get('user/cek-ongkir', 'User\UserController@CekOngkir')->name('user.cekongkir');
Route::get('user/contact-us', 'User\UserController@ContactUs')->name('user.contactus');

