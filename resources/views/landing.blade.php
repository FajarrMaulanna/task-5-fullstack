@extends('layouts.front')

@section('title_front')
    Kemahasiswaan FTI
@endsection
 
@section('isi_konten')
    <!-- CAROUSEL DAN LAYANAN -->
    <section class="car_slide">
            <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="{!! asset('img/FTI-1.jpg') !!}" class="d-block w-100 img_car" alt="...">
                    <div class="carousel-caption d-md-block">
                        <h1>Fakultas Teknologi Informasi </h1>
                        <p class="d-none d-md-block">Fakultas Teknologi Informasi Universitas Andalas atau dikenal sebagai FTI Unand adalah salah satu fakultas di lingkungan Universitas Andalas. Gedung FTI Unand terletak di sebelah Gedung Pascasarjana Unand</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
    </section>
    <!-- END CAROUSEL DAN LAYANAN -->

    <!-- QUICK MENU -->
    <section class="menu_lay">
        <div class="container">
            <div class="card">
                <div class="row justify-content-center" id="row_menu">
                    <div class="col">
                        <a href="#">
                            <img class="logo_lay" src="{!! asset('img/majesticons_academic-cap.png') !!}" alt="">
                            <p class="text_lay">Beasiswa</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img class="logo_lay" src="{!! asset('img/majesticons_calendar.png') !!}" alt="">
                            <p class="text_lay">Agenda</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img class="logo_lay" src="{!! asset('img/majesticons_briefcase.png') !!}" alt="">
                            <p class="text_lay">Karir</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img class="logo_lay" src="{!! asset('img//majesticons_star.png') !!}" alt="">
                            <p class="text_lay">Prestasi</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img class="logo_lay" src="{!! asset('img/majesticons_user-group.png') !!}" alt="">
                            <p class="text_lay">Organisasi</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img class="logo_lay" src="{!! asset('img/majesticons_chats.png') !!}" alt="">
                            <p class="text_lay">Layanan</p>
                        </a>
                    </div>
                    <div class="col">
                        <a href="#">
                            <img class="logo_lay" src="{!! asset('img/majesticons_book-open.png') !!}" alt="">
                            <p class="text_lay">Pengabdian Masyarakat</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END QUICK MENU -->

    <!-- PENGUMUMAN -->
    <section class="sec_pengumuman">
        <div class="container-fluid">
            <p class="title_home">Berita</p>
            <div class="row">
                @foreach ($jumlahberita as $jb)
                <div class="col-lg-3">
                    <a class="text_peng" href="/showberita/{{ $jb->id }}">
                        <div class="card shadow bg-body rounded" style="width: 18rem;">
                            <img src="{{ URL::to('/blogs/' . $jb->thumbnail) }}" class="card-img-top thumbnail" alt="...">
                            <div class="card-body">
                                <h6 class="card-title text-center">{{ $jb->title }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                <a type="button" href="/menuberita" class="btn btn-secondary sel_btn">Selengkapnya</a>
            </div>
        </div>
    </section>
    <!-- END PENGUMUMAN -->

    <!-- SUBSCRIBE -->
    <section class="sub_area mt-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mt-5">
                    <iframe class="prof_unand" width="100%" height="400" src="https://www.youtube.com/embed/diJeiCCWTv8"></iframe>
                </div>
                <div class="col-lg-4 mt-5">
                    <p class="text_taut">Tautan Cepat</p>
                    <a class="link_taut" href="">News</a><hr>
                    <a class="link_taut" href="">Info Akademik</a><hr>
                    <a class="link_taut" href="">Profil Fakultas</a><hr>
                    <a class="link_taut" href="">Layanan Akademik</a><hr>
                    <a class="link_taut" href="">Informasi Beasiswa</a><hr>
                </div>
            </div>
        </div>
    </section>
    <!-- END SUBSCRIBE -->
@endsection