<x-main-layout titulo="Lista de accesorios">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Stock actual</td>
                    <td>Stock mínimo</td>
                    <td>Ubicación</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <td>Id</td>
                    <td>Nombre</td>
                    <td>Stock actual</td>
                    <td>Stock mínimo</td>
                    <td>Ubicación</td>
                    <td>Acciones</td>
                </tr>
            </tfoot>
            <tbody>
                @foreach($accessories as $accessory)
                    <tr>
                        <td>{{ $accessory -> id }}</td>
                        <td>{{ $accessory-> nombre }}</td>
                        <td>{{ $accessory -> stock }}</td>
                        <td>{{ $accessory -> minimo }}</td>
                        <td>{{  $accessory -> Ubicación }}</td>
                        <td>
                            <a href="{{ route('accessory.show', $accessory) }}" class="btn btn-primary">Ver detalles</a>
                            <a href="{{ route('accessory.edit', $accessory) }}" class="btn btn-primary">Editar</a>
                            <form action="{{ route('accessory.destroy', $accessory) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Eliminar" class="btn btn-primary">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('accessory.create') }}" class="btn btn-primary">Agregar nuevo accesorio</a>
    </div>
    
</x-main-layout>