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
        $produk = Produk::orderBy('nama_produk','ASC')->take(6)->get() ;
        $artikel = Artikel::orderBy('created_at','ASC')->take(3)->get() ;
        return view('layouts_user.main', ['produk' => $produk],['artikel' => $artikel]);
    }
    
    public function produk(){
        // $produk = Produk::orderBy('nama_produk','ASC')->take(6)->get() ;
        // return view('layouts_user.main', ['produk' => $produk]);

        // $artikel = Artikel::orderBy('created_at','ASC')->take(3)->get() ;
        // return view('layouts_user.main', );

    }
    public function tampilProduk(){
        
    }

    public function tampilArtikel(){
       
    }
}
