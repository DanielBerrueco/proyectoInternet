<x-main-layout titulo="Perfil">
    <section style="background-color: #eee;">
        <div class="container py-5">
        <div class="row">
        </div>
        <div class="row">
            <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                    class="rounded-circle img-fluid" style="width: 150px;">
                <p class="text-muted mb-1">Enfermera</p>
                <div class="d-flex justify-content-center mb-2">
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">Cargar foto</button>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Full Name</p>
                    </div>
                    <div class="col-sm-9">
                    <p class="text-muted mb-0">Johnatan Smith</p>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                    </div>
                    <div class="col-sm-9">
                    <p class="text-muted mb-0">example@example.com</p>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <div class="row">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <p class="mb-4"><span class="text-primary font-italic me-1">Petishiones</span>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Id petición</th>
                                            <th scope="col">Status</th>
                                            <th scope="=col"></th>
                                        </tr>
                                        <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td colspan="2">
                                                <form action="" method="get">
                                                    @csrf

                                                    <input type="submit" value="Ver Petición" class="btn btn-primary">
                                                </form>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</x-main-layout>