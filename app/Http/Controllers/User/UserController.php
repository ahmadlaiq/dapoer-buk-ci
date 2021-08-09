<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function Home(){
        $produks = DB::table('produks')->orderBy('created_at', 'desc')->take(6)->get();
        return view('user.index',['produks'=> $produks]);
    }

    public function Kategori(){
        $term1 = 'Seblak';
        $term2 = 'Gado Gado';
        $term3 = 'Salad Buah';
        $term4 = 'Ikan Bakar';
        $term5 = 'Baby Cumi';
        $term6 = 'Kepiting Asam Manis';
        $filterData = DB::table('produks')->where('nama_produk','LIKE','%'.$term1.'%')->get();
        $filterData2 = DB::table('produks')->where('nama_produk','LIKE',$term2.'%')->get();
        $filterData3 = DB::table('produks')->where('nama_produk','LIKE','%'.$term3.'%')->get();
        $filterData4 = DB::table('produks')->where('nama_produk','LIKE','%'.$term4.'%')->get();
        $filterData5 = DB::table('produks')->where('nama_produk','LIKE','%'.$term5.'%')->get();
        $filterData6 = DB::table('produks')->where('nama_produk','LIKE','%'.$term6.'%')->get();
        return view('user.kategori', compact('filterData', 'filterData2', 'filterData3', 'filterData4', 'filterData5', 'filterData6'));
    }

    public function Promo(){
        $promoses = DB::table('promoses')->paginate(18);
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
