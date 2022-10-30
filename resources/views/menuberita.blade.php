@extends('layouts.front')

@section('title_front')
    Kemahasiswaan FTI
@endsection
 
@section('isi_konten')
        <!-- PENGUMUMAN -->
        <section class="sec_pengumuman">
        <div class="container-fluid" style="padding: 30px">
            <h3 class="fw-bolder text-center">BERITA</h3><hr>
            <div class="row">
                @foreach ($jumlahberita as $jb)
                <div class="col-lg-4 col-sm-12">
                    <a class="text_peng" href="/showberita/{{ $jb->id }}">
                        <div class="card shadow p-3 mb-5 bg-body rounded" style="width: 100%; margin-top: 20px;">
                            <img src="{{ URL::to('/blogs/' . $jb->thumbnail) }}" class="card-img-top thumbnail" alt="...">
                            <div class="card-body">                         
                                <h6 class="card-title text-center">{{ $jb->title }}</h6>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div> 
	        {{ $jumlahberita->links() }}
        </div>
    </section>
    <!-- END PENGUMUMAN -->
@endsection