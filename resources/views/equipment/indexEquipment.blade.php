<x-main-layout titulo="Index">

<h1>Listado de Equipo Medico</h1> 
    <div class="card-body">  
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>No. Serie</th>
                    <th>Accesorios</th>
                    <th>Status</th>
                    <th>Area</th>
                    <th>Fecha</th>
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
                        <td>
                            @foreach ($accessories[$equipment->id] as $accessory_id)
                                <li class="list-group-item">{{ $accessory_id }}</li>
                            @endforeach
                        </td>
                        <td>{{ $equipment->status_eq_med}}</td> 
                        <td>{{ $equipment->area->servicio}}</td>  
                        <td>{{ $equipment->created_at}}</td> 
                        <td>
                            <a class="btn btn-primary" href="{{ route('equipment.show', $equipment) }}">Ver</a>
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