<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú lateral responsive - MagtimusPro</title>

    <link rel="stylesheet" href="{{asset('assets/css/styles-index.css')}}">

    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body id="body">
    
    <header>
        <div class="icon__menu">
            <i class="fas fa-bars" id="btn_open"></i>
        </div>
    </header>

    <div class="menu__side" id="menu_side">

        <div class="name__page">
            <i class="fab fa-youtube"></i>
            <h4>BIZFLOW</h4>
        </div>

        <div class="options__menu">	

            <a href="{{route('crear-usuario')}}" class="selected">
                <div class="option">
                    <i class="fas fa-home" title="Inicio"></i>
                    <h4>Nuevo usuario</h4>
                </div>
            </a>

            <a href="{{route('listar-usuario')}}">
                <div class="option">
                    <i class="far fa-file" title="Portafolio"></i>
                    <h4>Usuario</h4>
                </div>
            </a>
            
            <a href="#">
                <div class="option">
                    <i class="fas fa-video" title="Cursos"></i>
                    <h4>Nuevo ticket</h4>
                </div>
            </a>

            <a href="#">
                <div class="option">
                    <i class="far fa-sticky-note" title="Blog"></i>
                    <h4>Ticket</h4>
                </div>
            </a>

            <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <div class="option">
                    <i class="fas fa-sign-out-alt" title="Cerrar sesión"></i>
                    <h4>Cerrar sesión</h4>
                </div>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

    </div>

    <main>
        @yield('content')
    </main>

    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>