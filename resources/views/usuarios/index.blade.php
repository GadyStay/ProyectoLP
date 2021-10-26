
@extends('layouts.navigation')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seccion de Usuarios') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table border="1" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Edad</th>
                        <th>Numero</th>
                        <th>Direccion</th>
                        <th>Correo</th>
                        <th>&nbsp;</th>
                    </tr>

                    @foreach($usuarios as $usuario)

                        <tr>

                            <td>{{$usuario->id}}</td>
                            <td>{{$usuario->nombres}}</td>
                            <td>{{$usuario->apellidos}}</td>
                            <td>{{$usuario->edad}}</td>
                            <td>{{$usuario->numero}}</td>
                            <td>{{$usuario->direccion}}</td>
                            <td>{{$usuario->correo}}</td>
                            <td><a href='block/{{$usuario->id}}/edit'>Actualizar</a></td>

                        </tr>
                    @endforeach
                </table>
            </div>
            <a href="/block/create">Agregar</a>
        </div>
    </div>
</x-app-layout>
