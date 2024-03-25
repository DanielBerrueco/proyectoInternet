<x-main-layout titulo="Crear nuevo accesorio">
    <a href="{{ route('accessory.index') }}" class="btn btn-primary">Regresar</a>
    <div class="card-body">
        <form action="{{ route('accessory.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" value="{{ old('nombre') }}" class="form-control" required>
                @error('nombre')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="stock">Stock Actual</label>
                <input type="number" name="stock" value="{{ old('stock') }}" class="form-control" placeholder="0" required>
                @error('stock')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="minimo">Stock mínimo</label>
                <input type="number" name="minimo" value="{{ old('minimo') }}" class="form-control" placeholder="0" required>
                @error('minimo')
                    <div class="alert alert-dangr">{{ $message }}</div>      
                @enderror
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" name="ubicacion" value="{{ old('ubicacion') }}" class="form-control" required>
                @error('ubicacion')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <br>
            <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
    </div>
</x-main-layout>