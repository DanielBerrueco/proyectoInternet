<x-main-layout titulo="Editar">
<a href="{{route('equipment.index') }}" class="btn btn-primary">Regresar</a>
        <div class="card-body">
            <form action="{{route('equipment.update', $equipment->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{ $equipment->nombre }}" class="form-control">
                </div>
                <br><br>
                <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" name="marca" value="{{ $equipment->marca }}"  class="form-control">
                </div>
                <br><br>
                <div class="form-group">
                <label for="modelo">Modelo</label>
                <input type="text" name="modelo" value="{{ $equipment->modelo }}"  class="form-control">
                <br><br>
                <div class="form-group">
                <label for="n_serie">No/serie</label>
                <input type="text" name="n_serie" value="{{ $equipment->n_serie }}"  class="form-control">
                </div>
                <br><br>
                <div class="form-group">
                <label for="status_eq_med">Status</label>
                <select name="status_eq_med" id="status_eq_med">
                    <option value="Funcionando" @selected($equipment->status_eq_med == 'Funcionando')>Funcionando</option>
                    <option value="En reparacion" @selected($equipment->status_eq_med == 'En reparacion')>En reparacion</option>
                    <option value="Fuera de servicio" @selected($equipment->status_eq_med == 'Fuera de servicio')>Fuera de servicio</option>
                </select>
                </div>
                <br><br>
                <div class="form-group">
                <label for="area_id">Id area</label>
                <input type="text" id="area_id" name="area_id" value="{{ $equipment->area_id }}" class="form-control">
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