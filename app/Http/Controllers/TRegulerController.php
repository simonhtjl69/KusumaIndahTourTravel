<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\TravelReguler;

class TRegulerController extends Controller
{
    public function index()
    {
        $travel_reguler = DB::table('travel_reguler')->get();
        return view('admin.travel_reguler',['travel_reguler' => $travel_reguler]);
    }

    public function hapus($id){
        DB::table('travel_reguler')->where('id',$id)->delete();
		
        return redirect()->back()->with('sukses', 'Berhasil menghapus travel');
    }

    public function tambah(Request $request)
    {
        $this->validate($request, [
            'nama_travel' => 'required',
            'asal_berangkat' => 'required',
            'tujuan'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
            'harga'=>'required',
            'seat'=>'required',
        ]);
        
        $travel_reguler = new TravelReguler;

        $travel_reguler->nama_travel = $request->nama_travel;
        $travel_reguler->asal_berangkat = $request->asal_berangkat;
        $travel_reguler->tujuan = $request->tujuan;
        $travel_reguler->tanggal = $request->tanggal;
        $travel_reguler->jam = $request->jam;
        $travel_reguler->harga = $request->harga;
        $travel_reguler->seat = $request->seat;

        $travel_reguler->save();

        return redirect()->back()->with('sukses', 'Berhasil menambah Travel');
    }

    public function edit(Request $request,$id){
        $this->validate($request, [
            'nama_travel' => 'required',
            'asal_berangkat' => 'required',
            'tujuan'=>'required',
            'tanggal'=>'required',
            'jam'=>'required',
            'harga'=>'required',
            'seat'=>'required',
        ]);
        $travel_reguler = TravelReguler::find($id);
        $travel_reguler->nama_travel = $request->nama_travel;
        $travel_reguler->asal_berangkat = $request->asal_berangkat;
        $travel_reguler->tujuan = $request->tujuan;
        $travel_reguler->tanggal = $request->tanggal;
        $travel_reguler->jam = $request->jam;
        $travel_reguler->harga = $request->harga;
        $travel_reguler->seat = $request->seat;
        $travel_reguler->save();
        return redirect()->back()->with('sukses', 'Berhasil mengedit Travel');
    }

}
