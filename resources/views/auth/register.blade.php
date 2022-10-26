<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V16</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{ asset('layoutAuth/images/icons/favicon.ico') }}" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/bootstrap/css/bootstrap.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('layoutAuth/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css"
        href="{{ asset('layoutAuth/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/animate/animate.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/css-hamburgers/hamburgers.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/animsition/css/animsition.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/select2/select2.min.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/vendor/daterangepicker/daterangepicker.css') }}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('layoutAuth/css/main.css') }}">
    <!--===============================================================================================-->
</head>

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{ asset('layoutAuth/images/bg-01.jpg') }}'">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Register
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100 @error('name') is-invalid @enderror" type="text" name="name"
                                placeholder="Name" value="{{ old('name') }}" required autocomplete="name">

                            @error('email')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100 @error('username') is-invalid @enderror" type="username" name="username"
                                placeholder="Username" value="{{ old('username') }}" required autocomplete="username">

                            @error('email')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100 @error('email') is-invalid @enderror" type="email" name="email"
                                placeholder="Email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter number">
                            <input class="input100 @error('no_telp') is-invalid @enderror" type="number" name="no_telp"
                                placeholder="No Telepon" value="{{ old('no_telp') }}" required autocomplete="no_telp">

                            @error('no_telp')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter username">
                            <input class="input100 @error('perusahaan') is-invalid @enderror" type="text" name="perusahaan"
                                placeholder="Agency / Office" value="{{ old('perusahaan') }}" required autocomplete="perusahaan">

                            @error('perusahaan')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter number">
                            <input class="input100 @error('longitude') is-invalid @enderror" type="number" name="longitude"
                                placeholder="Longitude" value="{{ old('longitude') }}" required autocomplete="longitude">

                            @error('longitude')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter number">
                            <input class="input100 @error('latitude') is-invalid @enderror" type="number" name="latitude"
                                placeholder="Latitude" value="{{ old('latitude') }}" required autocomplete="latitude">

                            @error('latitude')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter file">
                            <input class="input100 @error('profil') is-invalid @enderror" type="file" name="profil"
                                placeholder="Upload Foto Profil" required autocomplete="profil">

                            @error('profil')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Enter password">
                            <input class="input100 @error('password') is-invalid @enderror" type="password" name="password"
                                placeholder="Password" required autocomplete="current-password">

                            @error('password')
                                <span class="focus-input100" data-placeholder="&#xe82a;">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="container-login100-form-btn m-t-32">
                            <button type="submit" class="login100-form-btn">
                                Register
                            </button>

                            <a class="btn btn-link" href="{{ route('login') }}">
                                Sudah Punya Akun ?
                            </a>
                        </div>
                    </form>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/animsition/js/animsition.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/bootstrap/js/popper.js') }}"></script>
    <script src="{{ asset('layoutAuth/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/select2/select2.min.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('layoutAuth/vendor/daterangepicker/daterangepicker.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/vendor/countdowntime/countdowntime.js') }}"></script>
    <!--===============================================================================================-->
    <script src="{{ asset('layoutAuth/js/main.js') }}"></script>

</body>

</html>
