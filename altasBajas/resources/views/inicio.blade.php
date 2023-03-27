@extends('layouts/main')
@section('contenido')
    <p class="fs-2 text-center"><td class="icocod">&#128184;</td>Ingresos</p>
    <a href="/create" class=" btn btn-primary">Agregar ingresos</a>
    <div class="card mt-4 fs-2" style="background-color: rgb(255, 246, 254);">
        <div class="card-body">
            <p><td class="icocod">&#128176;</td>Ingresos total: {{ $resultado }}</p>
            <p><td class="icocod">&#128181;</td>Ingresos gastado total: {{ $perdido }}</p>
        </div>
    </div>
    <script>
        $(function() {
            $('#items-table').DataTable();
        });
    </script>
@endsection
