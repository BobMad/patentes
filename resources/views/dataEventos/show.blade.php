@extends('components.layout')

@section('content')

    <h1 class="display-5 pt-5 text-center">4. ANTECEDENTES DA INVENÇÃO</h1>
    <p class="pt-3">1. Concepção: {{ $data->concepcao}}</p>
    <p class="pt-3">2. Croquis e Desenhos: {{ $data->croquis_desenhos}}</p>
    <p class="pt-3">3. Primeira Descrição (relato): {{$data->primeira_descricao}}</p>
    <p class="pt-3">4. Modelo (protótipo) em operação: {{$data->modelo_operacao}}</p>
    <p class="pt-3">5. Primeira Publicação: {{$data->primeira_publicacao}}</p>
    <p class="pt-3">6. Primeira Apresentação Oral: {{$data->primeira_apresentacao}}</p>

@endsection
