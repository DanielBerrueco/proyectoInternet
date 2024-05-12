<x-main-layout titulo="Editar área">
    <a class="btn btn-primary" href="{{route('areas.index')}}">Regresar</a>
    <hr>
    <div class="card-body">
        <form action="{{route('areas.update', $area->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="servicio">Servicio</label>
                <input type="text" name="servicio" id="servicio" required value="{{ $area->servicio }}" class="form-control">
                @error('servicio')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <br>

            <div class="form-group">
                <label for="piso">Piso</label>
                <input type="text" name="piso" id="piso" required value="{{ $area->piso }}" class="form-control">
                @error('piso')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
            <br>

            <div class="form-group">
                <label for="jefe_id">Jefe de área: </label>
                <select name="jefe_id" class="form-control" required>
                    @foreach($bosses as $boss)
                    <option value="{{ $boss->id }}" @if($boss->name == $selectedBoss) selected @endif>{{ $boss->name }}</option>
                    @endforeach
                </select>
                @error('jefe_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
            </div>
            <br>

            <div class="form-group">
                <label for="ingBiomedico_id">Ingeniero Biomédico: </label>
                <select name="ingBiomedico_id" class="form-control" required>
                    @foreach($biomedics as $biomedic)
                        <option value="{{ $biomedic->id }}">{{ $biomedic->name }}</option>
                    @endforeach
                </select>
                @error('ingBiomedico_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
                </div>
                <br>

            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>
</x-main-layout>