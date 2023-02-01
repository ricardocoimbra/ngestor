@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <a class="btn btn-primary mb-2" href="{{ route('servicos.create') }}">Novo Serviço</a>

            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($servicos as $servico)
                <tr>
                    <td>{{ $servico->id }}</td>
                    <td>{{ $servico->nome }}</td>
                    <td class="d-flex">
                        <a class="btn btn-info btn-sm" href="{{ route('servicos.edit', $servico->id) }}">Editar</a>
                        <form action="{{ route('servicos.destroy', $servico->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button class="btn btn-danger btn-sm">
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
