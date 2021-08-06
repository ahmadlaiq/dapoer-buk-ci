<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function Home(){
        return view('user.index');
    }

    public function Kategori(){
        return view('user.kategori');
    }

    public function Promo(){
        $promoses = DB::table('promoses')->paginate(15);
        return view('user.promo', ['promoses'=> $promoses]);
    }

    public function CekOngkir(){
        $ongkirs = DB::table('ongkirs')->paginate(15);
        return view('user.ongkir', ['ongkirs'=> $ongkirs]);
    }

    public function COntactUs(){
        return view('user.contact');
    }

    public function DetailProduk(){
        return view('user.detail-produk');
    }

    public function DetailPromo(){
        return view('user.detail-promo');
    }
}
