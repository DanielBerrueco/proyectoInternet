<x-main-layout titulo="Detalles">
    <a href="{{ route('petition.index') }}" class="btn btn-primary">Regresar</a>
    <hr>
    <div class="card-body">
        <h3 class="h3">Id de petición: {{ $petition -> id }}</h3>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Id</th>
                </tr>
                <tr>
                    <th scope="row">Equipo médico: </th>
                    <td>{{ $petition -> equipment -> nombre }}</td>
                    <td>{{ $petition -> equipo_id }}</td>
                </tr>
                <tr>
                    <th scope="row">Accesorio: </th>
                    <td>{{ $petition -> accessory -> nombre }}</td>
                    <td>{{ $petition -> accesorio_id }}</td>
                </tr>
                <tr>
                    <th scope="row">Ingeniero biomédico: </th>
                    <td>{{ $petition -> user -> name }}</td>
                    <td>{{ $petition -> ingBiomedico_id }}</td>
                </tr>
            </tbody>
        </table>
        <span class="h6">Fecha de ejecucion:</span> {{ $petition->fecha_hora}}
    </div>
</x-main-layout>

