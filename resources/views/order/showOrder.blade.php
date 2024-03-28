<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info de Ordenes</title>
</head>
<body>
    <h1>Id Orden: {{ $order->id}}</h1>
    <ul>
        <li>Id: {{ $order->id}}</li>
        <li>Status: {{ $order->status}}</li>
        <li>Id Jefa: {{ $order->jefa_id}}</li>
        <li>Id Equipo Medico: {{ $order->equipo_id}}</li>
        <li>Id Area: {{ $order->area_id}}</li>
        <li>Ubicacion: {{ $order->ubicacion}}</li>
        <li>Falla: {{ $order->falla}}</li>
        <li> Fecha de creacion: {{ $order->created_at}} </li>
        <li>Ultima modificacion: {{ $order->updated_at}} </li>
    </ul>
</body>
</html>
