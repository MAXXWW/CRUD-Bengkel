<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function pelanggan()
    {
        return view('pelanggan');
    }
}
