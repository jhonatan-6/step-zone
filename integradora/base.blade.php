
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Jugueteria El Trompo')</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    @stack('styles')
</head>

<body>

    
    <header class="header">
        <p>Jugueteria El Trompo</p>

        <nav>
            <ul>
                <li><a href="{{ url('/#inicio') }}">Inicio</a></li>
                <li><a href="{{ url('/#productos') }}">Productos</a></li>
                <li><a href="{{ url('/#contacto') }}">Contacto</a></li>
            </ul>
        </nav>

        <button type="button" id="btn-tema">
            Modo oscuro
        </button>
    </header>

    <main>
        @yield('content')
    </main>


    <footer class="footer">
        <p>Integradora - Jhonatan Pastor Quispe Samo - 27 de octubre de 2026</p>
    </footer>

    {{-- <script src="{{ asset('js/script.js') }}"></script> --}}

    @stack('scripts')

</body>
</html>
