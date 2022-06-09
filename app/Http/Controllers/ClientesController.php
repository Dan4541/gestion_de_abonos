<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        return view('welcome', compact('clientes'));
    }

    public function store(Request $request){
        
        $cliente = new Cliente();
        $cliente->nombre = $request->nombre;
        $cliente->telefono = $request->telefono;
        $cliente->save();
        return back();
    }

    public function edit($id){

        $cliente = Cliente::find($id);        
        return view('clientes.editar', compact('cliente'));
    }

    public function update(Request $request, $id){

        $actualizado = Cliente::find($id);
        $actualizado->nombre = $request->nombre2;
        $actualizado->telefono = $request->telefono2;
        $actualizado->save();
        return redirect()->route('index');
    }

    public function delete($id){
        $cliente = Cliente::find($id);
        $cliente->delete();
        return redirect()->route('index');

    }



}
