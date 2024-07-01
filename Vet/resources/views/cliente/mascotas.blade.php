@extends('cliente.layout')

@section('title', 'Mis Mascotas')

@section('content')
<div class="container mx-auto mt-10 p-5 bg-white shadow-md rounded-lg border border-gray-300">
    <h1 class="text-2xl font-bold mb-5">Mis Mascotas</h1>
    @if(isset($message))
        <div class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative mb-5" role="alert">
            <span class="block sm:inline">{{ $message }}</span>
        </div>
    @else
        <table class="table-auto w-full text-left">
            <thead>
                <tr>
                    <th class="px-4 py-2 border-b">Nombre</th>
                    <th class="px-4 py-2 border-b">Meses</th>
                    <th class="px-4 py-2 border-b">Años</th>
                    <th class="px-4 py-2 border-b">Peso</th>
                    <th class="px-4 py-2 border-b">Género</th>
                    <th class="px-4 py-2 border-b">Tipo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mascotas as $mascota)
                    <tr>
                        <td class="px-4 py-2 border-b">{{ $mascota->nombre }}</td>
                        <td class="px-4 py-2 border-b">{{ $mascota->meses }}</td>
                        <td class="px-4 py-2 border-b">{{ $mascota->años }}</td>
                        <td class="px-4 py-2 border-b">{{ $mascota->peso }}</td>
                        <td class="px-4 py-2 border-b">{{ $mascota->genero->genero }}</td>
                        <td class="px-4 py-2 border-b">{{ $mascota->tipoMascota->tipo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
