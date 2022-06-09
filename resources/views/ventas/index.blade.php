<x-layout>
    <x-ventaForm :clientes="$clientes">

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Registro de Ventas
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Fecha</th>
                            <th>Comentario</th>
                            <th>Monto</th>
                            <th>Cliente</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($ventas as $item)
                        
                        <tr>
                            <td>{{$item->id_venta}}</td>
                            <td>{{$item->fecha}}</td>
                            <td>{{$item->comentario}}</td>
                            <td>{{$item->total}}</td>
                            <td>{{$item->id_cliente}}</td>
                                                                         
                        </tr>

                        @endforeach
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>

    </x-ventaForm>
</x-layout>