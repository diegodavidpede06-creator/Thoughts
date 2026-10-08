@extends('layouts.app')

@section('title', 'Iniciar sesión')

@section('content')

<div class="container">

    <div class="form-container">

        <div class="card">

            <h1>
                Iniciar sesión
            </h1>

            <p style="text-align: center; margin-bottom: 25px;">
                Entra a tu cuenta para continuar.
            </p>

            <form
                action="{{ route('login') }}"
                method="POST"
            >

                @csrf

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
                        autofocus
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


                <button
                    type="submit"
                    class="btn btn-primary"
                    style="width: 100%;"
                >
                    Iniciar sesión
                </button>

            </form>


            <div class="form-footer">

                <p>
                    ¿No tienes una cuenta?
                    <a
                        href="{{ route('register') }}"
                        style="color: var(--smart-blue); font-weight: 700;"
                    >
                        Regístrate aquí
                    </a>
                </p>

            </div>

        </div>

    </div>

</div>

@endsection
