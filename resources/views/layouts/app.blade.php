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

<footer class="container py-5">
    <div class="row">
        <div class="col-12 col-md">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="d-block mb-2"><circle cx="12" cy="12" r="10"></circle><line x1="14.31" y1="8" x2="20.05" y2="17.94"></line><line x1="9.69" y1="8" x2="21.17" y2="8"></line><line x1="7.38" y1="12" x2="13.12" y2="2.06"></line><line x1="9.69" y1="16" x2="3.95" y2="6.06"></line><line x1="14.31" y1="16" x2="2.83" y2="16"></line><line x1="16.62" y1="12" x2="10.88" y2="21.94"></line></svg>
            <small class="d-block mb-3 text-muted">&copy; {{ date('Y') }}</small>
        </div>
        <div class="col-6 col-md">
            <h5>GitHub</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{ url('https://github.com/cnvs/canvas/issues') }}">Issues</a></li>
                <li><a class="text-muted" href="{{ url('https://github.com/cnvs/canvas/releases') }}">Releases</a></li>
                <li><a class="text-muted" href="{{ url('https://github.com/cnvs/canvas/pulls') }}">Pull Requests</a></li>
                <li><a class="text-muted" href="{{ url('https://github.com/cnvs/canvas/blob/master/license') }}">License</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Community</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{ route('blog') }}">Blog</a></li>
                <li><a class="text-muted" href="{{ url('https://cnvs-io.slack.com') }}">Slack <span class="badge badge-success">New</span></a></li>
                <li><a class="text-muted" href="{{ url('https://twitter.com/cnvs_io') }}">Twitter</a></li>
            </ul>
        </div>
        <div class="col-6 col-md">
            <h5>Sponsors</h5>
            <ul class="list-unstyled text-small">
                <li><a class="text-muted" href="{{ url('https://www.araxis.com/') }}">Araxis</a></li>
                <li><a class="text-muted" href="{{ url('https://www.digitalocean.com/') }}">Digital Ocean</a></li>
                <li><a class="text-muted" href="{{ url('https://www.jetbrains.com/') }}">JetBrains</a></li>
                <li><a class="text-muted" href="{{ url('https://www.keycdn.com/') }}">KeyCDN</a></li>
                <li><a class="text-muted" href="{{ url('https://www.navicat.com/') }}">Navicat</a></li>
            </ul>
        </div>
    </div>
</footer>

@include('components.analytics.tracking')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
