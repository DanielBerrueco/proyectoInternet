<x-main-layout titulo="Editar orden">
<a href="{{route('order.index') }}" class="btn btn-primary">Regresar</a>
<hr>
    <div class="card-body">
        <form action=" {{route('order.update', $order->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">  
            <select name="stats" id="stats" class="form-control">
                <option value="Funcionando" @selected($order->stats == 'Funcionando')>Funcionando</option>
                <option value="En reparacion" @selected($order->stats == 'En reparacion')>En reparacion</option>
                <option value="Fuera de servicio" @selected($order->stats == 'Fuera de servicio')>Fuera de servicio</option>
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
                <label for="ubicacion">Ubicacion</label>
                <input type="text" id="ubicacion" name="ubicacion" value="{{ $order->ubicacion }}" class="form-control">
                </div>
            <br>

            <div class="form-group">
            <label for="falla">Descripcion falla</label>
                <textarea name="falla" cols="30" rows="10" class="form-control"> {{ $order->falla }} </textarea>
            </div>
            <br>

            <div class="form-group">
                <label for="fecha_ejecucion">Fecha de ejecucion</label>
                <input type="date" id="fecha_ejecucion" name="fecha_ejecucion" value="{{ $order->fecha_ejecucion}}" class="form-control">
                </div>
            <br>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>

 </x-main-layout>
