<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Venta;

class VentasController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        $ventas = Venta::all();
        return view('ventas.index', compact('clientes', 'ventas'));
    }

    public function store(Request $request){

        $venta = new Venta();        
        $venta->fecha = $request->fecha;
        $venta->comentario = $request->comentario;
        $venta->total = $request->monto;        
        $venta->id_cliente = $request->listaClientes;
        $venta->save();        
        return back();
    }

    

}
