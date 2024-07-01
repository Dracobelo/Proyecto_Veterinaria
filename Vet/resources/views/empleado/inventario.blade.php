@extends('empleado.layout')

@section('title', 'Inventario')

@section('content')
<div class="container mx-auto mt-5">
    <h1 class="text-3xl font-bold mb-5">Inventario de Productos</h1>
    <div class="overflow-x-auto">
        <table class="table-auto min-w-full bg-white shadow-md rounded-lg overflow-hidden">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Presentación</th>
                    <th class="px-4 py-2">Precio</th>
                    <th class="px-4 py-2">Stock</th>
                    <th class="px-4 py-2">Marca</th>
                    <th class="px-4 py-2">Categoría</th>
                    <th class="px-4 py-2">Proveedor</th>
                    <th class="px-4 py-2">Etapa</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach($productos as $producto)
                    <tr>
                        <td class="border px-4 py-2">{{ $producto->nombre }}</td>
                        <td class="border px-4 py-2">{{ $producto->presentacion }}</td>
                        <td class="border px-4 py-2">{{ $producto->precio_unitario }}</td>
                        <td class="border px-4 py-2">{{ $producto->stock }}</td>
                        <td class="border px-4 py-2">{{ $producto->marca->nombre }}</td>
                        <td class="border px-4 py-2">{{ $producto->categoria->tipo_mascota }}</td>
                        <td class="border px-4 py-2">{{ $producto->proveedor->nombre }}</td>
                        <td class="border px-4 py-2">{{ $producto->etapa->edad }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
