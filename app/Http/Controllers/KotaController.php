<?php

namespace App\Http\Controllers;

use App\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::latest()->get();

        return view('admin.kota', compact(['kota']));
    }


    public function createkota(Request $request)
    {
        $this->validate($request, [
            'kota' => 'required'
        ]);

        $kota = new Kota;
        $kota->nama_kota = $request->kota;
        $kota->save();
        return redirect()->back()->with('sukses', 'Berhasil menambah kota');
    }

    public function delete($id)
    {
        Kota::find($id)->delete($id);

        return redirect()->back();
    }


    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'kota' => 'required'
        ]);
        $kota = Kota::find($id);
        $kota->nama_kota = $request->kota;
        $kota->save();
        return redirect()->back()->with('sukses', 'Berhasil mengupdate kota');
    }
}