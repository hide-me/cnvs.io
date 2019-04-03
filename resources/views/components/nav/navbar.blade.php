<div class="mb-4 mt-2">
    <div class="container d-flex justify-content-center px-0">
        <div class="col-md-10 px-0">
            <nav class="navbar navbar-light justify-content-between flex-nowrap flex-row">
                <!-- Left Side Of Navbar -->
                <a class="navbar-brand font-weight-bold py-0" href="{{ route('home') }}">
                    <i class="fas fa-align-left" style="color: rgba(0,0,0,0.8)"></i>
                </a>

                <!-- Right Side Of Navbar -->
                <a href="{{ url(sprintf('https://github.com/cnvs/canvas/releases/tag/%s', $data['release'])) }}"
                   class="text-muted ml-auto mr-3">{{ $data['release'] }}</a>
                <a href="{{ url('https://github.com/cnvs/canvas') }}">
                    <i class="fab fa-fw fa-github fa-2x text-muted"></i>
                </a>
            </nav>
        </div>
    </div>
</div>
