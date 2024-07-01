@extends('empleado.layout')

@section('title', 'Inicio Empleado')

@section('content')
<div class="container mx-auto my-4">
    <div class="jumbotron mt-5">
        <h1 class="text-3xl font-semibold text-gray-900 mb-4">Bienvenido a la interfaz de Empleado</h1>
        <p class="text-gray-800 leading-relaxed">Gestione la clínica veterinaria desde aquí.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Clientes</h2>
            <p class="text-gray-600">Administra la información de los clientes de la clínica.</p>
            <a href="{{ route('empleado.clientes.index') }}" class="mt-4 block text-center bg-gray-800 text-white rounded-md py-2 hover:bg-gray-700">Ver clientes</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Mascotas</h2>
            <p class="text-gray-600">Gestiona las fichas de las mascotas atendidas en la clínica.</p>
            <a href="{{ route('empleado.mascotas.index') }}" class="mt-4 block text-center bg-gray-800 text-white rounded-md py-2 hover:bg-gray-700">Ver mascotas</a>
        </div>

        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2">Inventario</h2>
            <p class="text-gray-600">Administra el inventario de la clínica veterinaria.</p>
            <a href="{{ route('empleado.inventario') }}" class="mt-4 block text-center bg-gray-800 text-white rounded-md py-2 hover:bg-gray-700">Ver inventario</a>
        </div>


    </div>

    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
        <h2 class="text-xl font-semibold text-gray-800 mb-2">Estadísticas</h2>
        <p class="text-gray-600">Resumen de las actividades recientes en la clínica veterinaria.</p>
        <ul class="mt-4 space-y-2">
            <li class="flex justify-between">
                <span class="text-gray-800">Clientes atendidos hoy:</span>
                <span class="text-gray-600">-</span>
            </li>
            <li class="flex justify-between">
                <span class="text-gray-800">Mascotas registradas:</span>
                <span class="text-gray-600">-</span>
            </li>

        </ul>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-6" role="alert">
            <strong class="font-bold">¡Éxito!</strong>
            <span class="block">{{ session('success') }}</span>
        </div>
    @endif

    @if($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-6" role="alert">
            <strong class="font-bold">¡Error!</strong>
            <ul class="mt-1">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
