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
                        iusto necessitatibus pariatur perferendis provident sequi vel! Aspernatur dignissimos dolor ea,
                        eius exercitationem illum ipsam necessitatibus placeat sequi.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur autem, commodi error hic
                        illum quibusdam ratione sequi. Aperiam eaque est ex, hic, neque nobis, odio odit quidem ratione
                        repellendus sit?
                    </p>
                </div>

                <div class="col-md-10 mt-5">
                    <img src="{{ asset('images/screenshot.png') }}" alt="" class="w-100 shadow">
                </div>

                <div class="col-md-10 my-5 text-center">
                    <h1 class="font-weight-bold serif my-5">From the Community</h1>
                    <div class="card-deck mt-5">
                        <div class="card">
                            <div class="card-body">
                                <i class="fa fa-fw fa-user-circle fa-6x mb-3"></i>
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
                                <i class="fa fa-fw fa-user-circle fa-6x mb-3"></i>
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
                                <i class="fa fa-fw fa-user-circle fa-6x mb-3"></i>
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
@endsection