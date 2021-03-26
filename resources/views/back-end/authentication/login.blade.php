<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login - srtdash</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/metisMenu.css">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/typography.css">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/default-css.css">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/styles.css">
    <link rel="stylesheet" href="{{ asset('/') }}/back-end/assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="{{ asset('/') }}/back-end/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- login area start -->
    <div class="login-area login-bg">
        <div class="container">
            <div class="login-box ptb--100">
                <form action="{{ route('admin.login.save') }}" method="POST"> 
                    @csrf
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <p>Hello there, Sign in and start managing your Admin Template</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" name="email" id="exampleInputEmail1">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>

                             @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" name="password" id="exampleInputPassword1">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>

                              @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="remember" class="custom-control-input" id="customControlAutosizing">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- login area end -->

    <!-- jquery latest version -->
    <script src="{{ asset('/') }}/back-end/assets/js/vendor/jquery-2.2.4.min.js"></script>
    <!-- bootstrap 4 js -->
    <script src="{{ asset('/') }}/back-end/assets/js/popper.min.js"></script>
    <script src="{{ asset('/') }}/back-end/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}/back-end/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('/') }}/back-end/assets/js/metisMenu.min.js"></script>
    <script src="{{ asset('/') }}/back-end/assets/js/jquery.slimscroll.min.js"></script>
    <script src="{{ asset('/') }}/back-end/assets/js/jquery.slicknav.min.js"></script>
    
    <!-- others plugins -->
    <script src="{{ asset('/') }}/back-end/assets/js/plugins.js"></script>
    <script src="{{ asset('/') }}/back-end/assets/js/scripts.js"></script>
</body>

</html>