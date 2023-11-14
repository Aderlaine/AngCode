@extends('layouts.main')

@section('container')
    <main>
        <section class="home" id="home">
            <div class="home-content">
                @if (session()->has('loginSuccess'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {!!session('loginSuccess')!!}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
                <h1>Welcome to ANGCODE</h1>
                <h3>Platform to learn code website</h3>
                <p style="text-align: justify">
                    Welcome to ANGCODE, a revolutionary web programming learning
                    platform! We simplify the learning process by integrating YouTube
                    video tutorials from experienced content creators. Whether you're a
                    beginner or an expert, at ANGCODE, you'll find suitable guides for
                    your web programming level.
                </p>
                <div class="btn-box">
                    <a href="/videos">Start Now</a>
                </div>
            </div>
            <div class="">
                <img src="img/Learn-Coding-for-Free-removebg-preview.png" />
            </div>
        </section>
        <section id="learnsec" style="padding-top:130px; margin-bottom: 155px">
            <h1 class="judul mb-5 text-center">What We Learn</h1>
            <div class="container text-center mb-5">
                <div class="row align-items-start">
                    <div class="col" style="margin-top: 70px" id='category-html'>
                        <a href="/categories/html" class="text-decoration-none">
                            <div class="card" style="width: 25rem; height: 20rem">
                                <img src="img/html.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <p class="card-text">
                                        Structured step to learn HTML based videos from beginner,
                                        intermediete, and expert
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col" style="margin-top: 70px" id='category-css'>
                        <a href="/categories/css" class="text-decoration-none">
                            <div class="card" style="width: 25rem; height: 20rem">
                                <img src="img/css.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <p class="card-text">
                                        Structured step to learn CSS based videos from beginner,
                                        intermediete, and expert
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col" style="margin-top: 70px" id='category-js'>
                        <a href="/categories/javascript" class="text-decoration-none">
                            <div class="card" style="width: 25rem; height: 20rem">
                                <img src="img/js2.png" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <p class="card-text">
                                        Structured step to learn JavaScript based videos from
                                        beginner, intermediete, and expert
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="featuresec">
            <div>
                <h1 class="judul text-center" style="margin-bottom: 100px">
                    Our Key Features
                </h1>
                <div class="featuresitem">
                    <p class="textfeatures">
                        We integrated YouTube video tutorials into a structured curriculum
                        that covers web programming from beginner to advanced levels.
                    </p>
                </div>
                <div class="featuresitem">
                    <p class="textfeatures">
                        Enjoy learning from expert web programming content creators on
                        YouTube.
                    </p>
                </div>
                <div class="featuresitem">
                    <p class="textfeatures">
                        Learn at your own pace, without time constraints. Access videos
                        anytime, anywhere.
                    </p>
                </div>
                <div class="featuresitem">
                    <p class="textfeatures">
                        Enjoy free and unlimited access to a wide range of web programming
                        courses and video tutorials.
                    </p>
                </div>
            </div>
        </section>
        <section id="teamsec">
            <h1 class="judul text-center" style="margin-bottom: 50px">Our Teams</h1>
            <div class="foto-section">
                <div class="photo-row">
                    <div class="photo">
                        <img src="img/fath-removebg-preview.png" alt="Gambar 1" />
                        <p style="margin-top: 20px">Fathimah Azzahra Winarno</p>
                        <p>2210501002</p>
                    </div>
                    <div class="photo">
                        <img src="img/radif white bg.png" alt="Gambar 2" />
                        <p style="margin-top: 20px">Muhammad Amali Radifan</p>
                        <p>2210501014</p>
                    </div>
                    <div class="photo">
                        <img src="{{asset('img/fikri.png')}}" alt="Gambar 3" />
                        <p style="margin-top: 20px">Fikri Alridho</p>
                        <p>2210501017</p>
                    </div>
                    <div class="photo">
                        <img src="img/ader-removebg-preview.png" alt="Gambar 4" />
                        <p style="margin-top: 20px">Aderlaine Marietha Darsuma</p>
                        <p>2210501025</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
