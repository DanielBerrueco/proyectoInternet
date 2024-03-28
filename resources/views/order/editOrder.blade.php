<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Orden</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bod">
    <div class="nav2">

        
        <a href="info">Hacia info</a>
        <hr>
       
   
        <form action=" {{route('order.update', $order->id) }}" method="POST">
            @csrf
            @method('PATCH')  
            <label for="status">Status</label>
            <input type="text"  name="status" value="{{ $order->status }}">
            <br><br>
            <label for="jefa_id">Id Jefa</label>
            <input type="text"  name="jefa_id" value="{{ $order->jefa_id }}">
            <br><br>
            <label for="equipo_id">Id Equipo Medico</label>
            <input type="text" id="equipo_id" name="equipo_id" value="{{ $order->equipo_id }}">
            <br><br>
            <label for="area_id">Id Area</label>
            <input type="text" id="area_id" name="area_id" value="{{ $order->area_id }}">
            <br><br>
            <label for="ubicacion">Ubicacion</label>
            <input type="text" id="ubicacion" name="ubicacion" value="{{ $order->ubicacion }}">
            <br><br>
            <label for="falla">Descripcion falla</label>
            <br>
            <textarea name="falla" cols="30" rows="10"> {{ $order->falla }} </textarea>
            <br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>
</body>
</html>

