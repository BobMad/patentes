@extends('components.layout')

@section('content')
    <h1 class="display-5 pt-5">Objetos de Propriedade Intelectual</h1>

    @foreach($objetos as $objeto)
        {{$objeto->titulo}}<br>
        {{$objeto->palavras_chave}}<br>
        {{$objeto->campo_invencao}}<br>
        {{$objeto->detalhe_invento}}<br>
        {{$objeto->diario_laboratorio}}<br>
    @endforeach
@endsection
