<x-main-layout titulo="Listado de órdenes">
    <div class="card-body">  
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Orden</th>
                    <th>Status</th>
                    <th>Jefa</th>
                    <th>Equipo</th>
                    <th>Ing Biomedico</th>
                    <th>Area</th>
                    <th>Ubicacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>   
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ $order->stats }}</td>
                        <td>{{ $order->user2->name }}</td>
                        <td>{{ $order->equipment->nombre }}</td>
                        <td>{{ $order->user->name  }}</td>
                        <td>{{ $order->area->servicio }}</td>
                        <td>{{ $order->ubicacion }}</td> 
                        <td>
                            <a class="btn btn-primary" href="{{ route('order.show', $order) }}">Ver detalles</a>
                            <a  class="btn btn-primary" href="{{ route('order.edit', $order) }}">Editar</a>
                            <form action= "{{ route('order.destroy', $order) }}" method= "POST">
                                @csrf
                                @method( 'DELETE')
                                <input type="submit" class="btn btn-primary" value="Eliminar">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('order.create')}}" class="btn btn-primary" id="crearOrden">Crear Orden</a>
        <div class="alert alert-warning alert-dismissible fade" role="alert" id="alertaEnfermero">
            <strong>¡Parece que no eres Enfermero!</strong> Recuerda que sólo los enfermeros pueden levantar órdenes de servicio.
        </div>
    </div>
</x-main-layout>