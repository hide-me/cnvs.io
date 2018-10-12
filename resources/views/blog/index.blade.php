@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1>Blog</h1>
            <p class="lead font-weight-normal">This is where you can stay up-to-date on everything related to Canvas news, announcements, and future updates.</p>
            <a href="{{ url('https://github.com/cnvs/canvas') }}" class="btn btn-lg btn-outline-secondary"><i class="fab fa-fw fa-github"></i> GitHub</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
@endsection