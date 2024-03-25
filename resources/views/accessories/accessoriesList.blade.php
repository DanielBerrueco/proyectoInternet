<x-main-layout titulo="Lista de accesorios">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Stock actual</th>
                    <th>Stock mínimo</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($accessories as $accessory)
                    <tr>
                        <td>{{ $accessory -> id }}</td>
                        <td>{{ $accessory -> nombre }}</td>
                        <td>{{ $accessory -> stock }}</td>
                        <td>{{ $accessory -> minimo }}</td>
                        <td>{{ $accessory -> ubicacion }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('accessory.show', $accessory) }}">Ver detalles</a> 
                            <a class="btn btn-primary" href="{{ route('accessory.edit', $accessory) }}">Editar</a> 
                            <form action="{{ route('accessory.destroy', $accessory) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input class="btn btn-primary" type="submit" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('accessory.create') }}">Agregar nuevo accesorio</a>
    </div>
</x-main-layout>