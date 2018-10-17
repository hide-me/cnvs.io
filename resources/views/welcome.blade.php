@extends('layouts.app')

@section('title', config('app.name'))

@section('content')
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1>Never judge a book by it's cover</h1>
            <p class="lead font-weight-normal">As you may have noticed, things are amiss. Development on <b>Canvas v4.0</b> is in full swing, and it'll be the best one yet.</p>
            <a href="{{ url('https://github.com/cnvs/canvas') }}" class="btn btn-lg btn-outline-secondary"><i class="fab fa-fw fa-github"></i> GitHub</a>
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
    </div>
@endsection