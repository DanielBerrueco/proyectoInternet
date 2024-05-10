<x-main-layout titulo="Lista de peticiones">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Equipo médico</th>
                    <th>Accesorio</th>
                    <th>Ingeniero Biomédico</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($petitions as $petition)
                    <tr>
                        <td>{{ $petition -> id }}</td>
                        <td>{{ $petition -> equipment -> nombre }}</td>
                        <td>{{ $petition -> accessory -> nombre }}</td>
                        <td>{{ $petition -> user -> name }}</td>
                        <td>{{ $petition -> fecha_hora }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('petition.show', $petition) }}">Ver detalles</a> 
                            <a class="btn btn-primary" href="{{ route('petition.edit', $petition) }}">Editar</a> 
                            <form action="{{ route('generar.pdf') }}" method="GET">
                                @csrf 
                                <input type="hidden" name="petition" value="{{ json_encode($petition) }}">
                                <input class="btn btn-primary" type="submit" value="Descargar PDF">
                            </form>
                            <!-- <a href="{{ route('generar.pdf') }}" class="btn btn-primary">Descargar PDF</a> -->
                            <form action="{{ route('petition.destroy', $petition) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-primary" type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('petition.create') }}" id="crearPeticion">Agregar nueva petición</a>
        <div class="alert alert-warning alert-dismissible fade" role="alert" id="alertaIngeniero">
            <strong>¡Parece que no eres Ingeniero biomédico!</strong> Recuerda que sólo los Ingenieros biomédicos pueden levantar peticiones.
        </div>
    </div>
</x-main-layout>