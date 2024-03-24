<x-main-layout titulo="Detalles">
  <a href="{{ route('accessory.index') }}" class="btn btn-primary">Regresar</a>
  <div class="card-body">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: {{ $accessory -> id }}</li>
        <li class="list-group-item">Nombre: {{ $accessory -> nombre }}</li>
        <li class="list-group-item">Stock actual: {{ $accessory -> stock }}</li>
        <li class="list-group-item">Stock minimo: {{ $accessory -> minimo }}</li>
        <li class="list-group-item">Ubicación: {{ $accessory -> ubicacion }}</li>
        <li class="list-group-item">Fecha y hora de creación: {{ $accessory -> created_at }}</li>
        <li class="list-group-item">Fecha y hora de modificación: {{ $accessory -> updated_at }}</li>
    </ul>
  </div>
</x-main-layout>