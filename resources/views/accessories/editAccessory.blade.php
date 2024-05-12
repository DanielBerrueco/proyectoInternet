<x-main-layout titulo="Editar accesorio">
    <a href="{{ route('accessory.index') }}" class="btn btn-primary">Regresar</a>
    <hr>
    <div class="card-body">
        <form action="{{ route('accessory.update', $accessory) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{ $accessory -> nombre }}" class="form-control" required>
                @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="stock">Stock Actual</label>
                <input type="number" name="stock" value="{{ $accessory -> stock }}" class="form-control" placeholder="0" required>
                @error('stock')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="minimo">Stock mínimo</label>
                <input type="number" name="minimo" value="{{ $accessory -> minimo }}" class="form-control" placeholder="0" required>
                @error('minimo')
                    <div class="alert alert-dangr">{{ $message }}</div>      
                @enderror
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" value="{{ $accessory -> ubicacion }}" class="form-control" required>
                @error('ubicacion')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</x-main-layout>