<x-layout>

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-5 ">

                <div id="layoutAuthentication">
                    <div id="layoutAuthentication_content">
                        <main>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                            <div class="card-header bg-dark"><h3 class="text-center text-white font-weight-light my-4">Editar Cliente</h3></div>
                                            <div class="card-body">
                                                <form action="{{ route('update', $cliente->id_cliente) }}" method="POST">
                                                    @method('PUT')
                                                    @csrf                                                    
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <div class="form-floating mb-3 mb-md-0">
                                                                <input class="form-control" id="inputFirstName" name="nombre2" value="{{$cliente->nombre}}" type="text"/>
                                                                <label for="inputFirstName">Nombre</label>
                                                            </div>
                                                        </div>                                                        
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="inputEmail" name="telefono2" value="{{$cliente->telefono}}" type="number"/>
                                                        <label for="inputEmail">Telefono</label>
                                                    </div>
                                                    
                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Actualizar</button></div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="card-footer text-center py-3">
                                                <div class="small"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </div>
                   
                </div>

            </div>

        </div>

    </div>
    
</x-layout>