<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function Home(){
        return view('user.index');
    }

    public function Kategori(){
        return view('user.kategori');
    }

    public function Promo(){
        return view('user.promo');
    }

    public function CekOngkir(){
        return view('user.ongkir');
    }

    public function COntactUs(){
        return view('user.contact');
    }
}
