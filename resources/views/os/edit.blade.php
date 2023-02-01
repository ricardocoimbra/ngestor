@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Editando dados da OS</h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('os.update', $o->id) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="cliente_id">Cliente</label>
                        <select class="custom-select" id="cliente_id" name="cliente_id" aria-label="Selecione o cliente">
                            <option selected>Escolha o cliente...</option>
                            @foreach($clientes as $cliente)
                                <option value="{{ $cliente->id }}" {{ $cliente->id === $o->cliente_id ? 'selected' : '' }}>{{$cliente->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="servico_id">Serviço</label>
                        <select class="custom-select" id="servico_id" name="servico_id" aria-label="Selecione o serviço">
                            <option selected>Escolha o serviço...</option>
                            @foreach($servicos as $servico)
                                <option value="{{ $servico->id }}" {{ $servico->id === $o->servico_id ? 'selected' : '' }}>{{$servico->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="data_abertura">Data de abertura</label>
                        <input type="date" class="form-control" id="data_abertura" name="data_abertura" value="{{ $o->data_abertura }}" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Atualizar</button>

                </form>
            </div>
        </div>
    </div>
@endsection
