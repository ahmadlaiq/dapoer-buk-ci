<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function ProfilPage(){
        return view('admin.profil');
    }

    public function SettingPage(){
        return view('admin.setting');
    }
}
