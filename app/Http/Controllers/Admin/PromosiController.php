<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Promosis;


class PromosiController extends Controller
{
    public function TambahPromosiPage(){
        return view('admin.promosi.tambah-promosi');
    }

    public function TambahPromosi(Request $request){

        $gambar     = $request->file('gambar');
        $gambarName = time()."_".$gambar->getClientOriginalName();
        $gambarPath   = "gambar";
        $gambar->move($gambarPath, $gambarName);

        $this->savePromosi($request->all(), $gambarName);
        return redirect()->back()->with('message', 'Data berhasil disimpan!');
        
    }

    protected function savePromosi(array $data, $gambar = null)
    {
        return Promosis::create([
            'produk'               => $data['produk'],
            'sebelum_promosi'      => $data['sebelum_promosi'],
            'sesudah_promosi'      => $data['sesudah_promosi'],
            'diskon'               => $data['diskon'],
            'gambar'               => $gambar,
        ]);
    }

    public function DeletePromosi($id){
        DB::table('promoses')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function DataPromosiPage(){
        $promoses = DB::table('promoses')->paginate(10);
        return view('admin.promosi.data-promosi', ['promoses'=> $promoses]);
    }
}
