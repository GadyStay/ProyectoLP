
@extends('layouts.navigation')

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seccion de Blocks') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <table border="1" cellspacing="0">
                    <tr>
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Experiencia</th>
                        <th>&nbsp;</th>
                    </tr>

                    @foreach($blocks as $block)

                        <tr>

                            <td>{{$block->id}}</td>
                            <td>{{$block->nombres}}</td>
                            <td>{{$block->experiencia}}</td>
                            <td><a href='block/{{$block->id}}/edit'>Actualizar</a></td>
                            <td>
                                <form method='post' action='blocks/{{$block->id}}'>
                                    <input type='submit' value='Eliminar'>
                                    @csrf
                                    @method("GET")
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            <a href="/block/create">Agregar</a>
            <a href="/block/publicar">Publicar</a>
        </div>
    </div>
</x-app-layout>




