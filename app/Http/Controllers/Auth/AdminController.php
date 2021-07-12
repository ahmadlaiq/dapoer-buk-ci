<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function LoginPage(){
        return view('auth.login-admin');
    }

    public function Login(Request $request){
        
        //dd($request->all());
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('admin/dashboard');
        }
        return redirect()->back()->with('message','Email atau Password salah');
    }

    public function Logout(Request $request){
        //$request->session()->flush();
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
