@extends('layouts.app')

@section('title', 'Publicaciones')

@section('content')

<div class="page">

    <div class="container">

        <div class="dashboard-header">

            <h1>
                Publicaciones
            </h1>

            <p>
                Descubre lo que otros usuarios han compartido.
            </p>

        </div>


        @if($publications->count())

            <div class="publications-grid">

                @foreach($publications as $publication)

                    <article class="publication-card">

                        <h2>
                            {{ $publication->title }}
                        </h2>

                        <div class="publication-meta">

                            Publicado por
                            <strong>
                                {{ $publication->user->name }}
                            </strong>

                            ·

                            {{ $publication->created_at->format('d/m/Y H:i') }}

                        </div>

                        <div class="publication-content">

                            {{ $publication->content }}

                        </div>

                    </article>

                @endforeach

            </div>


            <div style="margin-top: 30px;">

                {{ $publications->links() }}

            </div>

        @else

            <div class="card">

                <h2>
                    No hay publicaciones todavía.
                </h2>

                <p>
                    Sé el primero en compartir algo.
                </p>

                <br>

                <a
                    href="{{ route('publications.create') }}"
                    class="btn btn-primary"
                >
                    Crear publicación
                </a>

            </div>

        @endif

    </div>

</div>

@endsection