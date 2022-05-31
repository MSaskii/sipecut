<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistem Informasi Pengajuan Cuti Dinas Pendidikan Provinsi Riau</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="shortcut icon" href="/logodinas.png" type="image/x-icon">
    </head>

    <body style="background: url('/dinas.jpg'); background-size: cover">
    <div style="margin-left: 30px;margin-top: 20px;">
        <h3 style="color: rgb(204, 204, 204)">SELAMAT DATANG DI</h3>
        <h4 style="color: rgb(204, 204, 204)">SISTEM INFORMASI PENGAJUAN CUTI DINAS PENDIDIKAN PROVINSI RIAU</h4>
        <a href="/login" class="btn btn-dark" style="position: absolute;top: 40px;right: 30px;">LOGIN</a>
    </div>
<div style="height: 80vh" class="d-flex justify-content-center align-items-center">

    <div class="card" style="width: 55%">
        <div class="card-body">
            <div class="row">
                @if(session()->has('sukses'))
                    <div class="col-md-12">
                        <center><h3>Pengajuan Berhasil Diajukan!</h3></center>
                        <center><h3>Nomor Id Pengajuan</h3></center>
                        <br>
                        <center>
                            <button class="btn btn-light-primary">PC-{{session()->get('sukses')}}</button>
                            <input id="nomor" hidden value="PC-{{session()->get('sukses')}}">
                            <button class="btn btn-light-primary" onclick="salin()">Salin</button>
                            <a class="btn btn-light-primary" href="/">Kembali</a>
                        </center>
                    </div>
                @else
                <form action="/datacuti" method="post" class="col-md-14">
                    @csrf
                    <h4>Silahkan Isi Form Pengajuan</h4>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Nama Pegawai</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="text" class="form-control" name="nama_pegawai" placeholder="Nama Lengkap" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">NIP</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="number" class="form-control" name="nip" placeholder="NIP" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Pangkat</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="text" class="form-control" name="pangkat" placeholder="Pangkat" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Pilih Jabatan</label>
                        </div>
                    <div class="col-lg-10 col-9">
                        <select class="form-control" onchange="showPengantar(this)" name="jabatan">
                            <option value="" selected disabled>Pilih Jabatan</option>
                            <option>Pegawai Dinas</option>
                            <option>Kepala Sekolah/Wakil Kepala Sekolah</option>
                            <option>Guru</option>
                            <option>Tenaga Pendidik</option>
                        </select>
                    </div>
                </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Kota/Kabupaten</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <select class="form-control" name="kab_kota">
                                <option value="" selected disabled>Pilih Kota/Kabupaten</option>
                                <option>Pekanbaru</option>
                                <option>Dumai</option>
                                <option>Kampar</option>
                                <option>Bengkalis</option>
                                <option>Indragiri Hilir</option>
                                <option>Indragiri Hulu</option>
                                <option>Rokan Hilir</option>
                                <option>Rokan Hulu</option>
                                <option>Kepulauan Meranti</option>
                                <option>Kuantan Singingi</option>
                                <option>Pelalawan</option>
                                <option>Siak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Tempat Unit Kerja</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="textarea" class="form-control" name="unit_kerja" placeholder="Unit Kerja" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Jenis Cuti</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <select class="form-control" name="jenis_cuti">
                                <option value="" selected disabled>Pilih Cuti</option>
                                <option>Cuti Tahunan</option>
                                <option>Cuti Besar</option>
                                <option>Cuti Bersalin</option>
                                <option>Cuti Sakit</option>
                                <option>Cuti Alasan Penting</option>
                                <option>Cuti Diluar Tanggungan Negara</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Keterangan Cuti</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="text" class="form-control" name="ket_cuti" placeholder="Keterangan Cuti" required>
                        </div>
                    </div>
                        <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Mulai Tanggal</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="date" class="form-control" name="mulai_tgl" placeholder="Pilih Tanggal" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Hingga Tanggal</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="date" class="form-control" name="akhir_tgl" placeholder="Pilih Tanggal" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Alamat</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="textarea" class="form-control" name="alamat" placeholder="Alamat" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Jenis Kelamin</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <select class="form-control" name="jenis_kelamin">
                                <option value="" selected disabled>Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">No Handphone</label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="number" class="form-control" name="no_hp" placeholder="No Handphone" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Blanko Cuti <text style="color: red">*</text></label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="file" name="blanko" class="form-control" accept="application/pdf" required>
                        </div>
                        <text>Silahkan Unduh blanko : <a href="https://docs.google.com/document/d/1hoa_gptjwR4dmjccBUd9ak_tLYExsYIO/edit?usp=sharing&ouid=111267113886573629488&rtpof=true&sd=true">Unduh Blanko</a></text>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">SK Pangkat<text style="color: red">*</text></label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="file" name="sk" class="form-control" accept="application/pdf" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Surat Permohonan<text style="color: red">*</text></label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="file" name="surat_permohonan" class="form-control" accept="application/pdf" required>
                        </div>
                    </div>
                    <div class="form-group row align-items-center" id="pengantar_form">
                        <div class="col-lg-2 col-3">
                            <label class="col-form-label">Surat Pengantar<text style="color: red">*</text></label>
                        </div>
                        <div class="col-lg-10 col-9">
                            <input type="file" name="surat_pengantar" class="form-control" accept="application/pdf">
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Daftar</button>
                    <a class="btn btn-warning" type="button" href="/">Batal</a>
                </form>
                @endif
            </div>
        </div>
    </div>
</div>

<script>
    function salin() {
        var copyText = document.getElementById("nomor");

        copyText.select();
        copyText.setSelectionRange(0, 999999999);

        navigator.clipboard.writeText(copyText.value);

        alert("Berhasil salin: " + copyText.value);
    }

    function showPengantar(select) {
   if(select.value == "Pegawai Dinas"){
    document.getElementById('pengantar_form').style.display = "none";
   }else{
    document.getElementById('pengantar_form').style.display = "block";
   }
}
</script>

</body>

</html>
