@extends('layouts.front')

@section('title_front')
    Kemahasiswaan FTI
@endsection
 
@section('isi_konten')
        <!-- PENGUMUMAN -->
        <section class="sec_pengumuman">
        <div class="container" style="padding: 30px">
            <h3 class="text-center">{{ $berita->title }}</h3><hr>
            <img style="display: block; margin: auto; margin-bottom: 20px;" width="50%" src="{{ URL::to('/blogs/' . $berita->thumbnail) }}" alt="">
            <div class="row">
                {!! $berita->content !!}
            </div> 
        </div>
    </section>
    <!-- END PENGUMUMAN -->
@endsection