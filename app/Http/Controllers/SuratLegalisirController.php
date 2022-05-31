<?php

namespace App\Http\Controllers;

use App\Models\SuratLegalisir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//class SuratLegalisirController extends Controller
// {
   // public function index(){
        // $pengguna = Session::get('pengguna');
        // if ($pengguna->peran == 'resepsionis'){
            // $data = SuratLegalisir::where('status','diajukan')->get();
        // }else if ($pengguna->peran == 'stafTu'){
            // $data = SuratLegalisir::where('status','disetujui')->get();
        // }else{
            // $data = SuratLegalisir::all();
        // }
        // return view('suratLegalisir',['data' => $data]);
    // }

    // public function simpan(Request $request){
        // $data = SuratLegalisir::create([
            // 'nama' => $request->nama,
            // 'nisn' => $request->nisn,
            // 'alamat' => $request->alamat,
            // 'tahun_tamat' => $request->tahun_tamat,
            // 'status' => 'diajukan',
        // ]);
        // return redirect('/ajukanlegalisir')->with(['sukses'=>$data->id]);
    // }

    // public function terima(Request $request){
        // $data = SuratLegalisir::find($request->id);
        // $data->status = 'disetujui';
        // $data->save();
        // return redirect('/suratlegalisir')->with(['sukses'=>'Berhasil']);
    // }
// }//
