<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\OrdemServico;
use App\Servico;
use Illuminate\Http\Request;

class OrdensServicosController extends Controller
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
        $ordensServicos = OrdemServico::all();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        return view('os.index')
            ->with('ordensServicos', $ordensServicos)
            ->with('mensagemSucesso', $mensagemSucesso)
            ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function create()
    {
        $clientes = Cliente::all();
        $servicos = Servico::all();
        return view('os.create')
            ->with('clientes', $clientes)
            ->with('servicos', $servicos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $ordensServicos = OrdemServico::create($request->all());
        return redirect('os')
            ->with('ordensServicos', $ordensServicos)
            ->with('mensagem.sucesso', "Ordem de Serviço cadastrada com sucesso");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrdemServico  $ordemServico
     * @return \Illuminate\Http\Response
     */
    public function show(OrdemServico $ordemServico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrdemServico  $ordemServico
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function edit(OrdemServico $o)
    {
        $clientes = Cliente::all();
        $servicos = Servico::all();
        return view('os.edit')
            ->with('o', $o)
            ->with('clientes', $clientes)
            ->with('servicos', $servicos)
            ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrdemServico  $ordemServico
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, OrdemServico $o)
    {
        $o->fill($request->all());
        $o->save();

        return redirect('os')
            ->with('mensagem.sucesso', "Ordem de Serviço atualizada com sucesso");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrdemServico  $ordemServico
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(OrdemServico $o)
    {
        $o->delete();
        return redirect('os')->with('mensagem.sucesso', "Ordem de Serviço removido com sucesso");
    }
}
