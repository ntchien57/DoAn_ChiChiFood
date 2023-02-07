<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AcountAdminController extends Controller
{
    public function index(){
        return view('admin.login',[
            'title'=>'Đăng nhập'
        ]);
    }

    public function login(Request $request){
        $acount = User::where('username', $request->input('username'))->first();

        Session::put('acount', $acount);
        $check = Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'role' => 2
        ]);

        if ($check) {
            return redirect()->route('admin.home');

        } else {
            return redirect()->back();
        }
    }

    public function logout(){
        Session::flush('');
        Auth::logout();
        return redirect()->route('admin.login.form');
    }

}
