@extends('layouts.plantilla')
@section('title', 'Registro de Nuevo Automotor')

@section('header', 'Registro de Nuevo Automotor')

@section('content')
    <form method="post" action="{{ route('automotores.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="col-span-6 sm:col-span-3">
            <label for="titular" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titular</label>
            <select name="titular_id" id="titular"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                autofocus required="">
                <option value="">Selecciones un titular</option>
                @foreach ($titulares as $titular)
                    <option value="{{ $titular->id }}">{{ $titular->apellido }} {{ $titular->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="col-span-6 sm:col-span-3 mt-5">
            <label for="marca" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Marca</label>
            <input type="text" name="marca" id="marca"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese la marca del automotor" required="">
        </div>
        <div class="col-span-6 sm:col-span-3 mt-5">
            <label for="modelo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Modelo</label>
            <input type="text" name="modelo" id="modelo"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                placeholder="Ingrese el modelo del automotor" required="">
        </div>
        <div class="max-w-sm mt-5">
            <label for="patente" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Patente</label>
            <div class="relative">
                <input type="text" name="patente" id="patente" aria-describedby="helper-text-explanation"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Ingrese la patente del automotor" required>
            </div>
            <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">Por favor ingrese la
                patente del automotor.</p>
        </div>
        <div class="col-span-6 sm:col-span-3 mt-5">
            <label for="tipo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tipo</label>
            <select name="tipo" id="tipo"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                autofocus required="">
                <option value="">Seleccione el tipo de automotor</option>
                @foreach ($tipos as $tipo)
                    <option value="{{ $tipo }}">{{ $tipo }}</option>
                @endforeach
            </select>
        </div>
        <div class="mt-5">
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Guardar</button>
        </div>
    </form>
@endsection
