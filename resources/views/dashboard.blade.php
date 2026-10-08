@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="page">

    <div class="container">

        <div class="dashboard-header">

            <h1>
                Hola, {{ $user->name }} 👋
            </h1>

            <p>
                Este es tu espacio personal en Thoughts.
            </p>

        </div>


        <div class="stats">

            <div class="stat-card">

                <strong>
                    {{ $publicationsCount }}
                </strong>

                <span>
                    Mis publicaciones
                </span>

            </div>


            <div class="stat-card">

                <strong>
                    ✍️
                </strong>

                <span>
                    Comparte una nueva idea
                </span>

            </div>


            <div class="stat-card">

                <strong>
                    💭
                </strong>

                <span>
                    Explora pensamientos
                </span>

            </div>

        </div>


        <div style="display: flex; gap: 10px; margin-bottom: 30px; flex-wrap: wrap;">

            <a
                href="{{ route('publications.create') }}"
                class="btn btn-primary"
            >
                + Nueva publicación
            </a>

            <a
                href="{{ route('publications.index') }}"
                class="btn btn-secondary"
            >
                Ver publicaciones
            </a>

        </div>


        <div class="card">

            <h2>
                Mis publicaciones recientes
            </h2>

            <br>

            @if($recentPublications->count())

                <div class="publications-grid">

                    @foreach($recentPublications as $publication)

                        <article class="publication-card">

                            <h2>
                                {{ $publication->title }}
                            </h2>

                            <div class="publication-meta">

                                {{ $publication->created_at->format('d/m/Y H:i') }}

                            </div>

                            <div class="publication-content">

                                {{ $publication->content }}

                            </div>

                        </article>

                    @endforeach

                </div>

            @else

                <p>
                    Todavía no has creado ninguna publicación.
                </p>

            @endif

        </div>

    </div>

</div>

@endsection