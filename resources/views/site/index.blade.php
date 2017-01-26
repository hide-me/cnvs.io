@extends('layout')

@section('content')
    @include('site.partials.navbar')

    <div class="wrapper">

        @include('site.partials.header')

        <div class="main main-raised">

            <section class="presentation-wrapper">
                @include('site.partials.presentation')
            </section>

            <section class="video-presentaion filter dark-7 parallax-bg bg-fixed" data-stellar-background-ratio="0.5">
                @include('site.partials.presentation-video')
            </section>

            <section class="section-padding">
                @include('site.partials.unique')
                <hr>
            </section>

            <section class="feature-presentation padding-bottom-100">
                @include('site.partials.feature-presentation')
            </section>

            <section class="extra-fearures-wrapper primary-bg">
                @include('site.partials.extra-features')

                <div class="mocup-wrappper">
                    <div class="mocup-holder">
                        <img class="img-responsive third wow fadeInUp" data-wow-delay=".6s" src="assets/img/vert-screen3.png" alt="">
                        <img class="img-responsive second wow fadeInUp" data-wow-delay=".3s" src="assets/img/vert-screen2.png" alt="">
                        <img class="img-responsive first wow fadeInUp" src="assets/img/vert-screen1.png" alt="">
                    </div>
                </div>
            </section>

            <section class="best-solution-wrapper">
                @include('site.partials.best-solution')
            </section>

            <section class="section-padding light-grey-bg">
                <div class="container">
                    <div class="row margin-bottom-80 text-center">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="title">Screenshots</h2>
                            <div class="section-divider"></div>
                            <p class="description">Nappy app landing page is a perfect template for showcase your app or services in a smart way. Nappy built with Bootstrap which is perfect to promoting apps or web services.</p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="swiper-container tt-screenshot-wrap">
                                @include('site.partials.screenshot-carousel')
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section-padding primary-bg">
                @include('site.partials.testimonials')
            </section>

            <section class="facts-wrapper light-grey-bg">
                @include('site.partials.facts')
            </section>

            <div class="download-wrapper filter dark-5 bg-fixed">
                @include('site.partials.download')
            </div>

            <section class="section-padding">
                @include('site.partials.featured')
            </section>
        </div>

        <footer class="footer">
            @include('site.partials.footer')
        </footer>

        @include('site.partials.back-to-top')

    </div>

    @include('site.partials.preloader')

@endsection