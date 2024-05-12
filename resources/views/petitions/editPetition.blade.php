<x-main-layout titulo="Editar petición">
    <a href="{{ route('petition.index') }}" class="btn btn-primary">Regresar</a>
    <hr>
    <div class="card-body">
        <form action="{{ route('petition.update', $petition) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="equipo_id">Equipo Médico: </label>
                <select name="equipo_id" class="form-control" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    @foreach($equipment as $equip)
                        <option value="{{ $equip->id }}" @if($equip->nombre == $selectedEquip) selected @endif>{{ $equip->nombre }}</option>
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
                        <option value="{{ $accessory->id }}" @if($accessory->nombre == $selectedAccessory) selected @endif>{{ $accessory->nombre }}</option>
                    @endforeach
                </select>
                @error('accesorio_id')
                    <div class="alert alert-danger">{{ $message }} </div>
                @enderror
            </div>
            <br>

            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</x-main-layout>