<x-main-layout titulo="Listado de Áreas">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <th>Área</th>
                <th>Piso</th>
                <th>Servicio</th>
                <th>Jefe</th>
                <th>Ingeniero biomedico</th>
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
                        <a class="btn btn-primary" href="{{route('areas.show',$area)}}">Ver detalles</a>
                        <a class="btn btn-primary" href="{{route('areas.edit', $area)}}">Editar área</a>
                        <form action="{{route('areas.destroy', $area)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-primary" type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{route('areas.create')}}">Agregar área</a>

    </div>
</x-main-layout>