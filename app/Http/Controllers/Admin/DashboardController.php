<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function DashboardPage(){
        $produks = DB::table('produks')->count();
        $promosis = DB::table('promoses')->count();
        $pembayarans = DB::table('pembayarans')->count();
        $ongkirs = DB::table('ongkirs')->count();
        return view('admin.dashboard', ['produks' => $produks, 'promoses' => $promosis, 'pembayarans' => $pembayarans, 'ongkirs' => $ongkirs]);
    }

}
