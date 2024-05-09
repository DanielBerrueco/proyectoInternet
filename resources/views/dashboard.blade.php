<x-main-layout titulo="Perfil">
    <section style="background-color: #eee;">
        <div class="container py-5">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    @if(auth()->user()->puesto === 'Enfermero')
                        <img src="{{ asset('imagen/medico.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    @else
                        <img src="{{ asset('imagen/reparar.png') }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                    @endif
                <p class="text-muted mb-1">{{ auth()->user()->puesto }}</p>
                </div>
            </div>
            </div>
            <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Nombre completo</p>
                    </div>
                    <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ auth()->user()->name }}</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Correo electrónico</p>
                    </div>
                    <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-main-layout>