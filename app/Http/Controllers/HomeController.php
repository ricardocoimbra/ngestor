<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\OrdemServico;
use App\Servico;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $clientes = Cliente::all();
        $servicos = Servico::all();
        $ordensServicos = OrdemServico::all();
        return view('home')
            ->with('clientes', $clientes)
            ->with('servicos', $servicos)
            ->with('ordensServicos', $ordensServicos)
            ;
    }
}
