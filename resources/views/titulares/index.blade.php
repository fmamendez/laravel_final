@extends('layouts.plantilla')
@section('title', 'Titulares')

@section('header', 'Titulares')

@section('content')
    {{-- <h1>titulares</h1> --}}
    <div class="mb-5">
        <a class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2" href="{{ route('titulares.create') }}">Nuevo
            Titular</a>
    </div>
    <div>
        <form action="{{ route('titulares.index') }}" method="get">
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Buscar</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="text" name="busqueda" id="busqueda" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar Apellido, Nombre o DNI">
                <input type="submit" value="buscar" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            </div>
        </form>
    </div>
    <div class="relative overflow-x-auto mt-5">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($titulares as $titular)
                    <tr class="bg-white dark:bg-gray-800">
                        <td>{{ $titular->apellido }}</td>
                        <td>{{ $titular->nombre }}</td>
                        <td>{{ $titular->dni }}</td>
                        <td>
                            <a class="bg-yellow-500 hover:bg-yellow-800 text-white font-bold px-3 rounded"
                                href="{{ route('titulares.edit', $titular->id) }}">Modificar</a>
                            <a class="bg-blue-500 hover:bg-blue-800 text-white font-bold px-3 rounded"
                                href="{{ route('titulares.show', $titular->id) }}">Ver</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $titulares->appends(['busqueda'=>$busqueda]) }}
    </div>
@endsection
