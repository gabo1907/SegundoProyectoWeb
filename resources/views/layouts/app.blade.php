<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSRF -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inicio</title>
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/mediaqueries.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Oxygen|Rufina&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <!-- nav-->
        <nav class="navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <!-- Si el usuario no está autenticado -->
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Registro</a>
                    </li>
                    <!-- Si el usuario está autenticado -->
                    @else
                    <li class="nav-item active">
                        <a class="nav-link" href={{route('admintareas.index')}}>Consejos de salud <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                        <!-- Te manda solo el usuario que está registrado en el sitio -->
                        <a class="nav-link" href="{{url('grades/'.Auth::user()->id)}}"></a>
                    </li>
                   
                    <li class="nav-item dropleft">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- Esto es para mostrar el nombre del usuario en lugar del dropdown -->
                            {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Auth es para un usuario que ya está autenticado -->
                            @if(Auth::user()->admin)
                            <a class="dropdown-item" href="{{route('admintareas.index')}}">Admin</a>
                            @endif
                            <a class="dropdown-item" href="#">Mi Perfil</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"> Cerrar sesión </a>  
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main> 
    <footer>
       <p class="pt-3 text-center"><b>Todos los derechos reservados G.Z.M ©</b></p>
            <p class="text-center">Sígueme en:</p>
            <div id="imagenesFoot">
                <a target="_blank" href="https://www.facebook.com/gabriel.zarcomunoz">
                    <img id="foot" src="img/icons8-facebook-48.png" alt="Facebook de Gabo">
                </a>
                <a target="_blank" href="https://www.instagram.com/?hl=es-la">
                    <img id="foot" src="img/icons8-instagram-48.png" alt="Insta de Gabo">
                </a>
            </div>
        </div>
    </footer>
</body>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</html>