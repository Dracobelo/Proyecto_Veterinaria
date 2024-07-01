@extends('empleado.layout')

@section('content')
    <div class="container mx-auto mt-5 ml-4 mr-4">
        <h2 class="text-2xl font-bold mb-5">Editar Mascota</h2>
        <form method="POST" action="{{ route('empleado.clientes.mascotas.update', [$cliente->id_cliente, $mascota->id_mascota]) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ $mascota->nombre }}" required>
            </div>
            <div class="mb-4">
                <label for="meses" class="block text-sm font-medium text-gray-700">Meses:</label>
                <input type="number" id="meses" name="meses" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ $mascota->meses }}" required>
            </div>
            <div class="mb-4">
                <label for="años" class="block text-sm font-medium text-gray-700">Años:</label>
                <input type="number" id="años" name="años" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ $mascota->años }}" required>
            </div>
            <div class="mb-4">
                <label for="peso" class="block text-sm font-medium text-gray-700">Peso:</label>
                <input type="number" id="peso" name="peso" class="form-input mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" value="{{ $mascota->peso }}" required>
            </div>
            <div class="mb-4">
                <label for="id_raza" class="block text-sm font-medium text-gray-700">Raza:</label>
                <select id="id_raza" name="id_raza" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" selected disabled>Seleccionar Raza</option>
                    @foreach($razas as $raza)
                        <option value="{{ $raza->id_raza }}" {{ $mascota->id_raza == $raza->id_raza ? 'selected' : '' }}>{{ $raza->raza }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_tipo_mascota" class="block text-sm font-medium text-gray-700">Tipo:</label>
                <select id="id_tipo_mascota" name="id_tipo_mascota" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" selected disabled>Seleccionar Tipo</option>
                    @foreach($tipos as $tipo)
                        <option value="{{ $tipo->id_tipo_mascota }}" {{ $mascota->id_tipo_mascota == $tipo->id_tipo_mascota ? 'selected' : '' }}>{{ $tipo->tipo }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_genero" class="block text-sm font-medium text-gray-700">Género:</label>
                <select id="id_genero" name="id_genero" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" selected disabled>Seleccionar Género</option>
                    @foreach($generos as $genero)
                        <option value="{{ $genero->id_genero }}" {{ $mascota->id_genero == $genero->id_genero ? 'selected' : '' }}>{{ $genero->genero }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <label for="id_etapa" class="block text-sm font-medium text-gray-700">Etapa:</label>
                <select id="id_etapa" name="id_etapa" class="form-select mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                    <option value="" selected disabled>Seleccionar Etapa</option>
                    @foreach($etapas as $etapa)
                        <option value="{{ $etapa->id_etapa }}" {{ $mascota->id_etapa == $etapa->id_etapa ? 'selected' : '' }}>{{ $etapa->edad }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
