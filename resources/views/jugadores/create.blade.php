@extends('layouts.app')

@section('content')
<div class="container h-100">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-8">
            <h2 class="text-center mb-4">Agregar Jugador</h2>
            <form method="POST" action="{{ route('jugadores.store') }}" class="needs-validation" novalidate>
                @csrf
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control border border-secondary" id="nombre" name="nombre" required>
                    <div class="invalid-feedback">
                        Por favor, ingresa el nombre del jugador.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="numero_camiseta" class="form-label">Número de Camiseta</label>
                    <input type="number" class="form-control border border-secondary" id="numero_camiseta" name="numero_camiseta" required>
                    <div class="invalid-feedback">
                        Por favor, ingresa el número de camiseta.
                    </div>
                </div>
                <div class="mb-3">
                    <label for="posicion" class="form-label">Posición</label>
                    <input type="text" class="form-control border border-secondary" id="posicion" name="posicion" required>
                    <div class="invalid-feedback">
                        Por favor, selecciona la posición.
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Crear Jugador</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var forms = document.querySelectorAll('.needs-validation');
        var validationList = Array.from(forms);
        validationList.forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    });
</script>
@endsection
