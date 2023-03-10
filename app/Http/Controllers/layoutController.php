<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function landing()
    {
        return view('/');
    }

    public function registrasi()
    {
        return view('registrasi');
    }
}
