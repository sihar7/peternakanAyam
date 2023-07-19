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
</head>

<body class="account-page">

    <div class="main-wrapper">
        <div class="account-content">
            <div class="login-wrapper">
                <div class="login-content">
                    <div class="login-userset">
                        <div class="login-logo logo-normal">
                            {{-- <img src="{{ URL::to('') }}/assets/img/logo.png" alt="img"> --}}
                        </div>
                        <a href="" class="login-logo logo-white">
                            {{-- <img src="{{ URL::to('') }}/assets/img/logo-white.png" alt> --}}
                        </a>
                        <div class="login-userheading">
                            <h3>Create an Account</h3>
                            <h4>Continue where you left off</h4>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-login">
                                <label>{{ __('Name') }}</label>
                                <div class="form-addons">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-login">
                                <label>{{ __('Email Address') }}</label>
                                <div class="form-addons">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        required>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-login">
                                <label>{{ __('Password') }}</label>
                                <div class="pass-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-login">
                                <label>{{ __('Confirm Password') }}</label>
                                <div class="pass-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-login">
                                <button type="submit" class="btn btn-login">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </form>
                        <div class="signinform text-center">
                            <h4>Already a user? <a href="{{ route('login') }}" class="hover-a">Sign In</a></h4>
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