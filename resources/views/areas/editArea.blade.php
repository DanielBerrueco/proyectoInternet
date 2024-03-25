<x-main-layout titulo="Editar area">
    <header><a class="btn btn-primary" href="{{route('areas.index')}}">Regresar</a></header>
    <form action="{{route('areas.update', $area->id)}}" method="POST">
        @csrf
        @method('PATCH')
        <label><input type="text" name="piso" id="piso" placeholder="piso" required value="{{$area->piso}}"></label>
        <br>
        <label><input type="text" name="servicio" id="servicio" placeholder="Servicio" required value="{{$area->servicio}}"></label>
        <br>
        <label><input type="text" name="jefe_id" id="jefe_id" placeholder="Jefe de area" required value="{{$area->jefe_id}}"></label>
        <br>
        <label><input type="text" name="ingBiomedico_id" id="ingBiomedico_id" placeholder="Ingeniero biomedico encargado" required value="{{$area->ingBiomedico_id}}"></label>
        <br>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
</x-main-layout>