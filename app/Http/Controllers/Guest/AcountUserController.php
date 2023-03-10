<?php

namespace App\Http\Controllers\Guest;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AcountUserController extends Controller
{
    public function register(Request $request)
    {
        $username = User::where('username', $request->username)->first();
        if ($username) {
            return response()->json([
                'register' => 'error-username'
            ]);
        } else {
            $email = User::where('email', $request->email)->first();
            if ($email) {
                return response()->json([
                    'register' => 'error-email'
                ]);
            } else {
                User::create([
                    'username' => $request->input('username'),
                    'email' => $request->input('email'),
                    'password' => bcrypt($request->input('password')),
                    'role' => 1
                ]);
                return response()->json([
                    'register' => 'success'
                ]);
            }
        }
    }

    public function login(Request $request)
    {
        $check = Auth::attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'role' => $request->input('role')
        ]);

        if ($check) {
            Session::put('check', $check);
            return response()->json([
                'login' => 'success'
            ]);
        } else {
            return response()->json([
                'login' => 'error'
            ]);
        }
    }

    public function logout()
    {
        Session::flush('check');
        Auth::logout();
        return redirect()->route('home');
    }

    public function changePassword(Request $request)
    {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('currentPassword')
        ])) {
            Auth::user()->update([
                'password' => bcrypt($request->input('newPassword'))
            ]);
            return response()->json([
                'changePassword' => 'success'
            ]);
        } else {
            return response()->json([
                'changePassword' => 'error'
            ]);
        }
    }
    public function showForgotForm()
    {
        return view('guest.password.forgot-form', [
            'title' => 'Qu??n m???t kh???u'
        ]);
    }

    public function sendResetLink(Request $request)
    {
        $acount = User::where('email', $request->email)->first();

        if ($request->email == '') {
            return back()->with('fail', 'Email kh??ng ???????c ????? tr???ng!');
        }

        if (!isset($acount)) {
            return back()->with('fail', 'Email kh??ng t???n t???i!');
        } else {
            $token = Str::random(64);
            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now(),
            ]);

            $action_link = route('reset.password.form', ['token' => $token, 'email' => $request->email]);
            $body = "Ch??ng t??i nh???n ???????c m???t y??u c???u thay ?????i m???t kh???u v???i ?????a ch??? email " . $request->email . ".<br>
            Nh???n v??o link d?????i ????y ????? thay ?????i m???t kh???u c???a b???n.";

            Mail::send('guest.password.email-forgot', ['title'=>'email','action_link' => $action_link, 'body' => $body], function ($message) use ($request) {
                $message->from('developer.laravel57@gmail.com', 'ChiChiFood');
                $message->to($request->email, 'ChiChiFood')->subject('L???y l???i m???t kh???u');
            });

            return back()->with('success', 'Ch??ng t??i ???? g???i email l???y l???i m???t kh???u ?????n h???p th?? c???a b???n!');
        }
    }

    public function showResetForm(Request $request, $token = null)
    {
        return view(
            'guest.password.reset-form',
            [
                'title'=> 'Nh???p m???t kh???u m???i'
            ])->with(['token' => $token, 'email' => $request->email]);
    }

    public function resetPassword(Request $request)
    {
        if ($request->input('password') != $request->input('password-confirm')) {
            return back()->with('fail', 'Vui l??ng x??c nh???n m???t kh???u tr??ng kh???p!');
        }
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required',
            'password-confirm' => 'required'
        ]);

        $check_token = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if (!$check_token) {
            return back()->with('fail', 'Token kh??ng t???n t???i!');
        } else {
            User::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);

            DB::table('password_resets')->where([
                'email' => $request->email
            ])->delete();

            return back()->with('success', 'B???n c?? th??? ????ng nh???p v???i m???t kh???u m???i!');
        }
    }
}
