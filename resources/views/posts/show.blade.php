@extends('layouts.blank')

@section('title_dash')
    Kemahasiswaan FTI - Berita
@endsection

@section('konten')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2> Show Post</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('posts.index') }}"> Back</a>
            </div>
        </div>
    </div>
 
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong><br>
                <img style="display: block; margin: auto; margin-bottom: 20px;" width="50%" src="{{ URL::to('/blogs/' . $post->thumbnail) }}" alt="">
                {!! $post->content !!}
            </div>
        </div>
    </div>
@endsection
