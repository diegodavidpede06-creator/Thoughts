@extends('layouts.app')

@section('title', 'Crear cuenta')

@section('content')

<div class="container">

    <div class="form-container">

        <div class="card">

            <h1>
                Crear cuenta
            </h1>

            <p style="text-align: center; margin-bottom: 25px;">
                Regístrate para comenzar a compartir.
            </p>


            <form
                action="{{ route('register') }}"
                method="POST"
            >

                @csrf


                <div class="form-group">

                    <label for="name">
                        Nombre
                    </label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        value="{{ old('name') }}"
                        required
                    >

                    @error('name')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="email">
                        Correo electrónico
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        value="{{ old('email') }}"
                        required
                    >

                    @error('email')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="password">
                        Contraseña
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        required
                    >

                    @error('password')
                        <div class="error">
                            {{ $message }}
                        </div>
                    @enderror

                </div>


                <div class="form-group">

                    <label for="password_confirmation">
                        Confirmar contraseña
                    </label>

                    <input
                        type="password"
                        id="password_confirmation"
                        name="password_confirmation"
                        class="form-control"
                        required
                    >

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                    style="width: 100%;"
                >
                    Crear cuenta
                </button>

            </form>


            <div class="form-footer">

                <p>
                    ¿Ya tienes una cuenta?

                    <a
                        href="{{ route('login') }}"
                        style="color: var(--smart-blue); font-weight: 700;"
                    >
                        Inicia sesión
                    </a>
                </p>

            </div>

        </div>

    </div>

</div>

@endsection