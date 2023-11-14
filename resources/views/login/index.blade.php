<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/rbgicon.ico') }}" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login | Angcode</title>
</head>

<body>
    <div class="row justify-content-center">
        @if (session()->has('status'))
            <div class="alert alert-primary alert-dismissible fade show col-6" role="alert">
                {!! session('status') !!}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="wrapper">
            <span class="bg-animate"></span>
            <div class="form-box login">
                @if (session()->has('loginErr'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <span style="overflow-wrap: break-word">{{ session('loginErr') }}</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <h2><strong>Login</strong></h2>
                <form action="/login" method="POST">
                    @csrf
                    <div class="input-box">
                        <input type="text" name="username" value="{{old('username')}}" required>
                        <label>Username</label>
                        <i class='bx bxs-user'></i>
                        @error('username')
                            <i class='bx bx-error-circle text-danger element-to-hide'
                                style="margin-top: 35px; font-size: 12px"></i>
                            <p class="text-danger me-3 element-to-hide" style="font-size: 12px">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="input-box">
                        <input type="password" name="password" required>
                        <label>Password</label>
                        <i class='bx bxs-lock-alt'></i>
                        @error('password')
                            <i class='bx bx-error-circle text-danger element-to-hide'
                                style="margin-top: 35px; font-size: 12px"></i>
                            <p class="text-danger me-3 element-to-hide" style="font-size: 12px">{{ $message }}</p>
                        @enderror
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="logreg-link">
                        <p>Don't have an account? <a href="/register" class="register-link">Sign Up</a></p>
                        <p><a href="/" style="font-weight: 600;">Angcode</a> |
                            <a href="/policy" style="font-weight: 600;">Policy</a>
                        </p>
                    </div>
                </form>
            </div>
            <div class="info-text login">
                <h2><b>Welcome Back!</b></h2>
                <b>
                    <a class=" text-dark text-decoration-none" href="/">Angcode</a>
                </b>
                <span style="color: white;">
                    <b>Learn code</b> more easier with Angcode</span>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
