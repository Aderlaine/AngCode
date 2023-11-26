@extends('layouts.main')
@section('container')
    <style>
        #button-addon2 {
            border-color: #00abf0;
            color: #00abf0;
            font-weight: 600;
        }

        #button-addon2:hover {
            background-color: #00abf0;
            color: #fff
        }

        .level {
            font-size: 20px;
            color: white;
            text-decoration: none;
            border: 2px solid #00abf0;
            width: 15em;
            margin: auto;
            border-radius: 15px;
            box-shadow: 0 0 10px #00abf0;
            transition: 0.2s;
        }

        .level:hover {
            color: #00abf0;
        }
    </style>
    <main style="background-color: #081b29; margin-top:140px !important; margin-bottom:100px !important;" class="mt-5">
        <div style="margin-top: -34px" id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="opacity: 0.6" src="{{ asset('/img/allslide1.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="color: #00abf0">Explore a World of Knowledge</h3>
                        <p>Discover a diverse collection of coding tutorials, from HTML to JavaScript.
                            <br>Start your coding journey with our comprehensive video library.
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="opacity: 0.6" src="{{ asset('/img/allslide2.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="color: #00abf0">Your Journey Starts Here</h5>
                            <p>Your coding journey begins with our comprehensive video library. <br> Start from the basics
                                and work your way up to advanced topics.
                            </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img style="opacity: 0.6" src="{{ asset('/img/allslide3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3 style="color: #00abf0">Empower Your Skills</h3>
                        <p>Empower your skills with structured video courses. Enhance your coding <br> expertise and excel
                            in the world of web development.
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="col-10" style="background-color:#081b29; margin-left:8%">
            <form action="/videos">
                @if (request('level'))
                    <input type="hidden" name="level" value="{{ request('level') }}">
                @endif
                <div class="input-group mt-4 offset-3" style="width:50%">
                    <input type="text" class="form-control" placeholder="Search Video" name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-outline-primary" type="submit" id="button-addon2"><i
                            class='bx bx-search-alt-2 me-1'></i>Search</button>
                </div>
            </form>
            <div class="row my-5">
                <a class="level col-4" href="/videos?level=basic"
                    style="{{ request('level') === 'basic' ? 'color: #00abf0;' : '' }}">
                    <div class="text-center my-3">Basic</div>
                </a>
                <a class="level col-4" href="/videos?level=beginner"
                    style="{{ request('level') === 'beginner' ? 'color: #00abf0;' : '' }}">
                    <div class="text-center my-3">Beginner</div>
                </a>
                <a class="level col-4" href="/videos?level=intermediate"
                    style="{{ request('level') === 'intermediate' ? 'color: #00abf0;' : '' }}">
                    <div class="text-center my-3">Intermediate</div>
                </a>
            </div>
            @if (request('level') === 'basic')
                <h1 style="color: white;font-weight:600" class="mt-3">HTML And CSS Videos</h1>
            @elseif (request('level') === 'beginner')
                <h1 style="color: white;font-weight:600" class="mt-3">JavaScript Videos</h1>
            @elseif (request('level') === 'intermediate')
                <h1 style="color: white;font-weight:600" class="mt-3">Project Base Videos</h1>
            @else
                <h1 style="color: white;font-weight:600" class="mt-3">All Videos</h1>
            @endif
            <div class="card border-info my-4 p-4" style="background: transparent; justify-content:center;  ">
                <div class="card-body">
                    @if ($videos->isEmpty())
                        <h1 class="text-center p-5 text-light">No Videos Available</h1>
                    @else
                        @foreach ($videos as $key => $video)
                            <a href="/videos/{{ $video->id }}" class="vid-link">
                                <div class="mb-4 m row">
                                    <div class="row">
                                        <img class="col-6" src="{{ $thumbnails[$key] }}"
                                            style="width: 30%;border-radius:8%">
                                        <div class="col-6 mt-4">
                                            <h4 class="text-decoration-none">{{ $video->title }}</h4>
                                            <h6 class="text-decoration-none mb-5" style="color: gray">{{ $video->maker }}
                                            </h6>
                                            <p class="text-decoration-none mt-5" style="color: gray">
                                                {{ Str::limit($video->created_at, $limit = 10, ' ') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <hr style="color:aqua; height:2px">
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="row mt-3">
                <div class="col d-flex align-items-center justify-content-center">
                    {{ $videos->appends(['level' => request('level')])->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </main>
@endsection
