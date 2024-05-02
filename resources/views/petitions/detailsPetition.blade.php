<x-main-layout titulo="Detalles">
    <a href="{{ route('petition.index') }}" class="btn btn-primary">Regresar</a>
    <div class="card-body">
        <h1>Id de petición: {{ $petition -> id }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                </tr>
                <tr>
                    <th scope="row">Equipo médico: </th>
                    <td>{{ $petition -> equipo_id }}</td>
                    <td>{{ $petition -> equipment -> nombre }}</td>
                </tr>
                <tr>
                    <th scope="row">Accesorio: </th>
                    <td>{{ $petition -> accesorio_id }}</td>
                    <td>{{ $petition -> accessory -> nombre }}</td>
                </tr>
                <tr>
                    <th scope="row">Ingeniero biomédico: </th>
                    <td>{{ $petition -> ingBiomedico_id }}</td>
                    <td>{{ $petition -> user -> name }}</td>
                </tr>
                <tr>
                    <th scope="row">Fecha de creación: </th>
                    <td>{{ $petition -> fecha_hora }}</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</x-main-layout>

