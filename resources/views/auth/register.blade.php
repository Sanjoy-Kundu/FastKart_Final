<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Cuba admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Cuba admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets') }}/images/favicon.png" type="image/x-icon">
    <title>Registration</title>

    <!-- Google font-->
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/vendors/bootstrap.css">

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets') }}/css/style.css">

</head>

<body>

    <!-- login section start -->
    <section class="log-in-section section-b-space">
        <a href="" class="logo-login"><img src="{{ asset('assets') }}/images/logo/1.png" class="img-fluid"></a>
        <div class="container w-100">
            <div class="row">

                <div class="col-xl-5 col-lg-6 me-auto">
                    <div class="log-in-box">
                        <div class="log-in-title">
                            <h3>Welcome To Fastkart</h3>
                            <h4>Register Your Account</h4>
                        </div>

                        <div class="input-box">
                            <form method="POST" action="{{ route('register') }}" class="row g-4">
                                @csrf
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Your Name" name="name" value="{{ old('name') }}">
                                        <label for="name">Your Name</label>
                                        @error('name')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Email Address" name="email" value="{{ old('email') }}">
                                        <label for="email">Email Address</label>
                                        @error('email')
                                            <span>{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password" name="password">
                                        <label for="password">Password</label>
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating theme-form-floating log-in-form">
                                        <input type="password" class="form-control" id="password_confirmation"
                                            placeholder="Password" name="password_confirmation">
                                        <label for="password_confirmation">Password Confrimation</label>
                                        @error('password_confirmation')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>



                                <div class="col-12">
                                    <div class="forgot-box">
                                        <div class="form-check ps-0 m-0 remember-box">
                                            <input class="checkbox_animated check-box" type="checkbox"
                                                id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Remember me</label>
                                        </div>
                                        <a href="forgot.html" class="forgot-password">Forgot Password?</a>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-animation w-100 justify-content-center" type="submit">Log
                                        In</button>
                                    <h3>Create an New Account? <span class="text-primary"><a
                                                href="{{ url('login') }}">Registration</a></span></h3>
                                </div>
                            </form>
                        </div>

                        <div class="other-log-in">
                            <h6>or</h6>
                        </div>

                        <div class="log-in-button">
                            <ul>
                                <li>
                                    <a href="https://www.google.com/" class="btn google-button w-100">
                                        <img src="../{{ asset('assets') }}/images/inner-page/google.png"
                                            class="blur-up lazyload" alt=""> Log In with Google
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.facebook.com/" class="btn google-button w-100">
                                        <img src="../{{ asset('assets') }}/images/inner-page/facebook.png"
                                            class="blur-up lazyload" alt=""> Log In with Facebook
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login section end -->

</body>

</html>
