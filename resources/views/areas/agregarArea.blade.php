<x-main-layout titulo="Agregar Area">
    <header><a class="btn btn-primary" href="{{route('areas.index')}}">Regresar</a></header>
    <hr>
        <form action="{{route('areas.store')}}" method="POST">
            @csrf
            <div class="form-group">
            </div><label><input type="text" name="servicio" id="servicio" placeholder="Nombre del area" required value="{{old('servicio')}}"></label>
            </div>
            <br>
                @error('servicio')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            <div class="form-group">
                <label><input type="text" name="piso" id="piso" placeholder="Piso" required value="{{old('piso')}}"></label>
            </div>
                <br>
                @error('piso')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            <div class="form-group">
                <label><input type="text" name="jefe_id" id="jefe_id" placeholder="ID del jefe de area" required value="{{old('id_jefe')}}"></label>
            </div>
                <br>
                @error('jefe_id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            <div class="form-group">
                <label><input type="text" name="ingBiomedico_id" id="ingBiomedico_id" placeholder="ID del ingeniero biomedico responsable" required value="{{old('ingBiomedico_id')}}"></label>
            </div>
                <br>
                @error('ingBiomedico_id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
                <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
</x-main-layout>