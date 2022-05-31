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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body style="background: url('/dinas.jpg'); background-size: cover">
    <div style="margin-left: 30px;margin-top: 20px;">
        <h3 style="color: rgb(204, 204, 204)">SELAMAT DATANG DI</h3>
        <h4 style="color: rgb(204, 204, 204)">SISTEM INFORMASI PENGAJUAN CUTI DINAS PENDIDIKAN PROVINSI RIAU</h4>
        <a href="/login" class="btn btn-dark" style="position: absolute;top: 40px;right: 30px;">LOGIN</a>
    </div>
    <div style="height: 80vh" class="d-flex justify-content-center align-items-center">

        <div class="card" style="background: transparent">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <center>
                            <a href="/ajukancuti" class="btn btn-lg btn-light">Pengajuan Cuti</a><br><br>
                            {{-- <a href="/ajukanlegalisir" class="btn btn-lg btn-light">Pengajuan Legalisir</a><br><br> --}}
                            <a href="/lacak" class="btn btn-lg btn-light">Lacak Pengajuan</a>
                        </center>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
