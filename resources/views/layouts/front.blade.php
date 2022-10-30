<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{!! asset('img/unand_logo.png') !!}">
    <link rel="stylesheet" href="{!! asset('bootstrap/css/bootstrap.min.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/main.css') !!}">
    <title>@yield('title_front')</title>
</head>
<body>
    <!-- NAVBAR -->
    <nav class="navbar nav_1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <a class="navbar-brand" href="#">
                        <img class="logo_nav" src="{!! asset('img/unand_logo.png') !!}" alt="">
                    </a>
                </div>
                <div class="col-9">
                    <p class="text_kmhs">KEMAHASISWAAN</p>
                    <p class="text_kmhs">Fakultas Teknologi Informasi</p>
                    <p class="text_kmhs1">Universitas Andalas</p>
                </div>
            </div>
        </div>
    </nav>
    <nav class="navbar nav_2 navbar-expand-lg navbar-light bg-light sticky-top shadow-sm">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <ul class="navbar-nav">
                        <div class="col">
                            <a class="nav-link" href="/">BERANDA</a>
                        </div>
                        <div class="col">
                            <a class="nav-link" href="#">PROFIL</a>
                        </div>
                        <div class="col">
                            <a class="nav-link" href="/menuberita">BERITA</a>
                        </div>
                        <div class="col">
                            <a class="nav-link" href="#">E-BOOK</a>
                        </div>
                        <div class="col">
                            <a class="nav-link" href="#">BERKAS</a>
                        </div>
                        <div class="col">
                            <a class="nav-link" href="#">KONTAK</a>
                        </div>
                        <div class="col">
                            <a class="nav-link" href="#">FAQ</a>
                        </div>
                    </ul>
                </div>
            </div>
          </div>
        </div>
      </nav>
    <!-- END NAVBAR -->

    <!-- ISI KONTEN -->
    @yield('isi_konten')
    <!-- END ISI KONTEN -->

    <!-- FOOTER AWAL -->
    <section class="foot_awal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-lg-2 col-md-2">
                            <img class="logo_fti_foot" src="{!! asset('img/fti.png') !!}" alt="">
                        </div>
                        <div class="col-9 col-lg-10 col-md-10">
                            <p class="text_foot1">FAKULTAS TEKNOLOGI INFORMASI</p>
                            <p class="text_foot2">UNIVERSITAS ANDALAS</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <p class="foot_address">ALAMAT KANTOR</p>
                        <p class="foot_address">Kampus Unand Limau Manis, Padang - Fakultas Teknologi Informasi Unand</p>
                        <p class="foot_address">Sumatera Barat - 25163</p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row">
                        <p class="text_foot3">LINK</p>
                    </div>
                    <div class="row mt-3">
                        <div class="col col-md-3">
                            <a href=""><img class="img_foot_link" src="{!! asset('img/unand_logo.png') !!}" alt=""></a>
                        </div>
                        <div class="col col-md-3">
                            <a href=""><img class="img_foot_link" src="{!! asset('img/bemfti.png') !!}" alt=""></a>
                        </div>
                        <div class="col col-md-3">
                            <a href=""><img class="img_foot_link" src="{!! asset('img/hmsi.png') !!}" alt=""></a>
                        </div>
                        <div class="col col-md-3">
                            <a href=""><img class="img_foot_link" src="{!! asset('img//tekom.png') !!}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END FOOTER AWAL -->

    <!-- FOOTER AKHIR -->
    <section class="foot_akhir">
        <div class="container-fluid">
            <p class="copyright mt-3">© Direktorat Kemahasiswaan FTI Universitas Andalas</p>
        </div>
    </section>
    <!-- END FOOTER AKHIR -->

    <script src="{!! asset('bootstrap/js/bootstrap.min.js') !!}"></script>
</body>
</html>