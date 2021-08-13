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
        $filterData = DB::table('produks')->where('nama_produk','LIKE','%'.$term1.'%')->paginate(3);
        $filterData2 = DB::table('produks')->where('nama_produk','LIKE',$term2.'%')->paginate(3);
        $filterData3 = DB::table('produks')->where('nama_produk','LIKE','%'.$term3.'%')->paginate(3);
        $filterData4 = DB::table('produks')->where('nama_produk','LIKE','%'.$term4.'%')->paginate(3);
        $filterData5 = DB::table('produks')->where('nama_produk','LIKE','%'.$term5.'%')->paginate(3);
        $filterData6 = DB::table('produks')->where('nama_produk','LIKE','%'.$term6.'%')->paginate(3);
        return view('user.kategori', compact('filterData', 'filterData2', 'filterData3', 'filterData4', 'filterData5', 'filterData6'));
    }

    public function Promo(){
        $promoses = DB::table('promoses')->paginate(12);
        return view('user.promo', ['promoses'=> $promoses]);
    }

    public function CekOngkir(){
        $ongkirs = DB::table('ongkirs')->paginate(15);
        return view('user.ongkir', ['ongkirs'=> $ongkirs]);
    }

    public function COntactUs(){
        return view('user.contact');
    }

    
    
}
