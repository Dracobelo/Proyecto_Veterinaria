@extends('empleado.layout')

@section('content')
    <div class="container mx-auto mt-5 ml-4 mr-4">
        <h2 class="text-2xl font-bold mb-5">Registrar Mascota</h2>
        <form method="POST" action="{{ route('empleado.clientes.mascotas.store', $cliente->id_cliente) }}">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
            </div>
            <div class="mb-4">
                <label for="meses" class="block text-sm font-medium text-gray-700">Meses:</label>
                <input type="number" id="meses" name="meses" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
            </div>
            <div class="mb-4">
                <label for="años" class="block text-sm font-medium text-gray-700">Años:</label>
                <input type="number" id="años" name="años" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
            </div>
            <div class="mb-4">
                <label for="peso" class="block text-sm font-medium text-gray-700">Peso:</label>
                <input type="number" id="peso" name="peso" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
            </div>
            <div class="mb-4">
                <label for="id_raza" class="block text-sm font-medium text-gray-700">Raza:</label>
                <select id="id_raza" name="id_raza" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" selected disabled>Seleccionar Raza</option>
                    @foreach($razas as $raza)
                        <option value="{{ $raza->id_raza }}">{{ $raza->raza }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_tipo_mascota" class="block text-sm font-medium text-gray-700">Tipo:</label>
                <select id="id_tipo_mascota" name="id_tipo_mascota" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" selected disabled>Seleccionar Tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id_tipo_mascota }}">{{ $tipo->tipo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_genero" class="block text-sm font-medium text-gray-700">Género:</label>
                <select id="id_genero" name="id_genero" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" selected disabled>Seleccionar Género</option>
                    @foreach($generos as $genero)
                        <option value="{{ $genero->id_genero }}">{{ $genero->genero }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_etapa" class="block text-sm font-medium text-gray-700">Etapa:</label>
                <select id="id_etapa" name="id_etapa" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" selected disabled>Seleccionar Etapa</option>
                    @foreach($etapas as $etapa)
                        <option value="{{ $etapa->id_etapa }}">{{ $etapa->edad }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection
