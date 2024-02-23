@extends('layout.app')
<title>Dashboard</title>
@section('content')
<div class="row">
    <div class="col-md-6 col-sm-12 d-flex align-items-center">
        <img src="img/data.gif" alt="data" class="w-75 mt-3">
    </div>
    <div class="col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
        <div class="mt-5">
            <h1 class="mb-3">Selamat Datang Di Data Post <span class="text-danger">!</span></h1>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Mulai Data Post</a>
        </div>
    </div>
</div>
@endsection