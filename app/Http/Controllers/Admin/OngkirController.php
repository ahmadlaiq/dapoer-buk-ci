<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OngkirController extends Controller
{
    public function DataOngkirPage(){
        return view('admin.ongkir.data-ongkir');
    }

    public function DataKecamatanPage(){
        return view('admin.ongkir.data-kecamatan');
    }

    public function TambahOngkirPage(){
        return view('admin.ongkir.tambah-ongkir');
    }

    public function TambahKecamatanPage(){
        return view('admin.ongkir.tambah-kecamatan');
    }
}
