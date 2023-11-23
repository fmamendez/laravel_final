@extends('layouts.plantilla')
@section('title', 'Actualizar Información del Titular')

@section('header', 'Actualizar Información del Titular')

@section('content')
    <form method="post" action="{{ route('titulares.update', $titulare) }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="col-span-6 sm:col-span-3">
            <label for="apellido" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Apellido</label>
            <input type="text" name="apellido" id="apellido"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese el Apellido del Titular" required="" value="{{ old('apellido', $titulare->apellido) }}">
        </div>
        <div class="col-span-6 sm:col-span-3 mt-5">
            <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
            <input type="text" name="nombre" id="nombre"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese el Nombre del Titular" required="" value="{{ old('nombre', $titulare->nombre) }}">
        </div>
        <div class="max-w-sm mt-5">
            <label for="dni" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Documento:</label>
            <div class="relative">
                <input type="text" name="dni" id="dni" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ingrese el número de documento" pattern="^\d{8}?$" required value="{{ old('dni', $titulare->dni) }}">
            </div>
            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Por favor ingresar el numero de documento.</p>
        </div>
        <div class="col-span-6 sm:col-span-3 mt-5">
            <label for="domicilio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Domicilio</label>
            <input type="text" name="domicilio" id="domicilio" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="e.g. Viedma calle xx" required="" value="{{ old('domicilio', $titulare->domicilio) }}">
        </div>
        <div class="mt-5">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Actualizar</button>
        </div>
    </form>
@endsection
