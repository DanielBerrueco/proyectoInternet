<x-main-layout titulo="Lista Areas">
    <h1>Lista de areas</h1>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <th>ID</th>
                <th>Piso</th>
                <th>Servicio</th>
                <th>ID del jefe</th>
                <th>ID Ing Biomedico</th>
                <th>Acciones</th>
            </thead>
            <tbody>
                @foreach($areas as $area)
                <tr>
                    <td>{{$area->id}}</td>
                    <td>{{$area->piso}}</td>
                    <td>{{$area->servicio}}</td>
                    <td>{{$area->user2->name}}</td>
                    <td>{{$area->user->name}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('areas.show',$area)}}">Ver Info</a>
                        <a class="btn btn-primary" href="{{route('areas.edit', $area)}}">Editar Area</a>
                        <form action="{{route('areas.destroy', $area)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-primary" type="submit" value="eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('areas.create')}}">Agregar Area</a>

    </div>
</x-main-layout>