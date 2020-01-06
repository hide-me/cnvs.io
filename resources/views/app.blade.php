<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@lang('app.meta.description')">

    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:type" content="website">
    <meta property="og:description" content="@lang('app.meta.description')">
    <meta property="og:title" content="{{ sprintf('%s ― %s', config('app.name'), trans('app.meta.title') ) }}">
    <meta property="og:image" content="{{ asset('img/opengraph.png') }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ sprintf('%s — %s', config('app.name'), trans('app.meta.title') ) }}">
    <meta name="twitter:image" content="{{ asset('img/opengraph.png') }}">
    <meta name="twitter:site" content="@cnvs_io">
    <meta name="twitter:description" content="@lang('app.meta.description')">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ sprintf('%s — %s', config('app.name'), trans('app.meta.title') ) }}</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Karla|Merriweather:400,700">

    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">

    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}">
</head>
<body>
<div class="mb-4 mt-3">
    <div class="px-0">
        <div class="col-xl-8 offset-xl-2 col-md-12 px-0">
            <nav class="navbar navbar-light justify-content-between flex-nowrap flex-row">
                <a class="navbar-brand py-0 font-serif" href="/" aria-label="{{ sprintf('%s %s', config('app.name'), 'homepage' ) }}">
                    <svg data-name="Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 110.981" width="32">
                        <path class="secondary" d="M4.808 100.34c4.66-3.767 11.309-2.044 16.167.307 2.856 1.382 5.563 3.046 8.399 4.468a61.637 61.637 0 008.568 3.538c11.478 3.727 23.997 3.29 34.205-3.595a51.44 51.44 0 0013.321-13.613c1.1-1.592-1.498-3.094-2.59-1.515-6.486 9.38-15.876 17.099-27.622 18.026a43.71 43.71 0 01-18.16-2.759c-5.845-2.102-10.93-5.643-16.62-8.052-5.764-2.44-12.641-3.087-17.79 1.073-1.501 1.213.633 3.324 2.122 2.121zM21.8 66.342L5.422 74.049a.768.768 0 00-.417.503A44.368 44.368 0 01.025 93.85a.768.768 0 00.933.936 42.063 42.063 0 0119.623-4.983.768.768 0 00.511-.43l7.384-16.371a.768.768 0 00-.157-.86l-5.649-5.648a.768.768 0 00-.87-.151z"/>
                        <path class="secondary" d="M96 13.467a13.424 13.424 0 01-4.76 10.271L40.434 67.334l-5.855 4.97a5.744 5.744 0 01-7.77-.324l-4.282-4.28a5.741 5.741 0 01-.282-7.813l6.282-7.24L72.363 4.643A13.466 13.466 0 0196 13.467z"/>
                        <path class="primary" d="M41.388 66.38l-6.808 5.923a5.744 5.744 0 01-7.77-.323l-4.283-4.28a5.741 5.741 0 01-.282-7.813l6.282-7.24z"/>
                    </svg>
                </a>

                <a href="{{ sprintf('https://github.com/cnvs/canvas/releases/tag/%s', $latest_release) }}" class="ml-auto" target="_blank" rel="noopener" aria-label="Latest release">
                    {{ $latest_release }}
                </a>

                <a href="https://github.com/cnvs/canvas" class="mx-3" target="_blank" rel="noopener" aria-label="View on GitHub">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 24 24" class="primary"><path d="M0 12.305c0 5.435 3.438 10.047 8.207 11.674.6.113.82-.267.82-.593 0-.292-.011-1.066-.017-2.093-3.339.744-4.043-1.65-4.043-1.65-.545-1.42-1.332-1.798-1.332-1.798-1.09-.764.083-.749.083-.749 1.203.087 1.837 1.268 1.837 1.268 1.071 1.88 2.809 1.338 3.493 1.022.109-.795.42-1.337.762-1.645-2.665-.31-5.466-1.365-5.466-6.08 0-1.343.467-2.442 1.235-3.302-.123-.311-.535-1.562.117-3.256 0 0 1.008-.33 3.3 1.261a11.241 11.241 0 013.005-.414c1.019.005 2.046.141 3.004.414 2.29-1.592 3.297-1.261 3.297-1.261.654 1.694.242 2.945.119 3.256.77.86 1.234 1.959 1.234 3.302 0 4.726-2.806 5.767-5.48 6.071.431.38.815 1.13.815 2.279 0 1.645-.015 2.971-.015 3.375 0 .329.216.712.825.591 4.765-1.63 8.2-6.239 8.2-11.672C24 5.508 18.627 0 12 0S0 5.508 0 12.305z" fill-rule="evenodd"/></svg>
                </a>
                <div class="dropdown">
                    <a class="dropdown-toggle text-decoration-none" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" viewBox="0 0 24 24" class="primary"><path d="M10.41 10l1.3 1.3a1 1 0 0 1-1.42 1.4L9 11.42l-3.3 3.3a1 1 0 1 1-1.4-1.42L7.58 10l-1.3-1.3a1 1 0 0 1 1.42-1.4L9 8.58l.54-.54A5 5 0 0 0 10.98 5H3a1 1 0 1 1 0-2h5V2a1 1 0 1 1 2 0v1h5a1 1 0 0 1 0 2h-2.02a7 7 0 0 1-2.03 4.46l-.54.54z"/><path d="M13.33 18l-1.4 3.38a1 1 0 0 1-1.85-.76l5-12a1 1 0 0 1 1.84 0l5 12a1 1 0 0 1-1.84.76L18.67 18h-5.34zm.84-2h3.66L16 11.6 14.17 16z"/></svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'ar']) }}">عربى</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'cn']) }}">中文</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'de']) }}">Deutsch</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'en']) }}">English</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'es']) }}">Español</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'fr']) }}">Français</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'hi']) }}">हिन्दी</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'pt-BR']) }}">Português</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'ru']) }}">Pусский</a>
                        <a class="dropdown-item" href="{{ route('app', ['locale' => 'tr']) }}">Türk</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<main class="py-4">
    <div class="col-xl-8 offset-xl-2 col-md-12">
        <div class="mb-5 text-md-left">
            <p class="text-muted text-uppercase mb-0 font-weight-bolder">@lang('app.header.subtext')</p>
            <h1 class="display-4 font-serif">@lang('app.header.title')</h1>
        </div>

        <p class="font-weight-lighter font-serif text-lg leading-relaxed">@lang('app.intro.section-one')</p>
        <p class="font-weight-lighter font-serif text-lg leading-relaxed">@lang('app.intro.section-two')</p>

        <div class="mt-4">
            <div id="slider" class="beer-slider shadow rounded border">
                <img src="{{ asset('img/light-mode.png') }}" alt="Light Mode" aria-hidden="true">
                <div class="beer-reveal">
                    <img src="{{ asset('img/dark-mode.png') }}" alt="Dark Mode" aria-hidden="true">
                </div>
            </div>
            <p class="text-secondary text-center pt-3">@lang('app.slider.caption')</p>
        </div>

        <div class="text-center">
            <div class="row justify-content-around py-5">
                <div class="col-md-4 text-left my-auto">
                    <p class="text-muted text-uppercase font-weight-bold">@lang('app.stats.subtext')</p>
                    <p>@lang('app.stats.caption')</p>
                </div>
                <div class="col-md-6 col-sm-8 my-auto">
                    <img src="{{ asset('img/stats.png') }}" class="img-fluid shadow p-3 rounded border" alt="Statistics">
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="row justify-content-around py-5">
                <div class="col-md-4 text-left my-auto">
                    <p class="text-muted text-uppercase font-weight-bold">@lang('app.editing.subtext')</p>
                    <p>@lang('app.editing.caption')</p>
                </div>
                <div class="col-md-6 my-auto order-md-first">
                    <img src="{{ asset('img/editor.png') }}" class="img-fluid w-100 shadow px-1 py-3 rounded border" alt="Editor">
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="row justify-content-around py-5">
                <div class="col-md-4 text-left my-auto">
                    <p class="text-muted text-uppercase font-weight-bold">@lang('app.unsplash.subtext')</p>
                    <p>@lang('app.unsplash.caption')</p>
                </div>
                <div class="col-md-6 my-auto">
                    <img src="{{ asset('img/featured-image.png') }}" class="img-fluid w-100 shadow p-3 rounded border" alt="Unsplash Integration">
                </div>
            </div>
        </div>

        <div class="text-center">
            <div class="row justify-content-around py-5">
                <div class="col-md-4 text-left my-auto">
                    <p class="text-muted text-uppercase font-weight-bold">@lang('app.social.subtext')</p>
                    <p>@lang('app.social.caption')</p>
                </div>
                <div class="col-md-6 my-auto order-md-first">
                    <img src="{{ asset('img/settings.png') }}" class="img-fluid w-100 shadow p-3 rounded border" alt="Social Data">
                </div>
            </div>
        </div>

        <div class="pt-5">
            <p class="text-muted text-center text-uppercase font-weight-bold">@lang('app.features.subtext')</p>
            <h2 class="font-weight-bold text-center font-serif pb-5">@lang('app.features.title')</h2>

            <div class="row justify-content-end">
                <div class="col-md-6">
                    <ul class="mb-0">
                        <li class="pb-3">@lang('app.features.autosaving-editor')</li>
                        <li class="pb-3">@lang('app.features.email-digest')</li>
                        <li class="pb-3">@lang('app.features.translations')</li>
                        <li class="pb-3">@lang('app.features.secure-routing')</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="mb-0">
                        <li class="pb-3">@lang('app.features.dark-mode')</li>
                        <li class="pb-3">@lang('app.features.artisan-command')</li>
                        <li class="pb-3">@lang('app.features.tags-topics')</li>
                        <li class="pb-3">@lang('app.features.content-scheduling')</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<div class="card bg-light rounded-0 w-100 border-0 my-5">
    <div class="text-center my-5">
        <a href="https://github.com/cnvs/canvas#installation" class="btn btn-secondary text-uppercase font-weight-bold" target="_blank" rel="noopener">
            @lang('app.cta.button')
        </a>
        <p class="mt-4 mb-0 text-secondary font-serif px-4">
            @lang('app.cta.subtext')
        </p>
    </div>
</div>

<div class="container text-center my-5">
    <p>@lang('app.footer.release')</p>
    <p>@lang('app.footer.sponsored-by')
        <a href="https://digitalocean.com/?refcode=41cb45b3c7db" target="_blank" class="font-weight-bold text-decoration-none">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="100" viewBox="0 0 603 103" xml:space="preserve"><style>.st0,.st1{fill:#0080ff}.st1{fill-rule:evenodd;clip-rule:evenodd}</style><g id="XMLID_2369_"><g id="XMLID_2638_"><g id="XMLID_2639_"><g id="XMLID_44_"><g id="XMLID_48_"><path id="XMLID_49_" class="st0" d="M52.1 102.1V82.5c20.8 0 36.8-20.6 28.9-42.4-3-8.1-9.4-14.6-17.5-17.5-21.8-7.9-42.4 8.1-42.4 28.9H1.5c0-33.1 32-58.9 66.7-48.1 15.2 4.7 27.2 16.8 31.9 31.9 10.8 34.8-14.9 66.8-48 66.8z"/></g><path id="XMLID_47_" class="st1" d="M52.1 82.5H32.6V63h19.5z"/><path id="XMLID_46_" class="st1" d="M32.6 97.5h-15v-15h15v15z"/><path id="XMLID_45_" class="st1" d="M17.6 82.5H5V70h12.6z"/></g></g></g><g id="XMLID_2370_"><path id="XMLID_2635_" class="st0" d="M181.5 30.2c-5.8-4-13-6.1-21.4-6.1h-18.3v58.1h18.3c8.4 0 15.6-2.1 21.4-6.4 3.2-2.2 5.7-5.4 7.4-9.3 1.7-3.9 2.6-8.5 2.6-13.7 0-5.1-.9-9.7-2.6-13.6-1.7-3.8-4.2-6.9-7.4-9zm-29 3.8h5.8c6.4 0 11.7 1.3 15.7 3.7 4.4 2.7 6.7 7.8 6.7 15.1 0 7.6-2.3 12.9-6.7 15.8-3.8 2.5-9.1 3.8-15.6 3.8h-5.8V34z"/><path id="XMLID_2634_" class="st0" d="M204.3 23.4c-1.8 0-3.3.6-4.5 1.8-1.2 1.2-1.9 2.7-1.9 4.4 0 1.8.6 3.3 1.9 4.5 1.2 1.2 2.7 1.9 4.5 1.9 1.8 0 3.3-.6 4.5-1.9 1.2-1.2 1.9-2.8 1.9-4.5 0-1.8-.6-3.3-1.9-4.4-1.2-1.2-2.8-1.8-4.5-1.8z"/><path id="XMLID_2564_" class="st0" d="M199 41.3h10.3v41H199z"/><path id="XMLID_2561_" class="st0" d="M246.8 44.7c-3.1-2.8-6.6-4.4-10.3-4.4-5.7 0-10.4 2-14.1 5.8-3.7 3.8-5.5 8.8-5.5 14.7 0 5.8 1.8 10.7 5.5 14.7 3.7 3.8 8.4 5.8 14.1 5.8 4 0 7.4-1.1 10.2-3.3v1c0 3.4-.9 6-2.7 7.9-1.8 1.8-4.3 2.7-7.4 2.7-4.8 0-7.7-1.9-11.4-6.8l-7 6.7.2.3c1.5 2.1 3.8 4.2 6.9 6.2 3.1 2 6.9 3 11.5 3 6.1 0 11.1-1.9 14.7-5.6 3.7-3.7 5.5-8.7 5.5-14.9V41.3h-10.1v3.4zm-2.7 24.2c-1.8 2-4.1 3-7.1 3s-5.3-1-7-3c-1.8-2-2.7-4.7-2.7-8s.9-6.1 2.7-8.1c1.8-2 4.1-3.1 7-3.1 3 0 5.3 1 7.1 3.1 1.8 2 2.7 4.8 2.7 8.1s-1 6-2.7 8z"/><path id="XMLID_2560_" class="st0" d="M265.7 41.3H276v41h-10.3z"/><path id="XMLID_2552_" class="st0" d="M271 23.4c-1.8 0-3.3.6-4.5 1.8-1.2 1.2-1.9 2.7-1.9 4.4 0 1.8.6 3.3 1.9 4.5 1.2 1.2 2.7 1.9 4.5 1.9 1.8 0 3.3-.6 4.5-1.9 1.2-1.2 1.9-2.8 1.9-4.5 0-1.8-.6-3.3-1.9-4.4-1.2-1.2-2.8-1.8-4.5-1.8z"/><path id="XMLID_2509_" class="st0" d="M298.6 30.3h-10.1v11.1h-5.9v9.4h5.9v17c0 5.3 1.1 9.1 3.2 11.3 2.1 2.2 5.8 3.3 11.1 3.3 1.7 0 3.4-.1 5-.2h.5v-9.4l-3.5.2c-2.5 0-4.1-.4-4.9-1.3-.8-.9-1.2-2.7-1.2-5.4V50.7h9.6v-9.4h-9.6v-11z"/><path id="XMLID_2508_" class="st0" d="M356.5 24.1h10.3v58.1h-10.3z"/><path id="XMLID_2470_" class="st0" d="M470.9 67.6c-1.8 2.1-3.7 3.9-5.2 4.8-1.4.9-3.2 1.4-5.3 1.4-3 0-5.5-1.1-7.5-3.4s-3-5.2-3-8.7 1-6.4 2.9-8.6c2-2.3 4.4-3.4 7.4-3.4 3.3 0 6.8 2.1 9.8 5.6l6.8-6.5c-4.4-5.8-10.1-8.5-16.9-8.5-5.7 0-10.6 2.1-14.6 6.1-4 4-6 9.2-6 15.3s2 11.2 6 15.3c4 4.1 8.9 6.1 14.6 6.1 7.5 0 13.5-3.2 17.5-9.1l-6.5-6.4z"/><path id="XMLID_2460_" class="st0" d="M513.2 47c-1.5-2-3.5-3.7-5.9-4.9-2.5-1.2-5.3-1.8-8.5-1.8-5.8 0-10.5 2.1-14 6.3-3.4 4.2-5.2 9.3-5.2 15.4 0 6.2 1.9 11.3 5.7 15.3 3.7 3.9 8.8 5.9 14.9 5.9 6.9 0 12.7-2.8 16.9-8.4l.2-.3-6.7-6.5c-.6.8-1.5 1.6-2.3 2.4-1 1-2 1.7-3 2.2-1.5.8-3.3 1.1-5.2 1.1-2.9 0-5.2-.8-7-2.5-1.7-1.5-2.7-3.6-2.9-6.2h27.3l.1-3.8c0-2.7-.4-5.2-1.1-7.6-.7-2.3-1.8-4.5-3.3-6.6zm-22.5 9.7c.5-2 1.4-3.6 2.7-4.9 1.4-1.4 3.2-2.1 5.4-2.1 2.5 0 4.4.7 5.7 2.1 1.2 1.3 1.9 2.9 2.1 4.8h-15.9z"/><path id="XMLID_2456_" class="st0" d="M552.8 44.4c-3.1-2.7-7.4-4-12.8-4-3.4 0-6.6.8-9.5 2.2-2.7 1.4-5.3 3.6-7 6.6l.1.1 6.6 6.3c2.7-4.3 5.7-5.8 9.7-5.8 2.2 0 3.9.6 5.3 1.7s2 2.6 2 4.4v2c-2.6-.8-5.1-1.2-7.6-1.2-5.1 0-9.3 1.2-12.4 3.6-3.1 2.4-4.7 5.9-4.7 10.2 0 3.8 1.3 7 4 9.3 2.7 2.2 6 3.4 9.9 3.4 3.9 0 7.6-1.6 10.9-4.3v3.4h10.1V55.9c.2-4.9-1.4-8.8-4.6-11.5zm-18.3 22.2c1.2-.8 2.8-1.2 4.9-1.2 2.5 0 5.1.5 7.8 1.5v4C545 73 542 74 538.3 74c-1.8 0-3.2-.4-4.1-1.2-.9-.8-1.4-1.7-1.4-3s.6-2.4 1.7-3.2z"/><path id="XMLID_2454_" class="st0" d="M597.2 45.2c-2.9-3.2-6.9-4.8-12-4.8-4.1 0-7.4 1.2-9.9 3.5v-2.5h-10.1v41h10.3V59.7c0-3.1.7-5.6 2.2-7.3 1.5-1.8 3.4-2.6 6.1-2.6 2.3 0 4.1.8 5.4 2.3 1.3 1.6 2 3.7 2 6.4v23.7h10.3V58.5c0-5.6-1.4-10.1-4.3-13.3z"/><path id="XMLID_2450_" class="st0" d="M343.6 44.4c-3.1-2.7-7.4-4-12.8-4-3.4 0-6.6.8-9.5 2.2-2.7 1.4-5.3 3.6-7 6.6l.1.1 6.6 6.3c2.7-4.3 5.7-5.8 9.7-5.8 2.2 0 3.9.6 5.3 1.7s2 2.6 2 4.4v2c-2.6-.8-5.1-1.2-7.6-1.2-5.1 0-9.3 1.2-12.4 3.6-3.1 2.4-4.7 5.9-4.7 10.2 0 3.8 1.3 7 4 9.3 2.7 2.2 6 3.4 9.9 3.4 3.9 0 7.6-1.6 10.9-4.3v3.4h10.1V55.9c.1-4.9-1.5-8.8-4.6-11.5zm-18.3 22.2c1.2-.8 2.8-1.2 4.9-1.2 2.5 0 5.1.5 7.8 1.5v4c-2.2 2.1-5.2 3.1-8.9 3.1-1.8 0-3.2-.4-4.1-1.2-.9-.8-1.4-1.7-1.4-3s.5-2.4 1.7-3.2z"/><path id="XMLID_2371_" class="st0" d="M404.2 83.1c-16.5 0-30-13.4-30-30s13.4-30 30-30c16.5 0 30 13.4 30 30s-13.5 30-30 30zm0-49.3c-10.7 0-19.4 8.7-19.4 19.4s8.7 19.4 19.4 19.4 19.4-8.7 19.4-19.4-8.7-19.4-19.4-19.4z"/></g></g></svg>
        </a>
    </p>
</div>

<script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-80244014-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'UA-80244014-1');
</script>
</body>
</html>
