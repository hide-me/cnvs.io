@extends('site.layout')

@section('title', ' - Simple, Powerful Blog Publishing Platform')
@section('description', 'Simple, Powerful Blog Publishing Platform')
@section('og-title', 'Canvas')
@section('og-description', 'Simple, Powerful Blog Publishing Platform')
@section('twitter-title', 'Canvas')
@section('twitter-description', 'Simple, Powerful Blog Publishing Platform')

@section('content')
    @include('site.partials.navbar')
    <div class="wrapper">
        @include('site.partials.1-header')
        <div class="main main-raised">
            @include('site.partials.2-presentation')
            @include('site.partials.3-teamwork')
            @include('site.partials.4-features')
            @include('site.partials.5-extras')
            @include('site.partials.6-alternative-solution')
            @include('site.partials.7-screenshots')
            @include('site.partials.8-testimonials')
            @include('site.partials.9-stats')
            @include('site.partials.10-as-featured-on')
        </div>
        @include('site.partials.11-footer')
        @include('site.partials.back-to-top')
    </div>
    @include('site.partials.preloader')
@endsection