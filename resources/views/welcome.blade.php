@extends('layouts.app')

@section('title', sprintf('%s — %s', config('app.name'), 'A Laravel publishing platform' ))

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-md-left">
                    <p class="text-muted text-uppercase mb-0 font-weight-bold">A Laravel publishing platform</p>
                    <h1 class="welcome">Welcome to Canvas.</h1>
                </div>

                <div class="col-md-10">
                    <p class="content-body font-weight-lighter serif">
                        <span class="font-weight-bold">Sometimes creating a blog</span> is easier said than done. With
                        <span class="font-italic">Canvas</span>, it's just easier. Simple installation, the freedom to make it look how you want, and a familiar editing environment keeps you focused on what
                        <span class="font-italic">Canvas</span> is really good at: Publishing.
                    </p>
                    <p class="content-body font-weight-lighter serif">
                        Want to find out how big of an impact you're actually making?
                        <span class="font-italic">Canvas</span> helps you visualize monthly trends, see where your
                        readers are coming from and even what time of day they prefer to read your content. Think of it
                        as a lightweight version of Google Analytics, straight out of the box.
                    </p>
                </div>

                <div class="col-md-10 mt-4">
                    <div id="slider" class="beer-slider shadow rounded-lg">
                        <img src="{{ asset('img/C4Tdtco4KGRrV4UHKdKwo8BYRQ8Gc6rjOFqFdL5V.png') }}" alt="Light Mode">
                        <div class="beer-reveal">
                            <img src="{{ asset('img/Z3Sa2JdsXO8pFXPXHJAPzSZnYTF8uuAzFuuvXTyg.png') }}" alt="Dark Mode">
                        </div>
                    </div>
                    <p class="text-muted text-center pt-3">
                        Web native: Fully mobile and desktop ready on any device
                    </p>
                </div>

                <div class="col-lg-10 text-center">
                    <div class="row justify-content-around py-5">
                        <div class="col-lg-4 text-left my-auto">
                            <p class="text-muted text-uppercase font-weight-bold">Publication statistics</p>
                            <p class="spacing-normal">Measure the impact of your posts with realtime data. Not everyone
                                                      needs the headache of setting up Google Analytics, so we built-in just the best parts,
                                                      and added a couple new ones.</p>
                        </div>
                        <div class="col-lg-6 my-auto">
                            <img loading="lazy" src="{{ asset('img/rVcZaX5KTmLiDxX6vcK5cgvSVbwtprUxEB1PMfOi.png') }}"
                                 class="img-fluid shadow p-3 rounded-lg" alt="Statistics">
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 text-center">
                    <div class="row justify-content-around py-5">
                        <div class="col-lg-4 text-left my-auto">
                            <p class="text-muted text-uppercase font-weight-bold">A new editing experience</p>
                            <p class="spacing-normal">Enjoy a distraction-free writing experience in this
                                                      Medium-inspired editor. More than just a formatting toolbar, you'll find out it has some
                                                      tricks up its sleeve.</p>
                        </div>
                        <div class="col-lg-6 my-auto order-lg-first">
                            <img loading="lazy" src="{{ asset('img/5778T1Ba1mD1sxPDBkyuRqKEjhBPVVY375tgxV3R.png') }}"
                                 class="img-fluid w-100 shadow px-1 py-3 rounded-lg" alt="Editor">
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 text-center">
                    <div class="row justify-content-around py-5">
                        <div class="col-lg-4 text-left my-auto">
                            <p class="text-muted text-uppercase font-weight-bold">Unsplash integration</p>
                            <p class="spacing-normal">
                                Enjoy high-quality photography in your posts from the world's most generous community
                                of photographers. Add images, videos, links, or whatever media you'd like to your
                                content. The sky is the limit here.
                            </p>
                        </div>
                        <div class="col-lg-6 my-auto">
                            <img loading="lazy" src="{{ asset('img/J8N7RpXEbNAI4vXMx7GAvEPDfzMTtuUiStsjXUAV.png') }}"
                                 class="img-fluid w-100 shadow p-3 rounded-lg" alt="Unsplash Integration">
                        </div>
                    </div>
                </div>

                <div class="col-lg-10 text-center">
                    <div class="row justify-content-around py-5">
                        <div class="col-lg-4 text-left my-auto">
                            <p class="text-muted text-uppercase font-weight-bold">
                                Custom social data
                            </p>
                            <p class="spacing-normal">
                                Ensure your content is optimized with fully customizable meta data for Facebook and
                                Twitter sharing cards, as well as tag categories to group your posts by.
                            </p>
                        </div>
                        <div class="col-lg-6 my-auto order-lg-first">
                            <img loading="lazy" src="{{ asset('img/G2TGXLNurlCULphxC0YvLvTV4BsrKiokVOC7aFsI.png') }}"
                                 class="img-fluid w-100 shadow p-3 rounded-lg" alt="Social Data">
                        </div>
                    </div>
                </div>

                <div class="col-xl-10 pt-5">
                    <p class="text-muted text-center text-uppercase font-weight-bold">Features</p>
                    <h2 class="font-weight-bold text-center serif pb-5">All the right tools</h2>

                    <div class="row justify-content-end">
                        <div class="col-md-6">
                            <ul class="mb-0">
                                <li class="spacing-normal pb-3">
                                    <span class="font-weight-bolder">A writing summary</span> e-mail delivered weekly that provides quick stats on trending content <span class="badge badge-primary small">NEW</span>
                                </li>
                                <li class="spacing-normal pb-3">
                                    <span class="font-weight-bolder">Localized translations</span> that support over 7 different languages
                                </li>
                                <li class="spacing-normal pb-3">
                                    <span class="font-weight-bolder">Customizable and secure</span> routing options that keep your data safe in a production environment
                                </li>
                                <li class="spacing-normal pb-3">
                                    <span class="font-weight-bolder">Light and dark</span> modes that offer unique color palettes, making publishing content easy on the eyes
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="mb-0">
                                <li class="spacing-normal pb-3">
                                    <span class="font-weight-bolder">An Artisan command</span> that scaffolds a beautifully designed blog template in seconds
                                </li>
                                <li class="spacing-normal pb-3">
                                    <span class="font-weight-bolder">A simple organization</span> system of tags and topics helps you quickly find and maintain content
                                </li>
                                <li class="spacing-normal pb-3">
                                    <span class="font-weight-bolder">Advanced content scheduling</span> that publishes your work exactly when you want it to
                                </li>
                                <li class="spacing-normal pb-3">
                                    <span class="font-weight-bolder">Regular app updates</span> by a fantastic group of contributors to keep the project current
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="card bg-light rounded-0 w-100 border-0 my-5">
        <div class="text-center my-5">
            <a href="{{ url('https://github.com/cnvs/canvas#installation') }}"
               class="btn btn-secondary text-uppercase font-weight-bold text-decoration-none">Download</a>
            <p class="mt-4 mb-0 text-muted serif px-4 spacing-normal">
                Easily install into an existing Laravel app or a brand new project.
            </p>
        </div>
    </div>

    <div class="container text-center mt-4 mb-5">
        <p class="spacing-normal">Released under the
            <a href="{{ url('https://opensource.org/licenses/MIT') }}" class="font-weight-bold text-decoration-none">MIT</a> license.
            <a href="{{ url('https://github.com/cnvs/canvas') }}" class="font-weight-bold text-decoration-none">View source</a>.
        </p>
        <p class="spacing-normal">
            Proudly hosted and sponsored by<a href="{{ url('https://digitalocean.com/?refcode=41cb45b3c7db') }}" class="font-weight-bold text-decoration-none"> <i class="fab fa-fw fa-digital-ocean"></i>DigitalOcean</a>
        </p>
    </div>
@endsection
