<x-main-layout titulo="Crear">
    <div class="card-body">>

        <a href="{{route('order.index') }}" class="btn btn-primary">Mostrar Listado de Oredenes de Servicio</a>
        <hr>
       
        
        <form action="{{route('order.store') }}" method="POST">
            @csrf
            <div class="form-group">
            <label for="stats">Status</label>
            <select name="stats" id="stats">
                <option value="---">---------------</option>
                <option value="Funcionando" @selected (old('stats') ==  'Funcionando')>Funcionando</option>
                <option value="En reparacion" @selected(old('stats') ==  'En reparacion')>En reparacion</option>
                <option value="Fuera servicio" @selected(old('stats') ==  'Fuera servicio')>Fuera de servicio</option>
            </select>
            </div> 

            <br><br>
            <div class="form-group">
            <label for="jefa_id">Id Jefa: </label>
            <input type="text" name="jefa_id" value="{{old('jefa_id') }}" required class="form-control">
            @error('jefa_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>   
            <br><br>
            

            <div class="form-group">
            <label for="equipo_id">Id Equipo Medico: </label>
            <input type="text" id="equipo_id" name="equipo_id" value="{{old('equipo_id')}}" required class="form-control">
            @error('equipo_id')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            </div> 
            <br><br>
            
            <div class="form-group">
            <label for="ingBiomedico_id">Id Ing Biomedico: </label>
            <input type="text" name="ingBiomedico_id" value="{{old('ingBiomedico_id') }}" required class="form-control">
            @error('ingBiomedico_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>   
            <br><br>

            
            <div class="form-group">
            <label for="area_id">Id Area: </label>
            <input type="text" id="area_id" name="area_id" value="{{old('area_id')}}" required class="form-control">
            @error('area_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div> 
            <br><br>
            <div class="form-group">
            <label for="ubicacion">Ubicacion: </label>
            <input type="text" id="ubicacion" name="ubicacion" value="{{old('ubicacion')}}" required class="form-control">
            @error('ubicacion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <br><br>
            <div class="form-group">
            <label for="falla">Descripcion falla: </label><br>
            <textarea name="falla" id="" cols="30" rows="10" value="{{old('falla')}}" required class="form-control"></textarea>
            @error('falla')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <div class="form-group">
            <label for="fecha_ejecucion">Fecha de ejecucion: </label>
            <input type="date" id="fecha_ejecucion" name="fecha_ejecucion" value="{{old('fecha_ejecucion')}}" required class="form-control">
            @error('fecha_ejecucion')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</x-main-layout>