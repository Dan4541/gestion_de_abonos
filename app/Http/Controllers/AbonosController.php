<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Abono;
use App\Models\Venta;

class AbonosController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        $abonos = Abono::all();
        return view('abonos.index', compact('clientes', 'abonos'));
    }

    public function store(Request $request){
        
        $abono = new Abono();
        $abono->fecha = $request->aFecha;
        $abono->monto = $request->aAbono;
        $abono->id_cliente = $request->aListaClientes;
        
        $reg_abono = Abono::findOrFail($abono->id_cliente);
        /*Abono::where('id_cliente',$request->aListaClientes)->get()->toArray(); */
        /*Venta::where('id_cliente',$abono->id_cliente)->get()->toArray();*/
        
        if ($reg_abono !== null) {            
            $nuevo = (($reg_abono->saldo) - ($request->aAbono));
            $abono->saldo = $nuevo; 
            /*echo $reg_abono->saldo.' 1 '.$request->aAbono.' 1 '.$nuevo;*/
            /*return $abono;*/            
            $abono->save();
            return redirect()->route('abonos-index');
        } else {
            
            $venta = Venta::findOrFail($abono->id_cliente);
            $nuevo = (($venta->total) - ($request->aAbono));            
            $abono->saldo = $nuevo;
            echo $venta->total.' 2 '.$request->aAbono.' 2 '.$nuevo;
            return $abono;
            $abono->save();                
        }
        /**redirect()->route('abonos-index') */
        /*return back();*/
    }



}
