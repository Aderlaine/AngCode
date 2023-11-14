<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/regist.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/rbgicon.ico') }}" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Register | Angcode</title>
</head>

<body>
    <div class="wrapper">
        <span class="bg-animate"></span>

        <div class="form-box login">
            <h2 style="margin-top: 30px"> <b>SIGN UP</b></h2>
            <form action="/register" method="POST">
                @csrf
                <div class="input-box">
                    <input class="click-trigger" type="text" name="username" value="{{old('username')}}" required>
                    <label>Username</label>
                    <i class='bx bxs-user'></i>
                    @error('username')
                        <i class='bx bx-error-circle text-danger element-to-hide'
                            style="margin-top: 35px; font-size: 13px"></i>
                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{$message}}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <input class="click-trigger" type="email" name="email" required>
                    <label>Email</label>
                    <i class='bx bxs-envelope'></i>
                    @error('email')
                        <i class='bx bx-error-circle text-danger element-to-hide'
                            style="margin-top: 35px; font-size: 13px"></i>
                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{$message}}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <input class="click-trigger" type="password" name="password" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt'></i>
                    @error('password')
                        <i class='bx bx-error-circle text-danger element-to-hide'
                            style="margin-top: 35px; font-size: 13px"></i>
                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{$message}}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <input class="click-trigger" type="password" name="passwordConfirmation" required>
                    <label>Confirm Password</label>
                    <i class='bx bx-target-lock'></i>
                    @error('passwordConfirmation')
                        <i class='bx bx-error-circle text-danger element-to-hide'
                            style="margin-top: 35px; font-size: 13px"></i>
                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{$message}}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <input class="click-trigger" type="date" name="birth" required>
                    @error('birth')
                        <i class='bx bx-error-circle text-danger element-to-hide'
                            style="margin-top: 35px; font-size: 13px"></i>
                        <p class="text-danger me-3 element-to-hide" style="font-size: 13px">{{$message}}</p>
                    @enderror
                </div>
                <div class="input-box">
                    <Label>Kategori Pendaftar</Label><br><br>
                    <select class="form-select form-select-sm" id="kategori" name="applicant_category">
                        <option value="other">Pilih Kategori Anda</option>
                        <option value="tutor">Tutor</option>
                        <option value="student">Student</option>
                        <option value="it-worker">IT Worker</option>
                        <option value="other">Other</option>
                    </select>
                </div><br>
                <input class="click-trigger" type="checkbox" name="content_creator" value="1">
                <label style="color: white;">Are You Content Creator On Youtube</label>
                <br><br>
                <button type="submit" class="btn">Register</button>
                <div class="logreg-link">
                    <p>Already have an account? <a href="/login" class="Login-link">Login</a></p>
                    <p><a href="/" style="font-weight: 600;">Angcode</a> | 
                        <a href="/policy" style="font-weight: 600;">Policy</a> </p>
                </div>
            </form>
        </div>
    </div>
</body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".click-trigger").click(function() {
                $(".element-to-hide").addClass("hidden");
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
