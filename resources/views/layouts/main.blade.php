<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} | Angcode</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/rbgicon.ico') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark py-4 fixed-top">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <img id="logo" src="{{ asset('img/rbglogo.png') }}" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse position-absolute start-50 translate-middle mt-5"
                    id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" style="">
                            <a class="nav-link"
                                style="{{ $active === 'home' ? 'border-top: 3px solid #00abf0' : 'border-radius: 8px' }}"
                                href="/#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/videos"
                                style="{{ $active === 'allvideos' ? 'border-top: 3px solid #00abf0' : 'border-radius: 8px' }}">All
                                Videos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/categories"
                                style="{{ $active === 'category' ? 'border-top: 3px solid #00abf0' : 'border-radius: 8px' }}">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/#learnsec" style="border-radius: 8px">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/help"
                                style="{{ $active === 'help' ? 'border-top: 3px solid #00abf0' : 'border-radius: 8px' }}">Help</a>
                        </li>
                    </ul>
                </div>
                @auth
                    <div class="mt-2">
                        <div id="userbtn" class="btn-box" style="height: 50px">
                            <a href="/user" style="padding: 5px; font-weight:500; color:aliceblue; width:100px;{{ $active === 'user' ? 'background-color:#00abf0' : '' }}" class="pe-2"><i
                                    class='bx bx-user' style="font-size: 28px"></i></a>
                        </div>
                    </div>
                @else
                    <div class="mt-2">
                        <div id="loginbtn" class="btn-box">
                            <a href="/login" style="padding: 5px; font-weight:500; color:aliceblue" class="pe-2"><i
                                    class='bx bx-log-in me-1'></i> Login</a>
                        </div>
                    </div>
                @endauth
            </div>
        </nav>
    </header>

    @yield('container')

    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 pt-4" style="height: 300px">
        <div class="col ms-5">
            <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
                <img src="{{ asset('img/rbglogo.png') }} " style="width: 300px" />
            </a>
            <p style="margin-left: 25px; text-align: justify">
                Angcode is a platform to help to learn about web development. Video
                based learning to help people learn about web development more easier.
            </p>
            <p class="text" style="margin-left: 25px">© 2023 by Kelompok 7</p>
        </div>
        <div class="col my-4"style='margin-left:200px'>
            <h5>Menu</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="/" class="nav-link p-0">Home</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="/categories" class="nav-link p-0">Category</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="/#learnsec" class="nav-link p-0">About</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="/help" class="nav-link p-0">Help</a>
                </li>
            </ul>
        </div>
        <div class="col my-4">
            <h5>Categories</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a href="/categories/html" class="nav-link p-0">HTML</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="/categories/css" class="nav-link p-0">CSS</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="/categories/javascript" class="nav-link p-0">JavaScript</a>
                </li>
            </ul>
        </div>
        <div class="col my-4">
            <h5>For More</h5>
            <ul class="nav flex-column">
                <li class="nav-item my-3">
                    <a href="https://wa.me/628551468508" class="nav-link p-0">
                        <img src="{{ asset('img/telp-removebg-preview.png') }}"
                            style="width: 30px; margin-right: 8px" />021-5777-111</a>
                </li>
                <li class="nav-item mb-2">
                    <a href="mailto:2210501025@mahasiswa.upnvj.ac.id" class="nav-link p-0"><img
                            src="{{ asset('img/email2-removebg-preview.png') }}"
                            style="width: 30px; margin-right: 8px" />Angcode.mail.com</a>
                </li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
