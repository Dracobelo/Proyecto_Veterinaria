@extends('cliente.layout')

@section('title', 'Tienda')

@section('content')
<div class="container mx-auto mt-10">
    <h1 class="text-2xl font-bold mb-5">Tienda</h1>
    <div class="flex flex-wrap -mx-4">
        @foreach($productos as $producto)
            <div class="w-full sm:w-1/2 lg:w-1/3 px-4 mb-6">
                <div class="bg-white shadow-md rounded-lg overflow-hidden transform hover:scale-105 transition-transform duration-300">
                    <div class="p-4 text-center">
                        @if($producto->imagen)
                            <img src="{{ asset('storage/' . $producto->imagen) }}" class="w-full h-48 object-cover mb-3" alt="{{ $producto->nombre }}">
                        @else
                            <p class="text-gray-500">Imagen no disponible</p>
                        @endif
                        <h5 class="text-lg font-semibold">{{ $producto->nombre }}</h5>
                        <p class="text-gray-600">Marca: {{ $producto->marca->nombre }}</p>
                        <p class="text-gray-600">Precio: ${{ number_format($producto->precio_unitario, 2) }}</p>
                        <p class="text-gray-600">Stock: {{ $producto->stock > 0 ? 'Disponible' : 'No Disponible' }}</p>
                        <form action="{{ route('cliente.carrito.add', $producto) }}" method="POST" class="mt-4">
                            @csrf
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors duration-300">Añadir al carrito</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
