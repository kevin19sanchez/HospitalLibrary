@extends('layout.app')

@section('tile', 'login')
    
@section('content')

<form action="#" class="formulario">
    @csrf
    <h1>Login</h1>
    <div class="contenedor">
        <div class="input-contenedor">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Correo">
        </div>

        <div class="input-contenedor">
            <i class="fas fa-key"></i>
            <input type="password" name="password" id="password" placeholder="Contraseña">
        </div>

        <input type="submit" value="Login" class="button">
        <p>¿No tienes cuenta? <a href="{{ url('/registro') }}" class="link">Registrate</a></p>
    </div>
</form> 

@endsection