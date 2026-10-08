<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title', 'Thoughts')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar">

        <a href="{{ route('home') }}" class="logo">
            Thoughts
        </a>

        <div class="nav-links">

            @auth

                <a href="{{ route('dashboard') }}">
                    Inicio
                </a>

                <a href="{{ route('publications.index') }}">
                    Publicaciones
                </a>

                <a href="{{ route('publications.mine') }}">
                    Mis publicaciones
                </a>

                <a href="{{ route('publications.create') }}" class="nav-button">
                    + Publicar
                </a>

                <button
                    type="button"
                    id="theme-toggle"
                    class="btn btn-secondary"
                >
                    🌙
                </button>

                <form
                    action="{{ route('logout') }}"
                    method="POST"
                    class="logout-form"
                >
                    @csrf

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        Cerrar sesión
                    </button>
                </form>

            @else

                <a href="{{ route('login') }}">
                    Iniciar sesión
                </a>

                <a href="{{ route('register') }}" class="nav-button">
                    Registrarse
                </a>

                <button
                    type="button"
                    id="theme-toggle"
                    class="btn btn-secondary"
                >
                    🌙
                </button>

            @endauth

        </div>

    </nav>


    <main>

        <div class="container">

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-error">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-error">
                    <strong>Hay algunos errores:</strong>

                    <ul style="margin-top: 8px; padding-left: 20px;">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </div>

        @yield('content')

    </main>


    <footer class="footer">
        <p>
            © {{ date('Y') }} Thoughts — Comparte tus ideas.
        </p>
    </footer>

</body>
</html>