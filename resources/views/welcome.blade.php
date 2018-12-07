@extends('layouts.app')

@section('title', config('app.name'))

@section('content')
    <main class="py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 mb-4">
                    <h1 class="display-4 welcome font-weight-bold">Welcome to <span>C</span>anvas.</h1>
                    <p class="lead">A Laravel publishing platform.</p>
                </div>

                <div class="col-md-10 mt-4 content-body serif">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore dolorum explicabo incidunt
                        iusto necessitatibus pariatur perferendis provident sequi vel!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem, commodi error hic
                        illum quibusdam ratione sequi. Aperiam eaque est ex, hic, neque nobis, odio odit quidem ratione
                        repellendus sit?
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci amet at cum
                        cupiditate deleniti dicta earum eius eos nam natus nostrum provident rem, sed sequi tempora
                        temporibus totam veniam!
                    </p>
                </div>

                <div class="col-md-10 mt-4 text-center">
                    <h1 class="font-weight-bold serif my-5">From the Community</h1>
                    <div class="card-deck mt-5">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/ericbarnes.jpeg') }}" class="rounded-circle mb-3"
                                     style="width: 86px;" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Eric Barnes</h5>
                                <p class="card-text text-left"><i
                                            class="fa fa-fw fa-quote-left fa-2x text-secondary"></i> For my first look
                                    at Canvas, I’m really impressed with the appearance of the admin. The installation
                                    is really straightforward, especially if you are comfortable with Laravel. If you
                                    are looking to start a blog this year, Canvas would be a good choice.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/nickbasile.jpeg') }}" class="rounded-circle mb-3"
                                     style="width: 86px;" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Nick Basile</h5>
                                <p class="card-text text-left"><i
                                            class="fa fa-fw fa-quote-left fa-2x text-secondary"></i> Canvas rocks! I’ve
                                    tried building blogs from scratch and with other plug and play CMS’s, but nothing
                                    comes close to Canvas. I now use Canvas
                                    exclusively for my blog development and I’ve never been happier.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('images/brunoskvorc.jpeg') }}" class="rounded-circle mb-3"
                                     style="width: 86px;" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Bruno
                                    Škvorc</h5>
                                <p class="card-text text-left"><i
                                            class="fa fa-fw fa-quote-left fa-2x text-secondary"></i> If you’re looking
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
               class="btn btn-secondary text-uppercase font-weight-bold">Get started</a>
            <p class="mt-4 mb-0 text-muted serif">Easily install into an existing Laravel app or a brand new project.</p>
        </div>
    </div>

    <div class="container text-center mt-4 mb-5">
        Released under the <a href="{{ url('https://github.com/cnvs/canvas/blob/master/license') }}">MIT</a> license. <a
                href="{{ url('https://github.com/cnvs/canvas') }}">View source</a>.
    </div>
@endsection