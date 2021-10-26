@extends('layouts.navigation')

@section("principal")

    <form method="POST" action="/blocks/{{$usuario->id}}">
        @csrf
        <input type="text" name="nombres" value="{{$usuario->nombres}}">
        <input type="text" name="apellidos" value="{{$usuario->apellidos}}">
        <input type="text" name="edad" value="{{$usuario->edad}}">
        <input type="text" name="numero" value="{{$usuario->numero}}">
        <input type="text" name="direccion" value="{{$usuario->direccion}}">
        <input type="text" name="correo" value="{{$usuario->correo}}">
        <input type="submit" name="submit" value="Actualizar">
        @method('PUT')
    </form>
@endsection
