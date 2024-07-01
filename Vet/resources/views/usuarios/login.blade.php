@extends('layout')

@section('title', 'Inicio de Sesión')

@section('content')
<div class="container_login">
    <h2>Iniciar Sesión</h2>
    <form method="POST" action="{{ route('usuarios.validar_sesion') }}" class="form" id="form">
        @csrf
        <div class="form__field">
            <label for="correo" class="form__label">Correo Electrónico</label>
            <input type="email" placeholder="Escribe tu correo" id="correo" required class="form__input" name="correo">
            <i class="ri-mail-line form__icon"></i>
            <div class="form__error" id="emailError">
                <i class="ri-information-fill"></i>
                <span>Formato de correo electrónico inválido</span>
            </div>
        </div>
        <div class="form__field">
            <label for="contraseña" class="form__label">Contraseña</label>
            <input type="password" id="contraseña" name="contraseña" class="form__input" required placeholder="Escribe tu contraseña">
            <i class="ri-lock-password-line form__icon"></i>
            <div class="form__error" id="passwordError">
                <i class="ri-information-fill"></i>
                <span>Debe de haber 8 caracteres mínimo</span>
            </div>
        </div>
        <br>
        <button type="submit" class="btn mt-4">Iniciar Sesión</button>
    </form>
</div>

<script src="{{ asset('js/main.js') }}"></script>
@endsection
