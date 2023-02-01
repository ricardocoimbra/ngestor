@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <a class="btn btn-primary mb-2" href="{{ route('os.create') }}">Nova Ordem de Serviço</a>

            @isset($mensagemSucesso)
                <div class="alert alert-success">
                    {{ $mensagemSucesso }}
                </div>
            @endisset

            @if(count($ordensServicos) > 0)
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cliente</th>
                        <th>Serviço</th>
                        <th>Data Abertura</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($ordensServicos as $ordemServico)
                <tr>
                    <td>{{ $ordemServico->id }}</td>
                    <td>{{ $ordemServico->cliente->nome }}</td>
                    <td>{{ $ordemServico->servico->nome }}</td>
                    <td>{{ $ordemServico->dataaberturabr }}</td>
                    <td class="d-flex">
                        <a class="btn btn-info btn-sm" href="{{ route('os.edit', $ordemServico->id) }}">Editar</a>
                        <form action="{{ route('os.destroy', $ordemServico->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @else
                <div class="alert alert-warning">
                    <p>Você não tem Ordens de Serviço cadastradas</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
