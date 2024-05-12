<x-main-layout titulo="Mostrar area">
    <a class="btn btn-primary" href="{{route('areas.index')}}">Regresar</a>
    <hr>
    <div class="card-body">
    <h3 class="h3">Area ID {{$area->id}}</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><span class="h5">Piso: </span> {{$area->piso}}</li>
            <li class="list-group-item"><span class="h5">Servicio: </span> {{$area->servicio}}</li>
            <li class="list-group-item"><span class="h5">Jefe de área: </span> {{$area->user2->name}}</li>
            <li class="list-group-item"><span class="h5">Biomédico encargado: </span> {{$area->user->name}}</li>
            <li class="list-group-item"><span class="h5">Fecha de creación: </span> {{$area->created_at}}</li>
            <li class="list-group-item"><span class="h5">Fecha de ultima modificación: </span> {{$area->updated_at}}</li>
        </ul>
    </div>
</x-main-layout>