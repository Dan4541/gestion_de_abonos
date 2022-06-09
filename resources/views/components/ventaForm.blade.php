<h2 class="my-4">Datos del Cliente</h2>

<div class="card mb-4">
    <div class="card-body">
        
        <div class="row">
            
            <div class="col-8">

                <div class="card mb-4 mt-5" style="max-height: 500px; overflow-y: scroll;">
                    
                    <main class="py-3">
                        <div class="container-fluid">
                            
                            {{$slot}}
                        </div>
                    </main>

                </div>
                

            </div>

            <div class="col-4">

                <div id="layoutAuthentication">
                    <div id="layoutAuthentication_content">
                        <main>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                            <div class="card-header bg-dark"><h3 class="text-center text-white font-weight-light my-4">Registrar Venta</h3></div>
                                            <div class="card-body">
                                                <form action="{{ route('ventas-store') }}" method="POST">
                                                    @csrf
                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label class="my-3" style="font-size: 22px"><strong>Cliente Comprador</strong></label>                
                                                            <select name="listaClientes" class="form-control input-sm">
                                                                <option value="">Selecione un Cliente</option>
                                                                @foreach ($clientes as $item)
                                                                <option value="{{$item->id_cliente}}">{{$item->id_cliente}} - {{$item->nombre}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>                                                        
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label class="my-3" style="font-size: 22px"><strong>Fecha</strong></label>
                                                            <input type="date" name="fecha" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label class="my-3" style="font-size: 22px"><strong>Comentario</strong></label>
                                                            <textarea name="comentario" id="" cols="27" rows="5"></textarea>    
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <div class="col-md-12">
                                                            <label class="my-3" style="font-size: 22px"><strong>Monto Total</strong></label>
                                                            <input type="number" name="monto" class="form-control">  
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="mt-4 mb-0">
                                                        <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Guardar</button></div>
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
</div>