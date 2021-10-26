@extends('layouts.navigation')

@section("principal")

    <form method="POST" action="/blocks/{{$block->id}}">
        @csrf
        <input type="text" name="nombres" value="{{$block->nombres}}">
        <input type="text" name="experiencia" value="{{$block->experiencia}}">
        <input type="submit" name="submit" value="Actualizar">
        @method('PUT')
    </form>
@endsection
