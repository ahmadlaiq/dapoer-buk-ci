<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Kecamatans;

class OngkirController extends Controller
{
    public function DataOngkirPage(){
        $ongkirs = DB::table('ongkirs')->paginate(10);
        return view('admin.ongkir.data-ongkir', ['ongkirs'=> $ongkirs]);
    }

    public function TambahOngkir(Request $request){
        DB::insert('insert into ongkirs (nama_desa, biaya, kecamatan) values (?, ?, ?)', [$request->nama_desa, $request->biaya, $request->kecamatan]);
        return redirect()->back()->with('message', 'Data berhasil disimpan!');
    }

    public function DeleteOngkir($id){
        DB::table('ongkirs')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function DataKecamatanPage(){
        $kecamatans = DB::table('kecamatans')->paginate(10);
        return view('admin.ongkir.data-kecamatan', ['kecamatans'=> $kecamatans]);
    }

    public function TambahOngkirPage(){
        $kecamatans = DB::table('kecamatans')->paginate(10);
        return view('admin.ongkir.tambah-ongkir', ['kecamatans'=> $kecamatans]);
    }

    public function TambahKecamatanPage(){
        return view('admin.ongkir.tambah-kecamatan');
    }

    public function TambahKecamatan(Request $request){
        DB::insert('insert into kecamatans (nama_kecamatan) values (?)', [$request->nama_kecamatan]);
        return redirect()->back()->with('message', 'Data berhasil disimpan!');
    }

    public function DeleteKecamatan($id){
        DB::table('kecamatans')->where('id', $id)->delete();
        return redirect()->back();
    }

    public function UpdateKecamatan(Request $request, $id)
    {
    $kecamatans = Kecamatans::find($id);
    $kecamatans->nama_kecamatan = $request->nama_kecamatan;
    // return dd($varians);
    $kecamatans->save();
    return redirect()->back()->with('message', 'Data berhasil update!');
    }
}
