@extends('layouts.plantilla')
@section('title', 'Automotores')

@section('header', 'Automotores')

@section('content')
    {{-- <h1>titulares</h1> --}}
    <a class="bg-green-500 hover:bg-green-800 text-white font-bold px-3 rounded" href="{{ route('titulares.create') }}">Nuevo
        Automotor</a>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Accion</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>fernando</td>
                <td>mendez</td>
                <td>editar/ver</td>
            </tr>
            {{-- @foreach ($autores as $autor)
                <tr>
                    <td>{{ $autor['id'] }}</td>
                    <td>{{ $autor['nombre'] }}</td>
                    <td>{{ $autor['apellido'] }}</td>
                    <td>
                        <a class="bg-yellow-500 hover:bg-yellow-800 text-white font-bold px-3 rounded"
                            href="{{ route('autors.edit', $autor['id']) }}">Modificar</a>
                        <a class="bg-blue-500 hover:bg-blue-800 text-white font-bold px-3 rounded"
                            href="{{ route('autors.show', $autor['id']) }}">Ver</a>
                    </td>
                </tr>
            @endforeach --}}
        </tbody>
    </table>
@endsection
