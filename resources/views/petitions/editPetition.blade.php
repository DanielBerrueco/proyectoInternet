<x-main-layout titulo="Editar peticion">
    <header> <a class="btn btn-primary" href="{{route('petition.index')}}">Regresar</a></header>
    <form action="{{route('petition.update', $petition)}}" method="POST">
        @csrf
        @method('PATCH')
        <div class="card-body">
            <div class="form-group">
                <label><input type="text" name="accesorio_id" id="accesorio_id" placeholder="ID del accesorio" required value="{{$petition->accesorio_id}}">ID del accesorio</label> 
                    <br>
                @error('accesorio_id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label><input type="text" name="equipo_id" id="equipo_id" placeholder="ID del equipo" required value="{{$petition->equipo_id}}">ID del equipo</label> 
                    <br>
                @error('equipo_id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>

            <div class="form-group">
                <label><input type="text" name="ingBiomedico_id" id="ingBiomedico_id" placeholder="ID del ingeniero biomedico" required value="{{$petition->ingBiomedico_id}}">ID del ingeniero biomedico</label> 
                    <br>
                @error('ingBiomedico_id')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <input class="btn btn-primary" type="submit" value="Enviar">
        </div>
    </form>
</x-main-layout>