@extends('layouts.app')

@section('title', 'Documentation')

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1>Documentation</h1>
            <p class="lead font-weight-normal">Dig into the core application and you'll find release notes, upgrade guides, and more in the documentation.</p>
            <a href="{{ url('https://github.com/cnvs/canvas') }}" class="btn btn-lg btn-outline-secondary"><i class="fab fa-fw fa-github"></i> GitHub</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
@endsection