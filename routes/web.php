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

//Auth Admin
Route::get('admin/login', 'Auth\AdminController@LoginPage')->name('admin.login');
Route::post('admin/login', 'Auth\AdminController@Login')->name('admin.login');
Route::get('admin/logout', 'Auth\AdminController@Logout')->name('admin.logout');

//Admin
//Route::group(['middleware' => 'auth'], function () {
    Route::get('admin/profil', 'Admin\ProfilController@ProfilPage')->name('admin.profil');
    Route::get('admin/setting', 'Admin\ProfilController@SettingPage')->name('admin.setting');
    Route::get('admin/dashboard', 'Admin\DashboardController@DashboardPage')->name('admin.dashboard');
    //Produk
    Route::get('admin/data-produk', 'Admin\ProdukController@DataProdukPage')->name('admin.dataproduk');
    Route::get('admin/data-varian', 'Admin\ProdukController@DataVarianPage')->name('admin.datavarian');
    Route::get('admin/tambah-produk', 'Admin\ProdukController@TambahProdukPage')->name('admin.tambahproduk');
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
    Route::get('admin/data-jenis-akun', 'Admin\PembayaranController@DataJenisAkunPage')->name('admin.datajenisakun');
    Route::get('admin/tambah-jenis-akun', 'Admin\PembayaranController@TambahJenisAkunPage')->name('admin.tambahjenisakun');
    //Ongkir
    Route::get('admin/data-ongkir', 'Admin\OngkirController@DataOngkirPage')->name('admin.dataongkir');
    Route::get('admin/tambah-ongkir', 'Admin\OngkirController@TambahOngkirPage')->name('admin.tambahongkir');
    Route::get('admin/data-kecamatan', 'Admin\OngkirController@DataKecamatanPage')->name('admin.datakecamatan');
    Route::get('admin/tambah-kecamatan', 'Admin\OngkirController@TambahKecamatanPage')->name('admin.tambahkecamatan');
//});


//User
Route::get('/', function () {
    return view('user.index',[
        "title" => ''
    ]);
});
Route::get('/kategori', function () {
    return view('user.kategori',[
        "title" => "Kategori |"
    ]);
});
Route::get('/promo', function () {
    return view('user.promo',[
        'title' => "Promo |"
    ]);
});
Route::get('/ongkir', function () {
    return view('user.ongkir',[
        'title' => "Ongkir |"
    ]);
});
Route::get('/contact', function () {
    return view('user.contact',[
        'title'=> "Contact |"
    ]);
});
