<x-main-layout titulo="Lista_Peticiones">
    <div class="card-body">
        <table id ="datatablesSimple">
            <thead>
                <tr>
                    <th>ID Peticion</th>
                    <th>ID Equipo Medico</th>
                    <th>ID Accesorio</th>
                    <th>ID Ingeniero Biomedico</th>
                    <th>Fecha y Hora</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($petitions as $petition)
                    <tr>
                        <td>{{$petition->id}}</td>
                        <td>{{$petition->equipo_id}}</td>
                        <td>{{$petition->accesorio_id}}</td>
                        <td>{{$petition->ingBiomedico_id}}</td>
                        <td>{{$petition->fecha_hora}}</td>
                        <td><a class="btn btn-primary" href="{{route('petition.show', $petition)}}">Ver detalles</a>
                            <a class="btn btn-primary" href="{{route('petition.edit', $petition)}}">Editar</a>
                            <form action="{{route('petition.destroy', $petition)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-primary" type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
        <br>
        <a class="btn btn-primary" href="{{route('petition.create')}}"> Registrar Petición</a>
    </div>
</x-main-layout>