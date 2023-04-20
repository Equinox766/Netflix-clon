@extends('layouts.app')
@section('contenido')
<div class="container-login">
    <h1>Registro</h1>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <input type="text" placeholder="Ingresa tu nombre" name="name">
        <input type="text" placeholder="Correo electrónico" name="email">
        <input type="password" placeholder="Contraseña" name="password">
        <input type="password" placeholder="Repite tu contraseña" name="password_confirmation">

        <button type="submit">Registrarme</button>
    </form>

    <div class="help">
        <div>
            <input type="radio" id="me">
            <label for="me">Recuérdame</label>
        </div>
            
        <a href="">¿Necesitas ayuda?</a>
    </div>

    <a href="" class="facebook"><img src="./assets/img/facebook.png" class="icon"/> Conéctate con Facebook</a>

    <div class="connect">
        <p>¿Primera vez en Netflix?<span id="span01"> Suscríbete ahora.</span>.</p>
        <p>Esta página está protegida por Google reCAPTCHA para garantizar que no sea un robot.<span id="span02">Saber más. </span></p>
    </div>
</div>
@endsection