<x-main-layout titulo="Mostar">
<body>

    <h1>Id Orden: {{ $order->id}}</h1>
    <ul class="list-group list-group-flush">
        <li>Id: {{ $order->id}}</li>
        <li class="list-group-item">Status: {{ $order->stats}}</li>
        <li class="list-group-item">Id Jefa: {{ $order->jefa_id}}</li>
        <li class="list-group-item">Id Equipo Medico: {{ $order->equipo_id}}</li>
        <li class="list-group-item">Id Ing Biomedico: {{ $order->ingBiomedico_id}}</li>
        <li class="list-group-item">Id Area: {{ $order->area_id}}</li>
        <li class="list-group-item">Ubicacion: {{ $order->ubicacion}}</li>
        <li class="list-group-item">Falla: {{ $order->falla}}</li>
        <li class="list-group-item">Falla: {{ $order->fecha_ejecucion}}</li>

        <li class="list-group-item"> Fecha de creacion: {{ $order->created_at}} </li>
        <li class="list-group-item">Fecha de ejecucion: {{ $order->fecha_ejecucion}} </li>
    </ul>
</x-main-layout>
