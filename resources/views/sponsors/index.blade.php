@extends('layouts.app')

@section('title', 'Sponsors')

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1>Featured Sponsor</h1>
            <p class="lead font-weight-normal">Digital Ocean provides developers and businesses a reliable, easy-to-use cloud computing platform of virtual servers, object storage, and more.</p>
            <a href="{{ url('https://www.digitalocean.com/') }}" class="btn btn-lg btn-outline-primary"><i class="fab fa-fw fa-digital-ocean"></i> Digital Ocean</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
@endsection