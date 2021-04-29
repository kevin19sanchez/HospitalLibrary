@extends('layout.app')

@section('tile', 'registro')
    
@section('content')

    <form action="{{route('registro.create')}}" class="formulario" method="POST">
        @csrf
        <h1>Registrate</h1>
        <div class="contenedor">
            <div class="input-contenedor">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="Nombre">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user"></i>
                <input type="text" name="lastname" id="lastname" placeholder="Apellido">
            </div>
            
            <div class="input-contenedor">
                <i class="fas fa-id-card"></i>
                <input type="text" name="codempleado" id="codempleado" placeholder="Codigo Empleado">
            </div>

            <div class="input-contenedor">
                <i class="fas fa-key"></i>
                <input type="password" name="password" id="password" placeholder="Contraseña">
            </div>

            <div class="sidebar-box">
                <select class="select-style" name="rol" id="rol">
                    @foreach ($rol as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Registarse" class="button">
            <p>¿Ya tienes cuenta? <a href="{{ url('/') }}" class="link">Iniciar Sesion</a></p>
        </div>
    </form> 

@endsection