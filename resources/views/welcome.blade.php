<x-layout>
    <x-clienteForm>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Registro de Clientes
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach ($clientes as $item)
                        
                        <tr>
                            <td>{{$item->id_cliente}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->telefono}}</td>
                            <td>
                                <a href="{{ route('edit', $item) }}" class="btn btn-outline-info" role="button"><i class="far fa-edit"></i></a>                                                                                                        
                            </td>
                            <td>
                            
                                <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$item->id_cliente}}">
                                    <i class="far fa-trash-alt"></i>
                                </button>

                                <div class="modal fade" id="staticBackdrop{{$item->id_cliente}}" data-bs-backdrop="static" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="staticBackdropLabel">Eliminar Cliente</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          Esta seguro que desea eliminar este cliente?<br>
                                          {{$item->id_cliente.' - '.$item->nombre}}
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>                                
                                          
                                          <form action="{{ route('delete', $item) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Eliminar</button>
                                          </form>
                                          
                                        </div>
                                      </div>
                                    </div>
                                  </div>                               
                            </td>                                              
                        </tr>

                        @endforeach
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </x-clienteForm>
</x-layout>