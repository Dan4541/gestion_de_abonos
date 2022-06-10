<x-layout>
    <x-abonoForm :abonos="$abonos">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Registro de Abonos
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Monto</th>
                            <th>Cliente</th>
                            <th>Saldo Pendiente</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($abonos as $item)
                        
                        <tr>
                            <td>{{$item->id_abono}}</td>
                            <td>{{$item->fecha}}</td>
                            <td>₡ {{$item->monto}}</td>
                            <td>{{$item->id_cliente}}</td>
                            <td>₡ {{$item->saldo}}</td>                         
                                                                         
                        </tr>

                        @endforeach
                        
                        
                        
                    </tbody>
                </table>
            </div>

            @section('abonoForm')
            <form action="{{ route('abonos-store') }}" method="POST">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-12">
                        <label class="my-3" style="font-size: 22px"><strong>Cliente Abona</strong></label>                
                        <select name="aListaClientes" class="form-control input-sm">
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
                        <input type="date" name="aFecha" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12">
                        <label class="my-3" style="font-size: 22px"><strong>Monto Abonar</strong></label>
                        <input type="number" name="aAbono" class="form-control">
                    </div>
                </div>
            
                <div class="mt-4 mb-0">
                    <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Guardar</button></div>
                </div>
            </form>
            @endsection

        </div>

    </x-abonoForm>
</x-layout>