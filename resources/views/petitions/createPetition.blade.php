<x-main-layout titulo="Crear petición">
    <a href="{{ route('petition.index') }}" class="btn btn-primary">Regresar</a>
    <div class="card-body">
        <form action="{{ route('petition.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="accesorio_id">Id de Accesorio</label>
                <input type="number" name="accesorio_id" value="{{ old('accesorio_id') }}" class="form-control" required>
                @error('accesorio_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="equipo_id">Id de Equipo Médico</label>
                <input type="number" name="equipo_id" value="{{  old('equipo_id') }}" class="form-control" required>
                @error('equipo_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="ingBiomedico_id">Id de Ingeniero Biomédico</label>
                <input type="number" name="ingBiomedico_id" value="{{ old('ingBiomedico_id') }}" class="form-control" required>
                @error('ingBiomedico_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</x-main-layout>