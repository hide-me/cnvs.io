<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">
    <meta name="og:type" content="website">
    <meta name="og:title" content="{{ sprintf('%s — %s', config("app.name"), 'A Laravel publishing platform' ) }}">
    <meta name="og:image" content="">
    <meta name="og:site_name" content="{{ config("app.name") }}">
    <meta name="og:description" content="">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ sprintf('%s — %s', config("app.name"), 'A Laravel publishing platform' ) }}">
    <meta name="twitter:image" content="">
    <meta name="twitter:site" content="@cnvs">
    <meta name="twitter:description" content="">
    <title>@yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
</head>
<body>
    @include('components.nav.navbar')

    @yield('content')

    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    @include('components.analytics.tracking')
</body>
</html>
