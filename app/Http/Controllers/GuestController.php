<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    function index(){
        return view('guest.index');
    }
    function produk(){
        return view('guest.produk');
    }
    function detailproduk()  {
        return view('guest.detailproduk');
    }
}
