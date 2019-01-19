<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="">

    <!-- Facebook meta tags -->
    <meta name="og:type" content="website">
    <meta name="og:title" content="{{ sprintf('%s — %s', config("app.name"), 'A Laravel publishing platform' ) }}">
    <meta name="og:image" content="{{ asset('img/0R02D9s508082js9x8OBWEmxrAQyaO5F2nqVccOt.png') }}">
    <meta name="og:site_name" content="{{ config("app.name") }}">
    <meta name="og:description" content="">

    <!-- Twitter meta tags -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="{{ sprintf('%s — %s', config("app.name"), 'A Laravel publishing platform' ) }}">
    <meta name="twitter:image" content="{{ asset('img/0R02D9s508082js9x8OBWEmxrAQyaO5F2nqVccOt.png') }}">
    <meta name="twitter:site" content="@cnvs">
    <meta name="twitter:description" content="">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    <!-- Icon -->
    <link rel="icon" type="image/png" href="{{ asset('img/BgPrQ9dMfg5zLKskTSVWpHVUmMJNfgAXLhKNtZuN.png') }}">
</head>
<body>
    @include('components.nav.navbar')

    @yield('content')

    <!-- Application scripts -->
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

    <!-- Google Analytics -->
    @include('components.analytics.tracking')
</body>
</html>
