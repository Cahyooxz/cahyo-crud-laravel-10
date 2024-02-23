@extends('layout.app')
<title>Detail Data Post</title>
@section('content')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card border-0 shadow-sm rounded">
                <div class="card-body">
                    <h4 class="mb-3">Image Post</h4>
                    <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                    <hr>
                    <h4 class="mb-3 mt-4">Judul</h4>
                    <h5>{{ $post->title }}</h5>
                    <h4 class="mb-3 mt-4">Konten</h4>
                    <p class="tmt-3">
                        {!! $post->content !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
            {{-- <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <h4 class="mb-3">Image Portal</h4>
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                        <hr>
                        <div class="border">
                            <h5 class="mb-3">Judul</h5>
                            <h4>{{ $post->title }}</h4>
                        </div>
                        <p class="tmt-3">
                            {!! $post->content !!}
                        </p>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>

    </div>
</div>
@endsection



