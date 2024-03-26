<x-main-layout titulo="Editar petición">
    <a href="{{ route('petition.index') }}" class="btn btn-primary">Regresar</a>
    <div class="card-body">
        <form action="{{ route('petition.update', $petition) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="accesorio_id">Id de Accesorio</label>
                <input type="text" name="accesorio_id" value="{{ $petition -> accesorio_id }}" class="form-control" required>
                <label>Nombre de accesorio: {{ $petition -> accessory -> nombre }}</label>
                @error('accesorio_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="equipo_id">Id de Equipo Médico</label>
                <input type="text" name="equipo_id" value="{{  $petition -> equipo_id }}" class="form-control" required>
                <label>Nombre de equipo: {{ $petition -> equipment -> nombre }}</label>
                @error('equipo_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <div class="form-group">
                <label for="ingBiomedico_id">Id de Ingeniero Biomédico</label>
                <input type="text" name="ingBiomedico_id" value="{{ $petition -> ingBiomedico_id }}" class="form-control" required>
                <label>Nombre de Ingeniero Biomédico: {{ $petition -> user -> name }}</label>
                @error('ingBiomedico_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</x-main-layout>