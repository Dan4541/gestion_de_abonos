<x-layout>
    <x-abonoForm :clientes="$clientes">

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
                            <td>{{$item->abono}}</td>
                            <td>{{$item->saldo}}</td>
                            <td>{{$item->id_cliente}}</td>
                                                                         
                        </tr>

                        @endforeach
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>

    </x-abonoForm>
</x-layout>