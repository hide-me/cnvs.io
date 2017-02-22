<!DOCTYPE html>
<html lang="en">
    <head>
        @include('site.partials.meta')
        @include('site.partials.css')
    </head>
    <body id="top">
        @include('site.partials.analytics')
        @yield('content')
        @include('site.partials.js')
    </body>
</html>
