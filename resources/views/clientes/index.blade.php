@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <a class="btn btn-primary mb-2" href="{{ route('clientes.create') }}">Novo Cliente</a>

            @isset($mensagemSucesso)
                <div class="alert alert-success">
                    {{ $mensagemSucesso }}
                </div>
            @endisset

            @if(count($clientes) > 0)
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>E-Mail</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($clientes as $cliente)
                <tr>
                    <td>{{ $cliente->id }}</td>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->email }}</td>
                    <td>{{ $cliente->cidade }}</td>
                    <td>{{ $cliente->estado }}</td>
                    <td class="d-flex">
                        <a class="btn btn-info btn-sm" href="{{ route('clientes.edit', $cliente->id) }}">Editar</a>
                        <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
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
                    <p>Você não tem clientes cadastrados</p>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
