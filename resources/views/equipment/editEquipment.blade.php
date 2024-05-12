<x-main-layout titulo="Editar equipo">
    <a href="{{route('equipment.index') }}" class="btn btn-primary">Regresar</a>
    <hr>
        <div class="card-body">
            <form action="{{route('equipment.update', $equipment->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{ $equipment->nombre }}" class="form-control">
                    @error('nombre')
                        <div class="alert alert-danger">{{ $message }}</div>
                     @enderror 
                </div>
                <br>

                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" value="{{ $equipment->marca }}"  class="form-control">
                    @error('marca')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                <br>

                <div class="form-group">
                    <label for="modelo">Modelo</label>
                    <input type="text" name="modelo" value="{{ $equipment->modelo }}"  class="form-control">
                    @error('modelo')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                <br>

                <div class="form-group">
                    <label for="n_serie">Número de serie</label>
                    <input type="text" name="n_serie" value="{{ $equipment->n_serie }}"  class="form-control">
                    @error('n_serie')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                <br>

                <div class="form-group">
                <label for="status_eq_med">Status</label>
                <select name="status_eq_med" id="status_eq_med" class="form-control">
                    <option value="Funcionando" @selected($equipment->status_eq_med == 'Funcionando')>Funcionando</option>
                    <option value="En reparacion" @selected($equipment->status_eq_med == 'En reparacion')>En reparacion</option>
                    <option value="Fuera de servicio" @selected($equipment->status_eq_med == 'Fuera de servicio')>Fuera de servicio</option>
                </select>
                </div>
                <br>

                <div class="form-group">
                    <label for="accessories">Accesorios</label>
                    <div style="height: 100px; overflow-y: auto;">
                        @foreach($accessories as $accessory)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="accessories[]" value="{{ $accessory->id }}" {{ in_array($accessory->id, old('accessories', $selectedAccessories)) ? 'checked' : '' }}>
                                <label class="form-check-label" for="accessories">
                                    {{ $accessory->nombre }}
                                </label>
                            </div>
                        @endforeach
                    </div>
                    @error('accessories')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <br>
                
                

                <div class="form-group">
                    <label for="area_id">Área</label>
                    <select name="area_id" class="form-control" required>
                        @foreach($areas as $area)
                        <option value="{{ $area->id }}" @if($area->servicio == $selectedArea) selected @endif>{{ $area->servicio }}</option>
                        @endforeach
                    </select>
                    @error('area_id')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div> 
                <br>

                <div class="form-group">
                    <label for="archivo">Manual del equipo</label>
                    <input type="file" name="archivo" id="archivo" class="form-control" accept=".pdf">
                @error('archivo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                </div>
                <br>

                <input type="submit" class="btn btn-primary">
            </form>
        </div>
</x-main-layout>