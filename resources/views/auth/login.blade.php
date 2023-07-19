<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Pos admin template</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::to('') }}/assets/img/favicon.png">

    <link rel="stylesheet" href="{{ URL::to('') }}/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ URL::to('') }}/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="{{ URL::to('') }}/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="{{ URL::to('') }}/assets/css/style.css">

    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

    </style>
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo logo-normal center">
                            <img src="{{ URL::to('') }}/ayam.png" alt="img">
                        </div>
                        <a href="index.html" class="login-logo logo-white center">
                            <img src="{{ URL::to('') }}/ayam.png"alt >
                        </a>
                        <div class="login-userheading">
                            <h3>Sign In</h3>
                            <h4>Please login to your account</h4>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-login">
                                <label>Email</label>
                                <div class="form-addons">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="Enter your email address">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    {{-- <img src="{{ URL::to('') }}/assets/img/icons/mail.svg" alt="img"> --}}
                                </div>
                            </div>
                            <div class="form-login">
                                <label>Password</label>
                                <div class="pass-group">
                                    <input id="password" type="password"
                                        class="pass-input @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="Enter your password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <span class="fas toggle-password fa-eye-slash"></span>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <br>
                            @if (Route::has('password.request'))
                            <div class="form-login">
                                <div class="alreadyuser">
                                    <h4><a href="{{ route('password.request') }}" class="hover-a">Forgot Password?</a>
                                    </h4>
                                </div>
                            </div>
                            @endif
                            <div class="form-login">
                                <button type="submit" class="btn btn-login">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                        <div class="signinform text-center">
                            <h4>Don’t have an account? <a href="{{ route('register') }}" class="hover-a">Sign Up</a></h4>
                        </div>
                    </div>
                </div>
                <div class="login-img">
                    <img src="{{ URL::to('') }}/assets/img/login.jpg" alt="img">
                </div>
            </div>
        </div>
    </div>


    <script src="{{ URL::to('') }}/assets/js/jquery-3.6.0.min.js"></script>

    <script src="{{ URL::to('') }}/assets/js/feather.min.js"></script>

    <script src="{{ URL::to('') }}/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ URL::to('') }}/assets/js/script.js"></script>
</body>

</html>
