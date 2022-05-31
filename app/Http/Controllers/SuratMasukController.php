<?php

namespace App\Http\Controllers;

use App\Models\SuratMasuk;
use Illuminate\Http\Request;

class SuratMasukController extends Controller
{
    public function index(){
        $data = SuratMasuk::all();
        return view('suratMasuk',['data' => $data]);
    }

    public function tambah(Request $request){
        $surat = md5($request->nomor_surat.$request->perihal.$request->asal_surat.$request->status) . '.pdf' ;
        $request->file('surat')->move('surat',$surat);
        SuratMasuk::create([
            'no_surat' => $request->no_surat,
            'perihal' => $request->perihal,
            'asal_surat' => $request->asal_surat,
            'file_surat' => $surat
        ]);
        return redirect('/suratmasuk')->with(['sukses'=>'Berhasil']);
    }
}
