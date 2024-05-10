<x-main-layout titulo="Mostar">
<a href="{{route('equipment.index')}}" class="btn btn-primary">Regresar</a>
    <h1>Id Equipo Medico: {{ $equipment->id}}</h1>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: {{ $equipment->id}}</li>
        <li  class="list-group-item">Nombre: {{ $equipment->nombre}}</li>
        <li  class="list-group-item">Marca: {{ $equipment->marca}}</li>
        <li  class="list-group-item">Modelo: {{ $equipment->modelo}}</li>
        <li  class="list-group-item">No. serie: {{ $equipment->n_serie}}</li>
        <li  class="list-group-item">Status: {{ $equipment->status_eq_med}}</li>
        <li  class="list-group-item">Id area: {{ $equipment->area_id}}</li>
        <li  class="list-group-item"> Fecha de creacion: {{ $equipment->created_at}} </li>
        <li  class="list-group-item"> Ultima modificacion: {{ $equipment->updated_at}} </li>
        <ul  class="list-group-item">Accesorios:
            <ul class="list-group list-group-flush">
                @foreach ($accessories[$equipment->id] as $accessory)
                    <li class="list-group-item">{{ $accessory}}</li>
                @endforeach
            </ul>
        </li>
        <ul class="list-group list-group-flush">Manual
            @if($equipment->archivo)
                <li class="list-group-item">
                    <a href="{{ route('equipment.download', $equipment->archivo) }}" class="btn btn-primary">
                        Descargar
                    </a>
                </li>
            @else
            <div class="alert alert-danger" role="alert">
                No hay manual cargado. Si quiere agregar <a href="{{ route('equipment.edit', $equipment) }}" class="alert-link">haga clic aquí.</a>
              </div>
            @endif    
        </li>
    </ul>
</x-main-layout>