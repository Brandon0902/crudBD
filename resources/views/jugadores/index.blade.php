@extends('layouts.app')

@section('content')
<div class="container mx-auto">
    <div class="py-8">
        <h2 class="text-3xl font-semibold mb-6">Jugadores</h2>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="px-4 py-2 text-left">Nombre</th>
                        <th class="px-4 py-2 text-left">Número de Camiseta</th>
                        <th class="px-4 py-2 text-left">Posición</th>
                        <th class="px-4 py-2 text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jugadores as $jugador)
                    <tr>
                        <td class="px-4 py-2 border border-gray-300">{{ $jugador->nombre }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $jugador->numero_camiseta }}</td>
                        <td class="px-4 py-2 border border-gray-300">{{ $jugador->posicion }}</td>
                        <td class="px-4 py-2 border border-gray-300">
                            <a href="{{ route('jugadores.edit', $jugador->id) }}" class="text-blue-500 hover:text-blue-700 mr-2">
                                <i class="fas fa-pencil-alt"></i> 
                            </a>
                            <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700">
                                    <i class="fas fa-trash-alt"></i> 
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
