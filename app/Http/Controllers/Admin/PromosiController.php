<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PromosiController extends Controller
{
    public function TambahPromosiPage(){
        return view('admin.promosi.tambah-promosi');
    }

    public function DataPromosiPage(){
        return view('admin.promosi.data-promosi');
    }
}
