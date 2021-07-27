<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Pembayarans;

class PembayaranController extends Controller
{
    public function DataPembayaranPage(){
        $pembayarans = DB::table('pembayarans')->paginate(10);
        return view('admin.pembayaran.data-pembayaran', ['pembayarans'=> $pembayarans]);
    }

    public function TambahPembayaranPage(){
        return view('admin.pembayaran.tambah-pembayaran');
    }

    public function TambahPembayaran(Request $request){
        $gambar     = $request->file('gambar');
        $gambarName = time()."_".$gambar->getClientOriginalName();
        $gambarPath   = "gambar";
        $gambar->move($gambarPath, $gambarName);

        $this->savePembayaran($request->all(), $gambarName);
        return redirect()->back()->with('message', 'Data berhasil disimpan!');
        
    }

    protected function savePembayaran(array $data, $gambar = null)
    {
        return Pembayarans::create([
            'nama_akun'      => $data['nama_akun'],
            'nomor_akun'      => $data['nomor_akun'],
            'gambar'            => $gambar,
        ]);
    }

    public function DeletePembayaran($id){
        DB::table('pembayarans')->where('id', $id)->delete();
        return redirect()->back();
    }
}
