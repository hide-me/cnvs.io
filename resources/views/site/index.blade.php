@extends('layout')

@section('content')
    @include('site.partials.navbar')
    <div class="wrapper">
        @include('site.partials.main-header')
        <div class="main main-raised">
            @include('site.partials.not-just-another-blog')
            @include('site.partials.presentation-video')
            @include('site.partials.teamwork')
            @include('site.partials.features')
            @include('site.partials.extra-features')
            @include('site.partials.best-solution')
            @include('site.partials.screenshots')
            @include('site.partials.testimonials')
            @include('site.partials.stats')
            @include('site.partials.download')
            @include('site.partials.as-featured-on')
        </div>
        @include('site.partials.footer')
        @include('site.partials.back-to-top')
    </div>
    @include('site.partials.preloader')
@endsection