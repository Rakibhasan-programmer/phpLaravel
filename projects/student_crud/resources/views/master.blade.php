<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.css">
</head>
<body>

    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container">
            <a href="" class="navbar-brand">My Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="menu">
                <ul class="navbar-nav ms-auto">
                    <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                            Student
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{route('student.add')}}" class="dropdown-item">Add Student</a></li>
                            <li><a href="{{route('student.manage')}}" class="dropdown-item">Manage Student</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('body')




    <script src="{{asset('/')}}assets/jquery/jquery-3.6.1.min.js"></script>
    <script src="{{asset('/')}}assets/js/bootstrap.bundle.js"></script>
    <script src="{{asset('/')}}assets/js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
