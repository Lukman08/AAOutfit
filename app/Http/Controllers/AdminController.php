<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function dashboard()
    {
        return view('admin.dashboard');
    }

    function produk()
    {
        return view('admin.produk.index');
    }
}
