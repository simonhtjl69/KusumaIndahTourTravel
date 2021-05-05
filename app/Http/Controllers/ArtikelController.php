<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Nullable;

class ArtikelController extends Controller
{
    public function index()
    {

        $artikel = Artikel::latest()->get();
        return view('admin.article', compact(['artikel']));
    }


    public function create(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|min:3',
            'deskripsi' => 'required',
            'tags' => 'required',
            'gbr1' => 'mimes:jpeg,png,jpg',
            'gbr2' => 'nullable|mimes:jpg,jpeg,png',
            'gbr3' => 'nullable|mimes:jpg,jpeg,png',
            'gbr4' => 'nullable|mimes:jpg,jpeg,png',
            'gbr5' => 'nullable|mimes:jpg,jpeg,png',


        ]);

        dd($request->all());
    }
}