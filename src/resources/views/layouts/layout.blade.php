<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document - @yield('title')</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/styles.css">


</head>
<body>
   <!--  Inicio menu barra de autenticacion y logout   -->
    <nav class="navbar navbar-expand-md shadow-sm">
            <div class="container">               
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('home') }}">
                                        {{ __('Diario General') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('personal') }}">
                                        {{ __('Mi Diario') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf <!-- Proteccion ataques cross-site request forgery
                                        Laravel genera automáticamente un «token» CSRF 
                                        para cada sesión de usuario activa manejada por la aplicación. 
                                        Este token es usado para verificar que el usuario autenticado es 
                                        quien en realidad está haciendo la petición a la aplicación.-->
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Fin barra autenticacion y logout -->
    <!-- Logo -->
 <nav class="navbar navbar-light bg-main" style="height : 100px">
            <a class="h-100 m-auto" href="{{ url('/')}}">
                <img src="{{asset('images/logo.png')}}" alt="" loading="lazy" class="h-100 w-auto m-auto">
            </a>
                <h1 class="m-auto text-center">{{$title ?? 'Simplemente tus Gustos'}}</h1>
            @guest
            @else
            <a class="btn m-auto" href="{{url('/add')}}">Agregar Nuevo Contenido</a>
            <a class="btn m-auto" href="{{url('/home')}}">Agregadas por todos</a>
            <a class="btn m-auto" href="{{url('/personal')}}">Agregadas por mí</a>
            @endguest
    </nav>
    <!-- Contenido -->
       @yield('content')

    <!-- Footer -->
    <footer class="container-fluid bg-main">
        <div class="row text-center p-4">
            
            <div id="col-md-10">
                <a href="">
                    <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook">
                </a>
                <a href="">
                    <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram">
                </a>
                <a href="">
                    <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube">
                </a>
                <p class="mt-3">matolink © 2022. <br> Ningún derecho reservado.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
