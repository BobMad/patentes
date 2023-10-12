<!doctype html>
<html lang="pt_BR" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/css/app.css','resources/js/app.js', 'resources/js/bootstrap.js'])

    <title>GFPI</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container-md">
        <a class="me-5" href="/"><img class="" src="{{asset('images/logo/logo1.png')}}" width="90" height="45"
                                      alt="GFPI"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01"
                aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if (auth()->check())
            <div class="collapse navbar-collapse" id="navbarColor01">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{route('objetoPIs.index')}}">PROPRIEDADES INTELECTUAIS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ADMINISTRATIVO</a>
                    </li>
                </ul>

                <div class="nav-item dropdown">
                    <a class="nav-link" data-bs-toggle="dropdown" href="#" role="button"
                       aria-haspopup="true" aria-expanded="false">
                        <div>{{ Auth::user()->name }}</div>
                    </a>

                    <div class="dropdown-menu" style="">
                        <a class="dropdown-item" href="{{route('profile.edit')}}">{{ __('Perfil') }}</a>

                    <div class="dropdown-divider "></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                    </div>
                </div>

            </div>
    </div>
    @endif
</nav>

<div class="container-sm">
    <div class="row ">
        <div class="col-2 ms-sm-3 me-sm-3">
            <div class="pt-5"></div>
            <div class="pt-4"></div>
            <div class="pt-1"></div>

            @yield('content-left')
        </div>
        <div class="col-8 ms-sm-3 me-sm-3 align-content-center">
            @yield('content')
        </div>
        <div class="col-2 ms-sm-3 me-sm-3">
            @yield('content-right')
        </div>
    </div>
</div>

<footer>
    <div class="row mt-4 mx-5">
        <div class="col-4"></div>
        <div class="col-5 ">
            <figure class="figure mx-5">
                <img class="figure-img img-fluid rounded" height="250" width="175"
                     src="{{asset('images/footer/profnit_logo_3.png')}}" alt="">
            </figure>
            <figure class="figure mx-5">
                <img class="figure-img img-fluid rounded" height="250" width="157"
                     src="{{asset('images/footer/unifap-universidade-federal-do-amapa.png')}}" alt="">
            </figure>
            <figure class="figure mx-4">
                <img class="figure-img img-fluid rounded" height="250" width="111"
                     src="{{asset('images/footer/fortec.png')}}" alt="">
            </figure>
        </div>
        <div class="col-3"></div>
    </div>
</footer>


</body>
</html>
