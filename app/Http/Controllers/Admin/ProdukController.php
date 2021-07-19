<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function DataProdukPage(){
        $produk = DB::table('produks')->paginate(10);
        return view('admin.produk.data-produk', ['produk'=> $produk]);
    }

    public function DataVarianPage(){
        return view('admin.produk.data-varian');
    }

    public function TambahProdukPage(){
        return view('admin.produk.tambah-produk');
    }

    public function TambahVarianPage(){
        return view('admin.produk.tambah-varian');
    }


}
