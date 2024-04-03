<x-main-layout titulo="Mostrar peticion">
    <header> <a class="btn btn-primary" href="{{route('petition.index')}}">Regresar</a></header>
    <hr>
    <h1>Peticion #{{$petition->id}}</h1>
    <ul>
        <li>ID {{$petition->id}}</li>
        <li>ID del equipo médico {{$petition->equipo_id}}</li>
        <li>ID del accesorio {{$petition->accesorio_id}}</li>
        <li>ID del ingeniero biomédico {{$petition->ingBiomedico_id}}</li>
        <li>Fecha y hora de peticion {{$petition->fecha_hora}}</li>
    </ul>
</x-main-layout>