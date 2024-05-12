<x-main-layout titulo="Crear orden">
    <a href="{{route('order.index')}}" class="btn btn-primary">Regresar</a>
    <hr>
    <div class="card-body">
        <form action="{{route('order.store') }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="stats">Status</label>
            <select name="stats" id="stats" class="form-control" required>
                <option value="" disabled selected>Selecciona una opción</option>
                <option value="Funcionando" @selected (old('stats') ==  'Funcionando')>Funcionando</option>
                <option value="En reparacion" @selected(old('stats') ==  'En reparacion')>En reparacion</option>
                <option value="Fuera servicio" @selected(old('stats') ==  'Fuera servicio')>Fuera de servicio</option>
                @error('stats')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </select>
            </div>
            <br>

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
            <label for="ingBiomedico_id">Ingeniero Biomédico: </label>
            <select name="ingBiomedico_id" class="form-control" required>
                <option value="" disabled selected>Selecciona una opción</option>
                @foreach($biomedics as $biomedic)
                    <option value="{{ $biomedic->id }}">{{ $biomedic->name }}</option>
                @endforeach
            </select>
            @error('ingBiomedico_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>
            <br>

            <div class="form-group">
            <label for="area_id">Area: </label>
            <select name="area_id" class="form-control" required>
                <option value="" disabled selected>Selecciona una opción</option>
                @foreach($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->servicio }}</option>
                @endforeach
            </select>
            @error('area_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div> 
            <br>

            <div class="form-group">
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" value="{{old('ubicacion')}}" required class="form-control">
            @error('ubicacion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <br>

            <div class="form-group">
            <label for">Descripción falla:</label><br>
            <textarea name="falla" id="" cols="30" rows="10" value="{{old('falla')}}" required class="form-control"></textarea>
            @error('falla')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <br>
            
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</x-main-layout>