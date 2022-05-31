@section('datacuti','active')

@extends('template')

@section('content')
    <div class="page-content">
        <section id="cari">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Pengajuan Cuti Pegawai</h3>

                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Surat</th>
                                        <th>Nama Pegawai</th>
                                        <th>NIP</th>
                                        <th>Jabatan</th>
                                        <th>Kota/Kabupaten</th>
                                        <th>Unit Kerja</th>
                                        <th>Jenis Cuti</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="idtbody">
                                    @foreach($data as $y => $x)
                                        <tr>
                                            <td>{{$y+1}}</td>
                                            <td>PC-{{$x->id}}</td>
                                            <td>{{$x->nama_pegawai}}</td>
                                            <td>{{$x->nip}}</td>
                                            <td>{{$x->jabatan}}</td>
                                            <td>{{$x->kab_kota}}</td>
                                            <td>{{$x->unit_kerja}}</td>
                                            <td>{{$x->jenis_cuti}}</td>
                                            <td>
                                                {{ucfirst($x->status)}}
                                            </td>
                                            <td>
                                                <input type="hidden" id="val_blanko" name="blanko" value="{{$x->blanko}}">
                                                <input type="hidden" id="val_sk" name="sk" value="{{$x->sk}}">
                                                <input type="hidden" id="val_surat_permohonan" name="surat_permohonan" value="{{$x->surat_permohonan}}">
                                                <input type="hidden" id="val_surat_pengantar" name="surat_pengantar" value="{{$x->surat_pengantar}}">
                                                <button class="btn btn-info" onclick="tambah({{$x}})">Lihat</button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="modal fade text-left" id="modaltambah" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">
                        @if(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'pegawaiumum')
                            Terima Pengajuan
                        {{-- @elseif(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'pegawaiumum')
                            Unggah Pengajuan
                        @else --}}
                            Lihat Data Pengajuan Surat
                        @endif
                    </h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                @if(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'pegawaiumum')
                    <form action="/datacuti/terima" method="POST" enctype="multipart/form-data">
                {{-- @elseif(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'pegawaiumum')
                    <form action="/datacuti/unggah" method="POST" enctype="multipart/form-data"> --}}
                @endif
                    @csrf
                    <div class="modal-body">
                        <input name="id" hidden id="idnya">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Id. Pengajuan</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="id_pengajuan" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Nama Pegawai</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="nama_pegawai" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">NIP</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="nip" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Pangkat</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="pangkat" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Jabatan</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="jabatan" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Kota/Kabupaten</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="kab_kota" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Unit Kerja</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="unit_kerja" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Mulai Tanggal</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="mulai_tgl" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Hingga Tanggal</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="akhir_tgl" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Alamat</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="alamat" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Jenis Kelamin</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="jk" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Jenis Cuti</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="jenis_cuti" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3  ">
                                <label class="col-form-label">Keterangan Cuti</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="ket_cuti" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">No Handphone</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" id="no_hp" readonly>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-13 col-3">
                                <label class="col-form-label">Blanko</label>
                            </div>
                            <div class="col-lg-6 col-7">
                                <a class="btn btn-info" id="blanko" href="#" target="__blank">Lihat Berkas</a>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-13 col-3">
                                <label class="col-form-label">SK</label>
                            </div>
                           <div class="col-lg-6 col-7">
                                <a class="btn btn-info" id="sk" href="#" target="__blank">Lihat Berkas</a>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-13 col-3">
                                <label class="col-form-label">Surat Permohonan</label>
                            </div>
                           <div class="col-lg-6 col-7">
                                <a class="btn btn-info" id="surat_permohonan" href="#" target="__blank">Lihat Berkas</a>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-13 col-3">
                                <label class="col-form-label">Surat Pengantar</label>
                            </div>
                            <div class="col-lg-6 col-7">
                                <a class="btn btn-info" id="surat_pengantar" href="#" target="__blank">Lihat Berkas</a>
                            </div>
                        </div>

                        <br>
                        @if(\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'pegawaiumum')
                            <button type="submit" class="btn btn-success ml-1">
                                <i class="bx bx-check d-block d-sm-none"></i>
                                <span class="d-none d-sm-block">Terima</span>
                            </button>
                        @endif
                        <button type="button" class="btn btn-warning"
                                data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Batal</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('css')
    <link rel="stylesheet" href="/assets/vendors/simple-datatables/style.css">
@endpush

@push('js')

    <script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
        var blanko_id=$("#val_blanko").val();
        var sk_id=$("#val_sk").val();
        var suratpermohonan_id=$("#val_surat_permohonan").val();
        var suratpengantar_id=$("#val_surat_pengantar").val();
        var url = '{{ route("pdf", ":file") }}';
        url = url.replace(':file', blanko_id);
        url = url.replace(':file', sk_id);
        url = url.replace(':file', suratpermohonan_id);
        url = url.replace(':file', suratpengantar_id);
        function tambah(data){

            $('#id_pengajuan').val('PC-' + data.id)
            $('#idnya').val(data.id)
            $('#nama_pegawai').val(data.nama_pegawai)
            $('#nip').val(data.nip)
            $('#pangkat').val(data.pangkat)
            $('#jabatan').val(data.jabatan)
            $('#kab_kota').val(data.kab_kota)
            $('#unit_kerja').val(data.unit_kerja)
            $('#mulai_tgl').val(data.mulai_tgl)
            $('#akhir_tgl').val(data.akhir_tgl)
            $('#alamat').val(data.alamat)
            $('#jk').val(data.jk)
            $('#jenis_cuti').val(data.jenis_cuti)
            $('#ket_cuti').val(data.ket_cuti)
            $('#no_hp').val(data.no_hp)
            $('#blanko').val(data.blanko)
            $('#sk').val(data.sk)
            $('#surat_permohonan').val(data.surat_permohonan)
            $('#surat_pengantar').val(data.surat_pengantar)
            $('#blanko').attr('href', url)
            $('#sk').attr('href', url)
            $('#surat_permohonan').attr('href', url)
            $('#surat_pengantar').attr('href', url)
            $('#modaltambah').modal('show')
        }
    </script>
@endpush
