
@extends('layouts.navigation')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seccion de Eventos') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table border="1" cellspacing="0">
                    <tr>
                        <th>Nombre</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Direccion</th>
                        <th>&nbsp;</th>
                    </tr>

                    @foreach($eventos as $evento)

                        <tr>
                            <td>{{$evento->nombre}}</td>
                            <td>{{$evento->fecha}}</td>
                            <td>{{$evento->hora}}</td>
                            <td>{{$evento->Direccion}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-app-layout>

