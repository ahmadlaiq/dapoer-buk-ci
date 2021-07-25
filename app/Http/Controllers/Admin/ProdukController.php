<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Varians;

class ProdukController extends Controller
{
    public function DataProdukPage(){
        $produk = DB::table('produks')->paginate(10);
        return view('admin.produk.data-produk', ['produk'=> $produk]);
    }

    public function DataVarianPage(){
        $varians = DB::table('varians')->paginate(10);
        return view('admin.produk.data-varian', ['varians'=> $varians]);
    }

    public function TambahProdukPage(){
        return view('admin.produk.tambah-produk');
    }

    public function TambahVarianPage(){
        return view('admin.produk.tambah-varian');
    }

    public function TambahVarian(Request $request){
        DB::insert('insert into varians (nama_varian) values (?)', [$request->nama_varian]);
        return redirect()->route('admin.tambahvarian')->with('message', 'Data berhasil disimpan!');
    }

    public function DeleteVarian($id){
        DB::table('varians')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function UpdateVarian(Request $request, $id)
    {
    $varians = Varians::find($id);
    $varians->nama_varian = $request->nama_varian;
    // return dd($varians);
    $varians->save();
    return redirect()->back()->with('message', 'Data berhasil update!');
    }
}
