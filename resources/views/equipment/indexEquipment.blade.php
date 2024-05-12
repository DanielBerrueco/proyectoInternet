<x-main-layout titulo="Listado de equipo médico">
    <div class="card-body">  
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Número de Serie</th>
                    <th>Status</th>
                    <th>Area</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipments as $equipment)
                    <tr>
                        <td>{{ $equipment->id}}</td>
                        <td>{{ $equipment->nombre}}</td>
                        <td>{{ $equipment->marca}}</td>
                        <td>{{ $equipment->modelo}}</td>           
                        <td>{{ $equipment->n_serie}}</td>
                        <td>{{ $equipment->status_eq_med}}</td> 
                        <td>{{ $equipment->area->servicio}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ route('equipment.show', $equipment) }}">Ver detalles</a>
                            <a class="btn btn-primary" href="{{ route('equipment.edit', $equipment) }}">Editar</a>
                            <form action= "{{ route('equipment.destroy', $equipment) }}" method= "POST">
                                @csrf
                                @method( 'DELETE')
                            

                                <input type="submit" class="btn btn-primary" value="Eliminar">
                            
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('equipment.create')}}" class="btn btn-primary">Agregar Equipo</a>
    </div>
</x-main-layout>