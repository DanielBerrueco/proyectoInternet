<x-main-layout titulo="Detalles de equipo médico">
    <a href="{{route('equipment.index')}}" class="btn btn-primary">Regresar</a>
    <hr>
    <div class="card-body">
        <h3 class="h3">Id Equipo Medico: {{ $equipment->id}}</h3>
        <ul class="list-group list-group-flush">
            <li  class="list-group-item"><span class="h5">Nombre: </span>{{ $equipment->nombre}}</li>
            <li  class="list-group-item"><span class="h5">Marca: </span>{{ $equipment->marca}}</li>
            <li  class="list-group-item"><span class="h5">Modelo: </span>{{ $equipment->modelo}}</li>
            <li  class="list-group-item"><span class="h5">Número de serie: </span>{{ $equipment->n_serie}}</li>
            <li  class="list-group-item"><span class="h5">Status: </span>{{ $equipment->status_eq_med}}</li>
            <li  class="list-group-item"><span class="h5">Área: </span>{{ $equipment->area->servicio}}</li>
            <li  class="list-group-item"><span class="h5">Fecha de creacion: </span>{{ $equipment->created_at}} </li>
            <li  class="list-group-item"><span class="h5">Ultima modificacion: </span> {{ $equipment->updated_at}} </li>
            <ul  class="list-group-item"><span class="h5">Accesorios:</span>
                <div style="height: 200px; overflow-y: auto;">
                    <ul class="list-group list-group-flush">
                        @foreach ($accessories[$equipment->id] as $accessory)
                            <li class="list-group-item">{{ $accessory}}</li>
                        @endforeach
                    </ul>
                </div>
            </li>
            <ul class="list-group list-group-flush"><span class="h5">Manual</span>
                @if($equipment->archivo)
                    <li class="list-group-item">
                        <a href="{{ route('equipment.download', $equipment->archivo) }}" class="btn btn-primary">
                            Descargar {{ $equipment->archivo->nombre_original }}
                        </a>
                    </li>
                @else
                <div class="alert alert-danger" role="alert">
                    No hay manual cargado. Si quiere agregar <a href="{{ route('equipment.edit', $equipment) }}" class="alert-link">haga clic aquí.</a>
                </div>
                @endif    
            </li>
        </ul>
    </div>
</x-main-layout>