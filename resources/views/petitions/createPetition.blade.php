<x-main-layout titulo="Crear petición">
    <a href="{{ route('petition.index') }}" class="btn btn-primary">Regresar</a>
    <hr>
    <div class="card-body">
        <form action="{{ route('petition.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="equipo_id">Equipo Médico: </label>
                <select name="equipo_id" class="form-control" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    @foreach($equipment as $equip)
                        <option value="{{ $equip->id }}">{{ $equip->nombre }}</option>
                    @endforeach
                </select>
                @error('equipo_id')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div> 
            <br>

            <div class="form-group">
                <label for="accesorio_id">Accesorio: </label>
                <select name="accesorio_id" class="form-control" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    @foreach($accessories as $accessory)
                        <option value="{{ $accessory->id }}">{{ $accessory->nombre }}</option>
                    @endforeach
                </select>
                @error('accesorio_id')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            <br>
            
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</x-main-layout>