@extends('components.layout')
@section('content')
    <h1 class="display-5 text-center pt-5">Titulares</h1>

    <a href="{{route('titulares.create')}}"><button type="button" class="btn btn-primary btn-lg rounded-5">Novo Titular</button></a>

    <table class="table table-hover hover table-striped">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Telefone</th>
            <th scope="col">E-mail</th>
            <th scope="col">Opções</th>
        </tr>
        </thead>
        <tbody>
        @foreach($titulares as $titular)
            <tr class="table-primary">
                <th scope="row">{{$titular->nome}}</th>
                <td>{{$titular->cnpj}}</td>
                <td>{{$titular->endereco->telefone ?? ''}}</td>
                <td>{{$titular->endereco->email ?? ''}}</td>
                <td>
                    <a role="button" href="{{route('titulares.edit', $titular->id)}}"><button class="btn btn-warning btn-sm">Editar</button></a>
                    <a role="button" href="{{route('titulares.show', $titular->id)}}"><button class="btn btn-info btn-sm">Detalhes</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
