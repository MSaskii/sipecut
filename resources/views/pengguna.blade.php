@section('pengguna','active')

@extends('template')

@section('content')
    <div class="page-content">
        <section id="cari">
            <div class="row match-height">
                <div class="col-md-12 col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Data Pengguna <button class="btn btn-success" style="float: right" onclick="tambah()"><i class="fa fa-plus-square"></i> Tambah</button></h3>

                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIP</th>
                                        <th>Peran</th>
                                        <th>Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody id="idtbody">
                                    @foreach($data as $y =>$x)
                                        <tr>
                                            <td>{{$y+1}}</td>
                                            <td>{{$x->nama_pengguna}}</td>
                                            <td>{{$x->peran}}</td>
                                            <td>
                                                <button class="btn btn-warning" onclick="edit({{$x}})"> Ubah</button>
                                                <button class="btn btn-danger" onclick="hapus({{$x}})"> Hapus</button>
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
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Tambah Pengguna</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="/pengguna" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">NIP</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="number" name="nama_pengguna" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Peran</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <select class="form-control" name="peran" required>
                                    <option value="admin">Administrator</option>
                                    <option value="pegawaiumum">Staf Kepegawaian dan Umum</option>
                                    <option value="kabagpegawai">Kabag Kepegawaian dan Umum</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Password</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="password" name="kata_sandi" class="form-control" required>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Tambah</span>
                        </button>
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

    <div class="modal fade text-left" id="modaledit" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Ubah Pengguna</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="/pengguna/edit" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="id" id="edit-id" hidden>
                    <div class="modal-body">
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">NIP</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="text" class="form-control" name="nama_pengguna" id="edit-namapengguna" required>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Peran</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <select class="form-control" id="edit-namapengguna" name="peran" required>
                                    <option value="admin">Administrator</option>
                                    <option value="pegawaiumum">Staff Kepegawaian dan Umum</option>
                                    <option value="kabagpegawai">Kabag Kepegawaian dan Umum</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row align-items-center">
                            <div class="col-lg-2 col-3">
                                <label class="col-form-label">Password</label>
                            </div>
                            <div class="col-lg-10 col-9">
                                <input type="password" name="kata_sandi" class="form-control">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Ubah</span>
                        </button>
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

    <div class="modal fade text-left" id="modalhapus" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel17" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
             role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17">Hapus Pengguna</h4>
                    <button type="button" class="close" data-bs-dismiss="modal"
                            aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="/pengguna/hapus" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input name="id" id="hapus-id" hidden>
                    <div class="modal-body">
                        <b id="hapus-pesan"></b>
                        <br><br>
                        <button type="submit" class="btn btn-danger ml-1">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Hapus</span>
                        </button>
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
    <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">
@endpush

@push('js')

    <script src="/assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);

        function tambah(){
            $('#modaltambah').modal('show')
        }
        function edit(data){

            $('#edit-id').val(data.id)
            $('#edit-namapengguna').val(data.nama_pengguna)
            $('#edit-peran').val(data.peran)

            $('#modaledit').modal('show')
        }
        function hapus(data){
            $('#hapus-id').val(data.id)
            $('#hapus-pesan').html('Yakin ingin menghapus ' + data.nama_pengguna)
            $('#modalhapus').modal('show')
        }
    </script>
@endpush
