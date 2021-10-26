@extends('layouts.navigation')


<form method="POST" action="/eventos">
    @csrf
    <input type="text" name="nombre" placeholder="Ingrese Nombre" value="{{old("nombre")}}">
    <input type="text" name="fecha" placeholder="Ingrese Fecha" value="{{old("fecha")}}">
    <input type="text" name="hora" placeholder="Ingrese Hora" value="{{old("hora")}}">
    <input type="text" name="direccion" placeholder="Ingrese Direccion" value="{{old("direccion")}}">
    <input type="submit" name="submit" value="Guardar">

</form>

@if($errors->ant())
    <div style="color: red">
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    </div>
@endif
