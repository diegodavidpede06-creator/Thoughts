@extends('layouts.app')

@section('title', 'Nueva publicación')

@section('content')

<div class="container">

    <div class="form-container">

        <div class="card">

            <h1>
                Nueva publicación
            </h1>

            <p style="text-align: center; margin-bottom: 25px;">
                Comparte una nota, pensamiento o texto.
            </p>


            <form
                action="{{ route('publications.store') }}"
                method="POST"
            >

                @csrf


                <div class="form-group">

                    <label for="title">
                        Título
                    </label>

                    <input
                        type="text"
                        id="title"
                        name="title"
                        class="form-control"
                        value="{{ old('title') }}"
                        maxlength="255"
                        required
                    >

                    @error('title')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <div class="form-group">

                    <label for="content">
                        Contenido
                    </label>

                    <textarea
                        id="content"
                        name="content"
                        class="form-control"
                        maxlength="5000"
                        required
                    >{{ old('content') }}</textarea>

                    @error('content')

                        <div class="error">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                    style="width: 100%;"
                >
                    Publicar
                </button>

            </form>


            <div class="form-footer">

                <a
                    href="{{ route('publications.index') }}"
                    style="color: var(--smart-blue); font-weight: 700;"
                >
                    ← Volver a publicaciones
                </a>

            </div>

        </div>

    </div>

</div>

@endsection