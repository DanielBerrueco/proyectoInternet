<x-main-layout titulo="Crear">
  
        <div class="card-body">

        <a href="{{route('equipment.index') }}" class="btn btn-primary">Mostrar Listado de Equipos Medicos</a>
     
        <hr>

        <form action="{{route('equipment.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="{{old('nombre')}}" required class="form-control">
            @error('nombre')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>
            <br>

            <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca" value="{{old('marca')}}" required class="form-control">
            @error('marca')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror 
            </div>
            <br>

            <div class="form-group">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="{{old('modelo')}}" required class="form-control"> 
            @error('modelo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <br>
            <div class="form-group">
            <label for="n_serie">Número de serie</label>
            <input type="text" id="n_serie" name="n_serie" value="{{old('n_serie')}}" required class="form-control">
            @error('n_serie')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>

            <br>
            <div class="form-group">
            <label for="status_eq_med">Status</label>
            <select name="status_eq_med" id="status_eq_med" class="form-control" required>
                <option value="" disabled selected>Seleccione una copción</option>
                <option value="Funcionando" @selected (old('status_eq_med') ==  'Funcionando')>Funcionando</option>
                <option value="En reparacion" @selected(old('status_eq_med') ==  'En reparacion')>En reparacion</option>
                <option value="Fuera servicio" @selected(old('status_eq_med') ==  'Fuera servicio')>Fuera de servicio</option>
            </select>
            </div>
            <br>

            <div class="form-group">
                <label for="area_id">Area</label>
                <select name="area_id" class="form-control" required>
                    <option value="" disabled selected>Selecciona una opción</option>
                    @foreach($areas as $area)
                        <option value="{{ $area->id }}" @selected (old('area_id') == '{{ $area->servicio }}')>{{ $area->servicio }}</option>
                    @endforeach
                </select>
                @error('area_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div> 
            <br>

            <div class="form-group">
                <label for="archivo">Manual del equipo</label>
                <input type="file" name="archivo" id="archivo" class="form-control" accept=".pdf" required>
            @error('archivo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </div>
            <br>

            <input type="submit" class="btn btn-primary">

        </form>
        </div> 
</x-main-layout>