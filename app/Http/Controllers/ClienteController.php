<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $cliente = Cliente::orderBy('created_at', 'DESC')->get();
        return view('clientes.index', compact('cliente'));
    }
    public function create()
    {
        return view('cadastro_cliente');
    }
}
