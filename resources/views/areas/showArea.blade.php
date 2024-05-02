<x-main-layout titulo="Mostrar area">
    <header><a class="btn btn-primary" href="{{route('areas.index')}}">Regresar</a></header>
    <hr>
    <h1>Area ID {{$area->id}}</h1>
    <ul>
        <li>ID {{$area->id}}</li>
        <li>Piso {{$area->piso}}</li>
        <li>Servicio {{$area->servicio}}</li>
        <li>Jefe de area {{$area->jefe_ing}}</li>
        <li>Biomedico encargado {{$area->ingBiomedico_id}}</li>
        <li>Fecha de creación {{$area->created_at}}</li>
        <li>Fecha de ultima modificación {{$area->updated_at}}</li>
    </ul>
</x-main-layout>