<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from coderthemes.com/hyper/saas/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2022 14:58:28 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Log In | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">

    <!-- App css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

</head>

<body class="authentication-bg pb-0" data-layout-config='{"darkMode":false}'>

<div class="auth-fluid">
    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="card-body">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <a href="{{route('home')}}" class="logo-dark">
                        <span><img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="" height="18"></span>
                    </a>
                    <a href="{{route('home')}}" class="logo-light">
                        <span><img src="{{asset('/')}}admin/assets/images/logo.png" alt="" height="18"></span>
                    </a>
                </div>

                <!-- title-->
                <h4 class="mt-0">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                <!-- form -->
                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control" name="email" type="email" id="emailaddress" required="" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <a href="" class="text-muted float-end"><small>Forgot your password?</small></a>
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" name="password" type="password" required="" id="password" placeholder="Enter your password">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                        </div>
                    </div>
                    <div class="d-grid mb-0 text-center">
                        <button class="btn btn-primary" type="submit"><i class="mdi mdi-login"></i> Log In </button>
                    </div>
                    <!-- social-->
                    <div class="text-center mt-4">
                        <p class="text-muted font-16">Sign in with</p>
                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                            </li>
                        </ul>
                    </div>
                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted">Don't have an account? <a href="pages-register-2.html" class="text-muted ms-1"><b>Sign Up</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->

    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center">
        <div class="auth-user-testimonial">
            <h2 class="mb-3">I love the color!</h2>
            <p class="lead"><i class="mdi mdi-format-quote-open"></i> It's a elegent templete. I love it very much! . <i class="mdi mdi-format-quote-close"></i>
            </p>
        </div> <!-- end auth-user-testimonial-->
    </div>
    <!-- end Auth fluid right content -->
</div>
<!-- end auth-fluid-->

<!-- bundle -->
<script src="{{asset('/')}}admin/assets/js/vendor.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/app.min.js"></script>

</body>


<!-- Mirrored from coderthemes.com/hyper/saas/pages-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2022 14:58:28 GMT -->
</html>