<!doctype html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/bootstrap.js'])

    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-md">
        <a class="me-5" href="/"><img class="" src="{{asset('images/logo/logo1.png')}}" width="90" height="45" alt="GFPI"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">HOME
{{--                        <span class="visually-hidden">(current)</span>--}}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('objetoPIs.index')}}">PROPRIEDADES INTELECTUAIS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('titulares.index')}}">Titulares</a>
                </li>

                {{--<li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </li>--}}
            </ul>
            {{--<form class="d-flex">
                <input class="form-control me-sm-2" type="search" placeholder="Search">
                <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
            </form>--}}
        </div>
    </div>
</nav>

<div class="container container-fluid">
    <div class="row">
    <div class="col-auto">
        @yield('content-left')
    </div>
    <div class="col-7">
        @yield('content')
    </div>
    <div class="col-auto">
        @yield('content-right')
    </div>
    </div>


</div>

</body>
</html>
