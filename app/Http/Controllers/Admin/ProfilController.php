<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Hash;
use App\User;

class ProfilController extends Controller
{
    public function ProfilPage(){
        $users = DB::table('users')->get();
        return view('admin.profil', ['users'=> $users]);
    }

    public function SettingPage(){
        $users = DB::table('users')->get();
        return view('admin.setting', ['users'=> $users]);
    }

    public function Setting(Request $request, $id)
    {
    $users = User::find($id);
    $users->name = $request->name;
    $users->email = $request->email;
    $users->password = Hash::make($request->password);
    // return dd($varians);
    $users->save();
    return redirect()->back()->with('message', 'Data berhasil update!');
    }
}
