<x-main-layout titulo="Editar">
    <div class="card-body">

        
    <a href="{{route('order.index') }}" class="btn btn-primary">Listado de ordenes de servicio</a>
        <hr>
  
   
        <form action=" {{route('order.update', $order->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">  
            <select name="stats" id="stats">
                <option value="Funcionando" @selected($order->stats == 'Funcionando')>Funcionando</option>
                <option value="En reparacion" @selected($order->stats == 'En reparacion')>En reparacion</option>
                <option value="Fuera de servicio" @selected($order->stats == 'Fuera de servicio')>Fuera de servicio</option>
            </select>
            </div>
            <br><br>
           
            <div class="form-group">
            <label for="jefa_id">Id Jefa</label>
            <input type="text"  name="jefa_id" value="{{ $order->jefa_id }}" class="form-control">
            </div>
            <br><br>

            <div class="form-group">
            <label for="equipo_id">Id Equipo Medico</label>
            <input type="text" id="equipo_id" name="equipo_id" value="{{ $order->equipo_id }}" class="form-control">
            </div>
            <br><br>

            <div class="form-group">
            <label for="ingBiomedico_id">Id Ing Biomedico</label>
            <input type="text" id="ingBiomedico_id" name="ingBiomedico_id" value="{{ $order->ingBiomedico_id }}" class="form-control">
            </div>
            <br><br>
            <div class="form-group">
            <label for="area_id">Id Area</label>
            <input type="text" id="area_id" name="area_id" value="{{ $order->area_id }}" class="form-control">
            </div>
            <br><br>
            
            <div class="form-group">
            <label for="ubicacion">Ubicacion</label>
            <input type="text" id="ubicacion" name="ubicacion" value="{{ $order->ubicacion }}">
            </div>
            <br><br>

            <div class="form-group">
            <label for="falla">Descripcion falla</label>
            </div>
            <br>
            <div class="form-group">
            <textarea name="falla" cols="30" rows="10"> {{ $order->falla }} </textarea>
            </div>
            <br><br>
            <input type="submit" class="btn btn-primary">

            <div class="form-group">
            <label for="fecha_ejecucion">Fecha de ejecucion</label>
            <input type="date" id="fecha_ejecucion" name="fecha_ejecucion" value="{{ $order->fecha_ejecucion}}">
            </div>
            <br><br>
        </form>
    </div>

 </x-main-layout>
