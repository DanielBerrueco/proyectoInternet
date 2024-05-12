<x-main-layout titulo="Detalles de orden">
    <a href="{{route('order.index') }}" class="btn btn-primary">Regresar</a>
    <hr>
    <div class="card-body">
        <h3 class="h3">Id Orden: {{ $order->id}}</h3>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><span class="h5">Status:</span> {{ $order->stats}}</li>
            <li class="list-group-item"><span class="h5">Jefa:</span> {{ $order->user2->name}}</li>
            <li class="list-group-item"><span class="h5">Equipo médico:</span> {{ $order->equipment->nombre}}</li>
            <li class="list-group-item"><span class="h5">Ingeniero biomédico:</span> {{ $order->user->name}}</li>
            <li class="list-group-item"><span class="h5">Area:</span> {{ $order->area->servicio}}</li>
            <li class="list-group-item"><span class="h5">Ubicacion:</span> {{ $order->ubicacion}}</li>
            <li class="list-group-item"><span class="h5">Falla:</span> {{ $order->falla}}</li>
            <li class="list-group-item"><span class="h5">Fecha de creacion:</span> {{ $order->created_at}} </li>
            <li class="list-group-item"><span class="h5">Fecha de ejecucion:</span> {{ $order->fecha_ejecucion}} </li>
        </ul> 
    </div>
</x-main-layout>
