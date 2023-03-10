<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login_submit(Request $request)
    {
        $kondisi = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        $admin = admin::where('email', '=', $request->email)->first();
        $pass = Hash::check($request->password, $admin->password);

        if ($admin && $pass) {
            if (Auth::attempt($kondisi)) {
                $request->session()->regenerate();
                return redirect()->intended('registrasi');
            } else {
                return back()->with(['error' => 'Login Gagal']);
            }
        } else {
            return back()->with(['error' => 'Login Gagal']);
        }
    }


    // public function login_submit(Request $request)
    // {
    //     $kondisi = $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $admin = admin::where('email', '=', $request->email)->first();
    //     $pass = Hash::check($request->password, $admin->password);

    //     if ($admin && $pass) {
    //         if (Auth::attempt($request->only('email', 'password'))) {
    //             $request->session()->regenerate();
    //             return redirect()->intended('registrasi');
    //         } else {
    //             return back()->with(['error' => 'Login Gagal']);
    //         }
    //     } else {
    //         return back()->with(['error' => 'Login Gagal']);
    //     }
    // }
}
