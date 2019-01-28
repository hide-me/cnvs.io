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
                        <span class="font-weight-bold">Sometimes creating a blog</span> is easier said than done. With
                        <span class="font-italic">Canvas</span>, it's just easier. Simple installation, the freedom to
                        make it look how you want, and a familiar editing environment keeps you focused on
                        what <span class="font-italic">Canvas</span> is really good at: Publishing.
                    </p>
                    <p class="content-body serif">
                        Want to find out how big of an impact you're actually making?
                        <span class="font-italic">Canvas</span> lets you visualize monthly trends, see where your
                        readers are coming from and even what time of day they prefer to read your content. Think of it
                        as a lightweight version of Google Analytics, straight out of the box.
                    </p>
                </div>

                <div class="col-md-10 my-4 rounded">
                    <div class="container py-2 shadow"
                         style="border-top-right-radius: 8px; border-top-left-radius: 8px; background-color: rgb(38, 41, 43)">
                        <i class="fas fa-fw fa-circle text-muted"></i>
                        <i class="fas fa-fw fa-circle text-muted"></i>
                        <i class="fas fa-fw fa-circle text-muted"></i>
                    </div>
                    <img src="{{ asset('img/zDTOCfMeOf2pr1sHax9KqNzWsnF8KOa55CPPyppc.png') }}" class="w-100 shadow"
                         style="border-bottom-left-radius: 8px; border-bottom-right-radius: 8px;" alt="">
                    <p class="text-muted text-center pt-3">
                        <span class="font-weight-bold">Web native:</span> Fully mobile and desktop ready on any device
                    </p>
                </div>

                <div class="col-md-10 text-center pt-5">
                    <h2 class="font-weight-bold serif pb-4">From the Community</h2>
                    <div class="card-deck">
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('img/yO7YJ2iggWxwpk6PGkR7lgAJWECEI4JVAN3ys5MK.jpeg') }}"
                                     class="rounded-circle mb-3 shadow-sm"
                                     style="width: 86px;" title="@ericlbarnes" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Eric Barnes</h5>
                                <p class="card-text text-left"><i
                                            class="fas fa-fw fa-quote-left fa-2x text-secondary"
                                            style="opacity: .2"></i>
                                    For my first look
                                    at Canvas, I’m really impressed with the appearance of the admin. The installation
                                    is really straightforward, especially if you are comfortable with Laravel. If you
                                    are looking to start a blog this year, Canvas would be a good choice.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('img/un0I4Mn9bAsOJjO4bJEiMw5GChp8WIbshZOQtdkC.jpeg') }}"
                                     class="rounded-circle mb-3 shadow-sm"
                                     style="width: 86px;" title="@nickbasile" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Nick Basile</h5>
                                <p class="card-text text-left"><i
                                            class="fas fa-fw fa-quote-left fa-2x text-secondary"
                                            style="opacity: .2"></i>
                                    Canvas rocks! I’ve tried building blogs from scratch and with other plug and
                                    play CMS’s, but nothing comes close to Canvas. I now use Canvas exclusively for
                                    my blog development and I’ve never been happier.</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <img src="{{ asset('img/to51Tc1HAMjO7Se3xoXqaEcvzfM3TOkI9KW33Z0f.jpeg') }}"
                                     class="rounded-circle mb-3 shadow-sm"
                                     style="width: 86px;" title="@bitfalls" alt="">
                                <h5 class="card-title text-muted small text-uppercase font-weight-bold">Bruno
                                    Škvorc</h5>
                                <p class="card-text text-left"><i
                                            class="fas fa-fw fa-quote-left fa-2x text-secondary"
                                            style="opacity: .2"></i>
                                    If you’re looking for an easy-to-use, easy-to-set-up blog, give Canvas a go and
                                    submit extensions and pull requests to expand its already very vibrant
                                    community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="card bg-light rounded-0 w-100 border-0 mb-5 mt-4">
        <div class="text-center my-5">
            <a href="{{ url('https://github.com/cnvs/canvas#installation') }}"
               class="btn btn-secondary text-uppercase font-weight-bold">Download</a>
            <p class="mt-4 mb-0 text-muted serif px-4">Easily install into an existing Laravel app or a brand new
                project.</p>
        </div>
    </div>

    <div class="container text-center mt-4 mb-5">
        <p>Released under the <a href="{{ url('https://opensource.org/licenses/MIT') }}"
                                 class="font-weight-bold">MIT</a> license. <a
                    href="{{ url('https://github.com/cnvs/canvas') }}" class="font-weight-bold">View source</a>.</p>
        <p>Proudly hosted by <a href="{{ url('https://digitalocean.com/?refcode=41cb45b3c7db') }}"
                                class="font-weight-bold">DigitalOcean</a>.</p>
    </div>
@endsection