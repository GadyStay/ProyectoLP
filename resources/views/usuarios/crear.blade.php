
@extends('layouts.navigation')

<form method="POST" action="/usuarios">
@csrf
    <input type="text" name="nombres" placeholder="Ingrese Nombres" value="{{old("nombres")}}">
    <input type="text" name="apellidos" placeholder="Ingrese Apellidos" value="{{old("apellidos")}}">
    <input type="text" name="edad" placeholder="Ingrese Edad" value="{{old("edad")}}">
    <input type="text" name="numero" placeholder="Ingrese Numero" value="{{old("numero")}}">
    <input type="text" name="direccion" placeholder="Ingrese Direccion" value="{{old("direccion")}}">
    <input type="text" name="correo" placeholder="Ingrese Correo" value="{{old("correo")}}">
    <input type="submit" name="submit" value="Crear">

</form>

@if($errors->ant())
    <div style="color: red">
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    </div>
@endif
