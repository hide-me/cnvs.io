@extends('layouts.app')

@section('title', sprintf('%s — %s', config("app.name"), 'A Laravel publishing platform' ))

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-md-left">
                    <p class="text-muted text-uppercase mb-0 font-weight-bold">A Laravel publishing platform</p>
                    <h1 class="welcome font-weight-bold">Welcome to <span>C</span>anvas.</h1>
                </div>

                <div class="col-md-10">
                    <p class="content-body serif">
                        <span class="font-weight-bold">Some things are easier</span> said than done. With Canvas, <span
                                class="font-italic">it's just easier</span>. Take complete control of your own content
                        and how it's displayed on a hosting platform of your choice.
                    </p>
                    <p class="content-body serif">
                        Publishing your own content is one thing, but how much better would it be to see your impact?
                        Canvas provides beautiful graphs so you can visualize monthly trends. And that's just the
                        beginning. You can even get traffic insights on your readers and where they're coming from.
                    </p>
                </div>

                <div class="col-md-10 py-4">
                    <img src="{{ asset('img/placeholder.png') }}" class="shadow w-100"
                         style="-webkit-border-radius: 25px;-moz-border-radius: 25px;border-radius: 25px;"
                         alt="Screenshot of Canvas">
                </div>

                <div class="col-md-10 text-center pt-5">
                    <h2 class="font-weight-bold serif pb-4">From the Community</h2>
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('img/ericbarnes.jpeg') }}" class="rounded-circle mb-3"
                                     style="width: 86px;" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Eric Barnes</h5>
                                <p class="card-text text-left"><i
                                            class="fa fa-fw fa-quote-left fa-2x text-secondary" style="opacity: .2"></i>
                                    For my first look
                                    at Canvas, I’m really impressed with the appearance of the admin. The installation
                                    is really straightforward, especially if you are comfortable with Laravel. If you
                                    are looking to start a blog this year, Canvas would be a good choice.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('img/nickbasile.jpeg') }}" class="rounded-circle mb-3"
                                     style="width: 86px;" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Nick Basile</h5>
                                <p class="card-text text-left"><i
                                            class="fa fa-fw fa-quote-left fa-2x text-secondary" style="opacity: .2"></i>
                                    Canvas rocks! I’ve
                                    tried building blogs from scratch and with other plug and play CMS’s, but nothing
                                    comes close to Canvas. I now use Canvas
                                    exclusively for my blog development and I’ve never been happier.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('img/brunoskvorc.jpeg') }}" class="rounded-circle mb-3"
                                     style="width: 86px;" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Bruno
                                    Škvorc</h5>
                                <p class="card-text text-left"><i
                                            class="fa fa-fw fa-quote-left fa-2x text-secondary" style="opacity: .2"></i>
                                    If you’re looking
                                    for an easy-to-use, easy-to-set-up blog, give Canvas a go and submit extensions and
                                    pull requests to expand its already very vibrant community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="card bg-light rounded-0 w-100 border-0 mb-5 mt-4">
        <div class="text-center my-5">
            <a href="{{ url('https://github.com/cnvs/canvas/tree/master#installation') }}"
               class="btn btn-secondary text-uppercase font-weight-bold">Download</a>
            <p class="mt-4 mb-0 text-muted serif px-4">Easily install into an existing Laravel app or a brand new
                project.</p>
        </div>
    </div>

    <div class="container text-center mt-4 mb-5">
        <p>Released under the <a href="{{ url('https://github.com/cnvs/canvas/blob/master/license') }}"
                                 class="font-weight-bold">MIT</a> license. <a
                    href="{{ url('https://github.com/cnvs/canvas') }}" class="font-weight-bold">View source</a>.</p>
        <p>Proudly hosted by <a href="{{ url('https://digitalocean.com/?refcode=41cb45b3c7db') }}"
                                class="font-weight-bold">DigitalOcean</a>.</p>
    </div>
@endsection