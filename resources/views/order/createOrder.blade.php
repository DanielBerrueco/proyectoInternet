<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden Equipo Medico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bod">
    <div class="nav2">

        <a href="{{route('order.index') }}">Listado</a>
        <hr>
       

        <form action="{{route('order.store') }}" method="POST">
            @csrf
            
            <label for="status">Status: </label>
            <input type="text" name="status" value="{{old('status') }}" required>
            @error('status')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror    
            <br><br>
            
            <label for="jefa_id">Id Jefa: </label>
            <input type="text" name="jefa_id" value="{{old('jefa_id') }}" required>
            @error('jefa_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror    
            <br><br>

            <label for="equipo_id">Id Equipo Medico: </label>
            <input type="text" id="equipo_id" name="equipo_id" value="{{old('equipo_id')}}" required>
            @error('equipo_id')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <br><br>


            <label for="area_id">Id Area: </label>
            <input type="text" id="area_id" name="area_id" value="{{old('area_id')}}" required>
            @error('area_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="ubicacion">Ubicacion: </label>
            <input type="text" id="ubicacion" name="ubicacion" value="{{old('ubicacion')}}" required>
            @error('ubicacion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <br><br>

            <label for="falla">Descripcion falla: </label><br>
            <textarea name="falla" id="" cols="30" rows="10" value="{{old('falla')}}" required></textarea>
            @error('falla')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <br><br>

            <button type="submit">Enviar</button>
        </form>
       
    </div>
</body>
</html>