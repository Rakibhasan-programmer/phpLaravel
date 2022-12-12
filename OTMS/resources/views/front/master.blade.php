<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>OTMS | @yield('title')</title>

    <link rel="stylesheet" href="{{asset('/')}}front/css/bootstrap.css">
</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="">OTMS</a>
            <ul class="navbar-nav ms-auto">
                <li><a class="nav-link" href="{{route('front.home')}}">Home</a></li>
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="">Course Category</a>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Category One</a></li>
                        <li><a href="" class="dropdown-item">Category Two</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="{{route('front.about')}}">About</a></li>
                <li><a class="nav-link" href="{{route('front.contact')}}">Contact</a></li>
                <li><a class="nav-link" href="{{route('login')}}">Login</a></li>
                <li><a class="nav-link" href="{{route('register')}}">Register</a></li>
            </ul>
        </div>
    </nav>

    @yield('body')


    <section class="py-3 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center">OTMS - &copy; {{date('Y')}} copyright | All rights reserved</p>
                </div>
            </div>
        </div>
    </section>




 <script src="{{asset('/')}}front/js/bootstrap.bundle.js"></script>
</body>
</html>
