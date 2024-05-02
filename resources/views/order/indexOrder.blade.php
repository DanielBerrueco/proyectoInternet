<x-main-layout titulo="Index">
<h1>Listado de Ordenes</h1> 
<div class="card-body">  
<table id="datatablesSimple">
    <thead>
        <tr>
            <th>Id orden</th>
            <th>Status</th>
            <th>Id jefa</th>
            <th>Id equipo</th>
            <th>Id Ing Biomedico</th>
            <th>Id area</th>
            <th>Ubicacion</th>
            <th>Falla</th>
            <th>Fecha de creacion:   </th>
            <th>Fecha ejecuccion:   </th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>   
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->stats }}</td>
                <td>{{ $order->jefa_id }}</td>
                <td>{{ $order->equipo_id }}</td>
                <td>{{ $order->ingBiomedico_id }}</td>
                <td>{{ $order->area_id }}</td>
                <td>{{ $order->ubicacion }}</td>
                <td>{{ $order->falla }}</td>   
                <td>{{ $order->created_at }}</td> 
                <td>{{ $order->fecha_ejecucion }}</td> 
                <td>
                    <a class="btn btn-primary" href="{{ route('order.show', $order) }}">Ver</a>
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
</x-main-layout>