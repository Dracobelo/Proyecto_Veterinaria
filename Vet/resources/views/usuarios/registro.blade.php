@extends('layout')

@section('title', 'Registro')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-2xl font-semibold text-center mb-5">Registro</h1>
    <form method="POST" action="{{ route('usuarios.guardar_registro') }}" class="max-w-md mx-auto">
        @csrf
        <div class="mb-6">
            <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-input mt-1 block w-full py-3 px-4 rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div class="mb-6">
            <label for="apellidos" class="block text-sm font-medium text-gray-700">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" class="form-input mt-1 block w-full py-3 px-4 rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div class="mb-6">
            <label for="dni" class="block text-sm font-medium text-gray-700">DNI:</label>
            <input type="text" id="dni" name="dni" class="form-input mt-1 block w-full py-3 px-4 rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div class="mb-6">
            <label for="telefono" class="block text-sm font-medium text-gray-700">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" class="form-input mt-1 block w-full py-3 px-4 rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div class="mb-6">
            <label for="direccion" class="block text-sm font-medium text-gray-700">Dirección:</label>
            <input type="text" id="direccion" name="direccion" class="form-input mt-1 block w-full py-3 px-4 rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div class="mb-6">
            <label for="correo" class="block text-sm font-medium text-gray-700">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" class="form-input mt-1 block w-full py-3 px-4 rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div class="mb-6">
            <label for="contraseña" class="block text-sm font-medium text-gray-700">Contraseña:</label>
            <input type="password" id="contraseña" name="contraseña" class="form-input mt-1 block w-full py-3 px-4 rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <div class="mb-6">
            <label for="contraseña_confirmation" class="block text-sm font-medium text-gray-700">Confirmar Contraseña:</label>
            <input type="password" id="contraseña_confirmation" name="contraseña_confirmation" class="form-input mt-1 block w-full py-3 px-4 rounded-md border border-gray-500 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
        </div>
        <button type="submit" class="btn btn-primary w-full mb-12 px-4 py-3 rounded-md text-white font-semibold shadow-sm hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-400 focus:ring-opacity-75">Registrarse</button>
    </form>
</div>
@endsection
