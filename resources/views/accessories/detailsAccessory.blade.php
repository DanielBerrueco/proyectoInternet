<x-main-layout titulo="Detalles del accesorio">
  <a href="{{ route('accessory.index') }}" class="btn btn-primary">Regresar</a>
  <hr>
  <div class="card-body">
    <h3 class="h3">ID de accesorio: {{ $accessory->id }}</h3>
    <ul class="list-group list-group-flush">
        <li class="list-group-item"><span class="h5">Nombre: </span>{{ $accessory -> nombre }}</li>
        <li class="list-group-item"><span class="h5">Stock actual: </span>{{ $accessory -> stock }}</li>
        <li class="list-group-item"><span class="h5">Stock minimo: </span>{{ $accessory -> minimo }}</li>
        <li class="list-group-item"><span class="h5">Ubicación: </span>{{ $accessory -> ubicacion }}</li>
        <li class="list-group-item"><span class="h5">Fecha y hora de creación: </span>{{ $accessory -> created_at }}</li>
        <li class="list-group-item"><span class="h5">Fecha y hora de modificación: </span>{{ $accessory -> updated_at }}</li>
    </ul>
  </div>
</x-main-layout>