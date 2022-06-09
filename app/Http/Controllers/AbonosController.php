<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Abono;

class AbonosController extends Controller
{
    public function index(){
        $clientes = Cliente::all();
        $abonos = Abono::all();
        return view('abonos.index', compact('clientes', 'abonos'));
    }
}
