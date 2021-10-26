@extends('layouts.navigation')

@section("principal")

    <form method="POST" action="/blocks/{{$evento->id}}">
        @csrf
        <input type="text" name="nombre" value="{{$evento->nombre}}">
        <input type="text" name="fecha" value="{{$evento->fecha}}">
        <input type="text" name="hora" value="{{$evento->hora}}">
        <input type="text" name="direccion" value="{{$evento->direccion}}">
        <input type="submit" name="submit" value="Actualizar">
        @method('PUT')
    </form>
@endsection
