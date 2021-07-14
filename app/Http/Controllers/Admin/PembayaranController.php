<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function DataPembayaranPage(){
        return view('admin.pembayaran.data-pembayaran');
    }

    public function DataJenisAkunPage(){
        return view('admin.pembayaran.data-jenis-akun');
    }

    public function TambahPembayaranPage(){
        return view('admin.pembayaran.tambah-pembayaran');
    }

    public function TambahJenisAkunPage(){
        return view('admin.pembayaran.tambah-jenis-akun');
    }
}
