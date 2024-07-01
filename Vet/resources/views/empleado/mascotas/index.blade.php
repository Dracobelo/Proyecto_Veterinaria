@extends('empleado.layout')

@section('content')
    <div class="container mx-auto mt-5">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="text-2xl font-bold mb-3">Mascotas</h2>
        @if(isset($cliente))
            <a href="{{ route('empleado.clientes.mascotas.create', $cliente->id_cliente) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-3 inline-block">Registrar Mascota</a>
        @endif
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-4 py-2">Nombre</th>
                        <th class="px-4 py-2">Meses</th>
                        <th class="px-4 py-2">Años</th>
                        <th class="px-4 py-2">Peso</th>
                        <th class="px-4 py-2">Raza</th>
                        <th class="px-4 py-2">Tipo</th>
                        <th class="px-4 py-2">Género</th>
                        <th class="px-4 py-2">Etapa</th>
                        <th class="px-4 py-2">Acciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @forelse($mascotas as $mascota)
                        <tr>
                            <td class="border px-4 py-2">{{ $mascota->nombre }}</td>
                            <td class="border px-4 py-2">{{ $mascota->meses }}</td>
                            <td class="border px-4 py-2">{{ $mascota->años }}</td>
                            <td class="border px-4 py-2">{{ $mascota->peso }}</td>
                            <td class="border px-4 py-2">{{ $mascota->raza->raza }}</td>
                            <td class="border px-4 py-2">{{ $mascota->tipoMascota->tipo }}</td>
                            <td class="border px-4 py-2">{{ $mascota->genero->genero }}</td>
                            <td class="border px-4 py-2">{{ $mascota->etapa->edad }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ route('empleado.clientes.mascotas.edit', ['cliente' => $mascota->cliente->id_cliente, 'mascota' => $mascota->id_mascota]) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Editar</a>
                                <form action="{{ route('empleado.clientes.mascotas.destroy', ['cliente' => $mascota->cliente->id_cliente, 'mascota' => $mascota->id_mascota]) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="border px-4 py-2" colspan="9">{{ $message ?? 'No hay mascotas registradas.' }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
