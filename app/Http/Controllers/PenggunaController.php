<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
    public function masuk(){
        return view('login');
    }

    public function login(Request $request){
        $login = Pengguna::where('nama_pengguna',$request->nama_pengguna)->where('kata_sandi',md5($request->kata_sandi))->get();
        if ($login->first()){
            Session::put('pengguna',$login->first());
            return redirect('/datacuti');
        }else{
            return redirect('login')->with('gagal','Username dan Password salah');
        }
    }

    public function keluar(){
        Session::flush();
        return redirect('/');
    }

    public function index(){
        $data = Pengguna::all();
        return view('pengguna',['data'=>$data]);
    }

    public function tambah(Request $request){
        Pengguna::create([
            'nama_pengguna' => $request->nama_pengguna,
            'peran' => $request->peran,
            'kata_sandi' => md5($request->kata_sandi)
        ]);
        return redirect('/pengguna')->with('sukses','Sukses tambah pengguna');
    }

    public function edit(Request $request){
        $data = Pengguna::find($request->id);
        $data->nama_pengguna = $request->nama_pengguna;
        if ($request->has('kata_sandi')){
            $data->kata_sandi = md5($request->kata_sandi);
        }
        $data->save();
        return redirect('/pengguna')->with('sukses','Sukses edit pengguna');
    }

    public function hapus(Request $request){
        Pengguna::destroy($request->id);
        return redirect('/pengguna')->with('sukses','Sukses hapus pengguna');
    }
}
