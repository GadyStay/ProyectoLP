
@extends('layouts.navigation')


    <form method="POST" action="/blocks">
        @csrf
        <input type="text" name="nombres" placeholder="Ingrese Nombres" value="{{old("nombres")}}">
        <input type="text" name="experiencia" placeholder="Ingrese Experiencia" value="{{old("experiencia")}}">
        <input type="submit" name="submit" value="Guardar">

    </form>

    @if($errors->ant())
        <div style="color: red">
            @foreach($errors->all() as $error)
                {{$error}}<br>
            @endforeach
        </div>
    @endif

