@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="py-8">
        <h2 class="text-3xl font-semibold mb-6">Agregar Jugador</h2>
        <form method="POST" action="{{ route('jugadores.store') }}" class="w-full max-w-lg bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre</label>
                <input type="text" class="form-input border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="nombre" name="nombre" required>
                <div class="text-red-500 text-xs mt-1">
                    @error('nombre') {{ $message }} @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="numero_camiseta" class="block text-gray-700 text-sm font-bold mb-2">Número de Camiseta</label>
                <input type="number" class="form-input border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="numero_camiseta" name="numero_camiseta" required>
                <div class="text-red-500 text-xs mt-1">
                    @error('numero_camiseta') {{ $message }} @enderror
                </div>
            </div>
            <div class="mb-4">
                <label for="posicion" class="block text-gray-700 text-sm font-bold mb-2">Posición</label>
                <input type="text" class="form-input border border-gray-300 rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:border-blue-500" id="posicion" name="posicion" required>
                <div class="text-red-500 text-xs mt-1">
                    @error('posicion') {{ $message }} @enderror
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Crear Jugador</button>
            </div>
        </form>
    </div>
</div>
@endsection
