@extends('empleado.layout')

@section('title', 'Clientes')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-3xl font-bold mb-5">Clientes</h1>
    <div class="overflow-x-auto">
        <table class="table-auto min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Apellidos</th>
                    <th class="px-4 py-2">DNI</th>
                    <th class="px-4 py-2">Dirección</th>
                    <th class="px-4 py-2">Teléfono</th>
                    <th class="px-4 py-2">Correo</th>
                    <th class="px-4 py-2">Acciones</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($clientes as $cliente)
                    <tr>
                        <td class="border px-4 py-2">{{ $cliente->id_cliente }}</td>
                        <td class="border px-4 py-2">{{ $cliente->nombre }}</td>
                        <td class="border px-4 py-2">{{ $cliente->apellidos }}</td>
                        <td class="border px-4 py-2">{{ $cliente->dni }}</td>
                        <td class="border px-4 py-2">{{ $cliente->direccion }}</td>
                        <td class="border px-4 py-2">{{ $cliente->telefono }}</td>
                        <!-- Accediendo al correo a través de la relación usuario -->
                        <td class="border px-4 py-2">{{ $cliente->usuario->correo }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ route('empleado.clientes.mascotas', $cliente->id_cliente) }}" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">Ver Mascotas</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
