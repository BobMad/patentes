@extends('components.layout')
@section('content')
    <div class="pt-5 mx-5">
    <div class="card mx-5 bg-primary">
        <div class="card-header">
            Dados do Titular
        </div>
        <div class="card-body">
            <div class="card-title">
                Titular: {{$titular->nome}}

            </div>
            <div class="card-text">
                CNPJ: {{$titular->cnpj}}
            </div>
        </div>
        <div class="card-footer">
            <div class="btn-group-md text-center">
                <a class="btn btn-primary" href="{{route('representantes.create')}}">Representante</a>
                <a class="btn btn-primary" href="#">Projeto Intelectual</a>
            </div>
        </div>
    </div>
@endsection
