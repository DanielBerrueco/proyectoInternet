<x-main-layout titulo="Registrar Petición">
    <div class="card-body">
        <header><a class="btn btn-primary" href="{{route('petition.store')}}">Regresar</a></header>
        <hr>
        <form action="{{route('petition.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label><input type="text" name="accesorio_id" id="accesorio_id" placeholder="ID del accesorio" required value="{{old('accedorio_id')}}"></label> 
                <br>
                    @error('accesorio_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group">
                <label><input type="text" name="equipo_id" id="equipo_id" placeholder="ID del equipo médico" required value="{{old('equipo_id')}}"></label> 
                <br>
                    @error('equipo_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>
            <div class="form-group">
                <label><input type="text" name="ingBiomedico_id" id="ingBiomedico_id" placeholder="ID del ingeniero biomedico" required value="{{old('ingBiomedico_id')}}"></label> 
                <br>
                    @error('ingBiomedico_id')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
            </div>
            <br>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</x-main-layout>
