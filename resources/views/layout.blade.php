<!DOCTYPE html>
<html lang="en">
    <head>
        @include('site.partials.meta')
        <title>{{ config('app.name') }}</title>

        <link rel="shortcut icon" href="{{ asset('assets/img/ico/favicon.png') }}">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/img/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/img/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/img/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/img/ico/apple-touch-icon-57-precomposed.png') }}">

        @include('site.partials.css')
    </head>
    <body id="top">
        @yield('content')
        @include('site.partials.js')
    </body>
</html>
