<?php

namespace App\Http\Controllers;

use App\Models\admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class registrasiController extends Controller
{
    public function registrasi_submit(Request $request)
    {
        $validasiData = $request->validate([
            'nama' => 'required|min:3|max:80',
            'email' => 'required|unique:admins',
            'password' => 'required|min:8|max:20',
            'konfirmasi' => 'required|min:8|max:20'
        ]);

        if ($request->password == $request->konfirmasi) {
            $data_admin = array(
                'nama' => $request->nama,
                'email' => $request->email,
                'password' => $request->password
            );

            $data_admin['password'] = Hash::make($data_admin['password']);
            admin::create($data_admin);
            return redirect()->route('registrasi')->with(['success' => 'Berhasil Register']);
        } else {
            return redirect()->route('registrasi')->with(['error' => 'Password Dan Konfirmasi Tidak Sesuai']);
        }
        return view('registrasi');
    }
}
