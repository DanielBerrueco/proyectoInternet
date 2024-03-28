<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
<h1>Listado de Ordenes</h1> 

<table border="1">
    <thead>
        <tr>
            <th>Id orden</th>
            <th>Status</th>
            <th>Id jefa</th>
            <th>Id equipo</th>
            <th>Id_area</th>
            <th>Ubicacion</th>
            <th>Falla</th>
        
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->jefa_id }}</td>
                <td>{{ $order->equipo_id }}</td>
                <td>{{ $order->area_id }}</td>
                <td>{{ $order->ubicacion }}</td>
                <td>{{ $order->falla }}</td>   
                <td>{{ $order->created_at }}</td> 
                <td>
                    <a href="{{ route('order.show', $order) }}">Ver</a>
                    <a href="{{ route('order.edit', $order) }}">Editar</a>
                    <form action= "{{ route('order.destroy', $order) }}" method= "POST">
                        @csrf
                        @method( 'DELETE')
                        <input type="submit" value="Eliminar">
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</body>
</html>