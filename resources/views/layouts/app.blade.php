<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ sprintf('%s - ', config('app.name')) }} @yield('title')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script defer src="{{ url('https://use.fontawesome.com/releases/v5.3.1/js/all.js') }}" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
</head>
<body>
<nav class="site-header sticky-top py-1">
    <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2" href="{{ url('/') }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mx-auto"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
        </a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('docs') }}">Documentation</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('blog') }}">Blog</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ url('https://cnvs-io.slack.com') }}">Slack</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ url('https://twitter.com/cnvs_io') }}">Twitter</a>
        <a class="py-2 d-none d-md-inline-block" href="{{ route('sponsors') }}">Sponsors</a>
    </div>
</nav>

@yield('content')

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
