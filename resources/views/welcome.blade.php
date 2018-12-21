@extends('layouts.app')

@section('title', sprintf('%s — %s', config("app.name"), 'A Laravel publishing platform' ))

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-5 text-center text-md-left">
                    <h1 class="welcome font-weight-bold">Welcome to <span>C</span>anvas.</h1>
                    <p class="lead text-muted">A Laravel publishing platform.</p>
                </div>

                <div class="col-md-10">
                    <p class="content-body serif">
                       Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit. Assumenda commodi dicta dolor earum eveniet expedita fugit iste, maxime nulla
                        optio quam recusandae saepe, sed unde ut velit, vitae voluptatem voluptatibus.
                    </p>
                    <p class="content-body serif">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda commodi dicta dolor earum
                        eveniet expedita fugit iste, maxime nulla optio quam recusandae saepe, sed unde ut velit, vitae
                        voluptatem voluptatibus. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda
                        commodi dicta dolor earum eveniet expedita fugit iste.
                    </p>
                </div>

                <div class="col-md-10 text-center">
                    <h2 class="font-weight-bold serif my-5">From the Community</h2>
                    <div class="card-deck mt-5">
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
            <a href="{{ url('https://github.com/cnvs/canvas/tree/master#installation') }}" target="_blank"
               class="btn btn-secondary text-uppercase font-weight-bold">Download</a>
            <p class="mt-4 mb-0 text-muted serif px-4">Easily install into an existing Laravel app or a brand new
                project.</p>
        </div>
    </div>

    <div class="container text-center mt-4 mb-5">
        <p>
            Released under the <a href="{{ url('https://github.com/cnvs/canvas/blob/master/license') }}" class="font-weight-bold">MIT</a> license. <a
                href="{{ url('https://github.com/cnvs/canvas') }}" class="font-weight-bold">View source</a>.
        </p>
        <p>
            Proudly hosted by <a href="{{ url('https://digitalocean.com') }}" class="font-weight-bold" target="_blank">DigitalOcean</a>.
        </p>
    </div>
@endsection