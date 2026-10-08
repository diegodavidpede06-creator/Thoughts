@extends('layouts.app')

@section('title', 'Thoughts - Inicio')

@section('content')

<section class="hero">

    <div class="container">

        <h1>
            Comparte tus
            <span>pensamientos.</span>
        </h1>

        <p>
            Un espacio sencillo para escribir notas,
            pensamientos e ideas y descubrir lo que
            otros usuarios quieren compartir.
        </p>

        @auth

            <a
                href="{{ route('publications.create') }}"
                class="btn btn-primary"
            >
                Escribir una publicación
            </a>

            <a
                href="{{ route('publications.index') }}"
                class="btn btn-secondary"
            >
                Ver publicaciones
            </a>

        @else

            <a
                href="{{ route('register') }}"
                class="btn btn-primary"
            >
                Crear una cuenta
            </a>

            <a
                href="{{ route('login') }}"
                class="btn btn-secondary"
            >
                Iniciar sesión
            </a>

        @endauth

    </div>

</section>


<section class="page">

    <div class="container">

        <div class="stats">

            <div class="stat-card">
                <strong>✍️</strong>
                <span>Escribe tus ideas</span>
            </div>

            <div class="stat-card">
                <strong>💭</strong>
                <span>Comparte pensamientos</span>
            </div>

            <div class="stat-card">
                <strong>👥</strong>
                <span>Lee a otros usuarios</span>
            </div>

        </div>

    </div>

</section>

@endsection
