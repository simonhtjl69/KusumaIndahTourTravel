<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Produk;
use Illuminate\Support\Facades\DB;

class UserIndexController extends Controller
{
    public function index()
    {


        // $artikel = Artikel::orderBy('created_at','ASC')->take(3)->get() ;
        // return view('layouts_user.main', ['artikel' => $artikel]);

    }
    public function tampilProduk()
    {
    }

    public function tampilArtikel()
    {
    }
}