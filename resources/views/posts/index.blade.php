@extends('layouts.blank')

@section('title_dash')
    Kemahasiswaan FTI - Berita
@endsection

@section('konten')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Berita FTI</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('posts.create') }}"> Create Post</a>
            </div>
        </div>
    </div>
 
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    
    <div class="table-responsive" style="overflow-x: auto">
        <table class="table table-bordered">
            <tr>
                <th width="20px" class="text-center">No</th>
                <th width="200px" class="text-center">Thumbnail</th>
                <th class="text-center">Title</th>
                <th width="200px"class="text-center">Action</th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td class="text-center">{{ ++$i }}</td>
                <td><img width="150px" src="{{ URL::to('/blogs/' . $post->thumbnail) }}" alt=""></td>
                <td>{{ $post->title }}</td>
                <td class="text-center">
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
    
                        <a class="btn btn-info btn-sm" href="{{ route('posts.show',$post->id) }}">Show</a>
    
                        <a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$post->id) }}">Edit</a>
    
                        @csrf
                        @method('DELETE')
    
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
 
    {{ $posts->links() }}
 
@endsection
