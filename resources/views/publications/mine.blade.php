@extends('layouts.app')

@section('title', 'Mis publicaciones')

@section('content')

<div class="page">

    <div class="container">

        <div class="dashboard-header">

            <h1>
                Mis publicaciones
            </h1>

            <p>
                Aquí puedes consultar todo lo que has compartido.
            </p>

        </div>


        <div style="margin-bottom: 25px;">

            <a
                href="{{ route('publications.create') }}"
                class="btn btn-primary"
            >
                + Nueva publicación
            </a>

        </div>


        @if($publications->count())

            <div class="publications-grid">

                @foreach($publications as $publication)

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


            <div style="margin-top: 30px;">

                {{ $publications->links() }}

            </div>

        @else

            <div class="card">

                <h2>
                    Todavía no tienes publicaciones.
                </h2>

                <p>
                    Comienza compartiendo tu primer pensamiento.
                </p>

                <br>

                <a
                    href="{{ route('publications.create') }}"
                    class="btn btn-primary"
                >
                    Crear mi primera publicación
                </a>

            </div>

        @endif

    </div>

</div>

@endsection