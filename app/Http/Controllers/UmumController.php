<?php

namespace App\Http\Controllers;

use App\Models\AjukanCuti;
use App\Models\KelolaCuti;
use App\Models\SuratMasuk;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;

class UmumController extends Controller
{
    public function index(){
        return view('home');
    }

    public function surat(){
        return view('pengajuanCuti');
    }

    public function keloladatacuti(){
        return view('kelolaDataCuti');
    }

    public function lacak(){
        return view('lacak',['status' => null]);
    }

    public function lacakKan(Request $request){
        if (explode('-',$request->nomor)[0] == 'PC'){
            $cek = AjukanCuti::find(explode('-',$request->nomor)[1]);
            if ($cek){
                $status = 'ada';
                $data = $cek;
            }else{
                $status = 'tidakada';
                $data = null;
            }
        }else if (explode('-',$request->nomor)[0] == 'PL'){
            $cek = KelolaCuti::find(explode('-',$request->nomor)[1]);
            if ($cek){
                $status = 'ada';
                $data = $cek;
            }else{
                $status = 'tidakada';
                $data = null;
            }
        }else{
            $status = null;
            $data = null;
        }

        return view('lacak',['data' => $data, 'status' => $status, 'tipe' => explode('-',$request->nomor)[0]]);
    }
}
