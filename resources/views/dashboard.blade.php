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
                <h3 class="h3">{{ auth()->user()->puesto }}</h3>
                </div>
            </div>
            </div>
            <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    <h5 class="h5">Nombre completo</h5>
                    </div>
                    <div class="col-sm-9">
                    <h6 class="h6">{{ auth()->user()->name }}</h6>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <h5 class="h5">Correo electrónico</h5>
                    </div>
                    <div class="col-sm-9">
                    <h6 class="h6">{{ auth()->user()->email }}</h6>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-main-layout>