<?php

namespace App\Http\Controllers;

use App\Models\AjukanCuti;
use App\Models\KelolaCuti;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DataCutiController extends Controller
{
    public function index()
    {
        $pengguna = Session::get('pengguna');
        if ($pengguna->peran == 'pegawaiumum') {
            $data = AjukanCuti::where('status', 'diajukan')->get();
        } else if ($pengguna->peran == 'pegawaiumum') {
            $data = AjukanCuti::where('status', 'disetujui')->get();
        } else {
            $data = AjukanCuti::all();
        }
        return view('dataCuti', ['data' => $data]);
    }

    public function simpan(Request $request)
    {
        $uploadPath = public_path('surat');
        // $name_blanko="";
        // $name_sk="";
        // $name_permohonan="";
        // $name_pengantar="";
        if ($request->file('blanko') != '') {
            $surat =  $request->file('blanko');

            $name_blanko = $surat->getClientOriginalName();
            $request->file('blanko')->move('surat', $name_blanko);
        }
        if ($request->file('sk') != '') {
            $surat =  $request->file('sk');

            $name_sk = $surat->getClientOriginalName();
            $request->file('sk')->move('surat', $name_sk);
        }
        if ($request->file('surat_permohonan') != '') {
            $surat =  $request->file('surat_permohonan');

            $name_permohonan = $surat->getClientOriginalName();
            $request->file('surat_permohonan')->move('surat', $name_permohonan);
        }
        if ($request->file('surat_pengantar') != '') {
            $surat =  $request->file('surat_pengantar');

            $name_pengantar = $surat->getClientOriginalName();
            $request->file('surat_pengantar')->move('surat', $name_pengantar);
        }
        $data = AjukanCuti::create([
            'nama_pegawai' => $request->nama_pegawai,
            'nip' => $request->nip,
            'pangkat' => $request->pangkat,
            'jabatan' => $request->jabatan,
            'kab_kota' => $request->kab_kota,
            'unit_kerja' => $request->unit_kerja,
            'mulai_tgl' => $request->mulai_tgl,
            'akhir_tgl' => $request->akhir_tgl,
            'alamat' => $request->alamat,
            'jk' => $request->jenis_kelamin,
            'jenis_cuti' => $request->jenis_cuti,
            'ket_cuti' => $request->ket_cuti,
            'no_hp' => $request->no_hp,
            'blanko' => $name_blanko,
            'sk' =>  $name_sk,
            's_permohonan' => $name_permohonan,
            's_pengantar' => $name_pengantar,
            'status' => 'diajukan',
        ]);
        return redirect('/ajukancuti')->with(['sukses' => $data->id]);
    }

    public function terima(Request $request)
    {
        // $data = AjukanCuti::find($request->id);
        // $data->status = 'disetujui';
        // $data->save();
        // return redirect('/datacuti')->with(['sukses'=>'Berhasil']);
        if ($request->file('surat_cuti') != '') {
            $surat =  $request->file('surat_cuti');

            $name = $surat->getClientOriginalName();
            $request->file('surat_cuti')->move('surat', $name);
        }
        $data = AjukanCuti::find($request->id);
        $data->status = $request->status_pengajuan;
        $data->keterangan = $request->keterangan;
        // $data->status = 'diunggah';
        $save = $data->save();
        if ($save && $data->status == 'Disetujui') {

            // $request->file('surat')->move('surat', $surat);
            $unggah = KelolaCuti::create([
                'ajukan_cuti_id' => $data->id,
                'unggah' => $name
            ]);

            if ($unggah) {
                return redirect('/datacuti')->with(['sukses' => 'Berhasil']);
            }
        } else {

            return redirect('/datacuti')->with(['sukses' => 'Status Surat ' . $data->status]);
        }
    }

    public function unggah(Request $request)
    {
        $surat = md5($request->nomor_surat . $request->perihal . $request->asal_surat . $request->status) . '.pdf';
        $request->file('surat')->move('surat', $surat);
        $data = AjukanCuti::find($request->id);
        $data->file_surat = $surat;
        $data->status = 'diunggah';
        $data->save();
        return redirect('/datacuti')->with(['sukses' => 'Berhasil']);
    }
}
