@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 d-flex">
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Clientes</h5>
                    <div class="card-body">
                        <h5 class="card-title">Total de clientes <span class="badge badge-secondary">{{ count($clientes) }}</span></h5>
                        <a href="{{ route('clientes.index') }}" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Serviços</h5>
                    <div class="card-body">
                        <h5 class="card-title">Quantidade de serviços ofertados <span class="badge badge-secondary">{{ count($servicos) }}</span></h5>
                        <a href="{{ route('servicos.index') }}" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <h5 class="card-header">Ordens de Serviço</h5>
                    <div class="card-body">
                        <h5 class="card-title">Total de OS's cadastradas <span class="badge badge-secondary">{{ count($ordensServicos) }}</span></h5>
                        <a href="{{ route('os.index') }}" class="btn btn-primary">Ver mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
