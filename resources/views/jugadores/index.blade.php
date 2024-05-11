@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-4">Jugadores</h2>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Número de Camiseta</th>
                        <th class="text-center">Posición</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jugadores as $jugador)
                        <tr>
                            <td class="text-center">{{ $jugador->nombre }}</td>
                            <td class="text-center">{{ $jugador->numero_camiseta }}</td>
                            <td class="text-center">{{ $jugador->posicion }}</td>
                            <td class="text-center">
                                <a href="{{ route('jugadores.edit', $jugador->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
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
