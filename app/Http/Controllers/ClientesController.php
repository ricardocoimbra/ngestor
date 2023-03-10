<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index(Request $request)
    {
        $clientes = Cliente::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        return view('clientes.index', compact('clientes', 'mensagemSucesso'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(ClienteRequest $request)
    {
        $cliente = Cliente::create($request->all());
        return redirect('clientes')->with('mensagem.sucesso', "Cliente cadastrado com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  Cliente $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        dd($cliente);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Cliente  $cliente
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(Cliente $cliente)
    {
        return view('clientes.edit')->with('cliente', $cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cliente $cliente
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Cliente $cliente, Request $request)
    {
        $cliente->fill($request->all());
        $cliente->save();

        return redirect('clientes')->with('mensagem.sucesso', "Cliente atualizado com sucesso");;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();
        return redirect('clientes')->with('mensagem.sucesso', "Cliente removido com sucesso");
    }
}
