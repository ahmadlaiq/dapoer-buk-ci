<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Varians;
use App\Produks;

class ProdukController extends Controller
{
    public function DataProdukPage(){
        $produks = DB::table('produks')->paginate(10);
        return view('admin.produk.data-produk', ['produks'=> $produks]);
    }

    public function DataVarianPage(){
        $varians = DB::table('varians')->paginate(10);
        return view('admin.produk.data-varian', ['varians'=> $varians]);
    }

    public function TambahProdukPage(){
        $varians = DB::table('varians')->paginate(10);
        return view('admin.produk.tambah-produk', ['varians'=> $varians]);
    }

    public function TambahProduk(Request $request){
        $gambar     = $request->file('gambar');
        $gambarName = time()."_".$gambar->getClientOriginalName();
        $gambarPath   = "gambar";
        $gambar->move($gambarPath, $gambarName);

        $this->saveProduk($request->all(), $gambarName);
        return redirect()->back()->with('message', 'Data berhasil disimpan!');
        
    }

    protected function saveProduk(array $data, $gambar = null)
    {
        return Produks::create([
            'nama_produk'       => $data['nama_produk'],
            'harga'             => $data['harga'],
            'varian'            => $data['varian'],
            'deskripsi'         => $data['deskripsi'],
            'gambar'            => $gambar,
        ]);
    }

    public function DeleteProduk($id){
        DB::table('produks')->where('id', $id)->delete();
        return redirect()->back();
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
