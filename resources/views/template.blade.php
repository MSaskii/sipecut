<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pengajuan Cuti Dinas Pendidikan Provinsi Riau</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">

    <link rel="stylesheet" href="/assets/vendors/iconly/bold.css">
    <link rel="stylesheet" href="/assets/vendors/fontawesome/all.min.css">
    <link rel="stylesheet" href="/assets/vendors/toastify/toastify.css">
    @stack('css')

    <link rel="stylesheet" href="/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="shortcut icon" href="/logodinas.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <style>
        /* .dropify-wrapper .dropify-message span.file-icon{
            font-size: 25px !important;
        } */
        /*.sidebar-link span{*/
        /*    font-size: 20px;*/
        /*}*/

    </style>
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        {{-- <li class="sidebar-title">Hy {{\Illuminate\Support\Facades\Auth::user()->email}}</li>

                   <li class="sidebar-item ">
                       <a class='sidebar-link' href="/logout"
                          onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                           <i class="fa fa-sign-out-alt"></i>
                           <span>Keluar</span>
                      </a>
                  </li> --}}

                        <h5>@yield('title')</h5>

                        <center><img style="width: 70%" src="/logodinas.png"></center>

                        {{-- <li class="sidebar-item @yield('suratmasuk') ">
                        <a href="/suratmasuk" class='sidebar-link'>
                            <i class="fa fa-folder-open"></i>
                            <span>Data Surat Masuk</span>
                        </a>
                    </li> --}}
                        <li class="sidebar-item @yield('datacuti') ">
                            <a href="/datacuti" class='sidebar-link'>
                                <i class="fa fa-folder-open"></i>
                                <span> Data Pengajuan Cuti</span>
                            </a>
                        </li>
                        <li class="sidebar-item @yield('kelolacuti') ">
                            <a href="/kelolacuti" class='sidebar-link'>
                                <i class="fa fa-clipboard-list"></i>
                                <span>Kelola Data Cuti</span>
                            </a>
                        </li>
                        @if (\Illuminate\Support\Facades\Session::get('pengguna')->peran == 'admin')
                            <li class="sidebar-item @yield('pengguna') ">
                                <a href="/pengguna" class='sidebar-link'>
                                    <i class="fa fa-user"></i>
                                    <span>Kelola Pengguna</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="card">
                    <div class="card-header">
                        <b>Sistem Informasi Pengajuan Cuti Dinas Pendidikan Provinsi Riau</b>
                        <a style="float: right; cursor: pointer">
                            <i class="fa fa-sign-out-alt" onclick="location.href='/keluar'"></i>
                        </a>
                    </div>
                </div>
            </div>
            @yield('content')

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>{{ \Carbon\Carbon::now()->year }} &copy; Dinas Pendidikan Provinsi Riau</p>
                    </div>
                    <div class="float-end">
                        <p>Made with <span class="text-danger"></span> by <a></a>M. Saski</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="/assets/vendors/toastify/toastify.js"></script>

    @if (session('sukses'))
        <script>
            Toastify({
                text: "{{ session('sukses') }}",
                duration: 3000,
                close: true,
                backgroundColor: "linear-gradient(to right, #00b09b, #96c93d)",
            }).showToast();
        </script>
    @endif
    @if (session('error'))
        <script>
            Toastify({
                text: "{{ session('error') }}",
                duration: 3000,
                close: true,
                backgroundColor: "linear-gradient(to right, #00b09b, #c93d3d)",
            }).showToast();
        </script>
    @endif


    @stack('js')

    <script src="/assets/js/main.js"></script>
    <script src="/assets/vendors/fontawesome/all.min.js"></script>
</body>

</html>
