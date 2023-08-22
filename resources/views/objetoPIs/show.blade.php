@extends('components.layout')

@section('content')
    <h1 class="display-5 pt-5 pb-3 text-center" xmlns="http://www.w3.org/1999/html">{{$objeto->titulo}}</h1>

    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                    OBJETO DE PROPRIEDADE INTELECTUAL
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                <div class="accordion-body">

                    <div class="row">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Palavras-Chave</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control"
                                       value="{{isset($objeto)? $objeto->palavras_chave : "Sem palavras-chave"}}">
                            </div>

                            <div class="mb-3">
                                <label for="campo_invencao" class="form-label h5">Campo de Invenção</label>
                                <input type="text" id="campo_invencao" name="campo_invencao" class="form-control"
                                       value="{{isset($objeto)? $objeto->campo_invencao : "Sem campo de Invenção"}}">
                            </div>

                            <div class="mb-3">
                                <label for="detalhe_invento" class="form-label h5">Descrição detalhada do
                                    Invento</label>
                                <textarea type="text" id="detalhe_invento" name="detalhe_invento" class="form-control"
                                          style="height: auto;">{{isset($objeto)? $objeto->detalhe_invento : "Sem descrição detalhada do Invento"}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="diario_laboratorio" class="form-label h5">Diário de laboratório</label>
                                <textarea type="text" id="diario_laboratorio" name="diario_laboratorio"
                                          class="form-control"
                                          style="height: auto;">{{isset($objeto)? $objeto->diario_laboratorio : "Sem diário de laboratório"}}"</textarea>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('objetoPIs.showItens.inventor')
    @include('objetoPIs.showItens.titular')
    @include('objetoPIs.showItens.representante')
    @include('objetoPIs.showItens.informacoes')
    @include('objetoPIs.showItens.antecedentes')
    @include('objetoPIs.showItens.datas')
    @include('objetoPIs.showItens.anterioridade')
    @include('objetoPIs.showItens.investimentos')





@endsection

@section('content-left')

    <section class="m-1 pt-5">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Painel Administrativo
                </div>
            </div>

            <div class="card-body">
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info"
                       href="{{route('inventores.create', $objeto->id)}}">Inventor</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info"
                       href="{{route('titulares.create', $objeto->id)}}">Titular</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info"
                       href="{{route('representantes.create', $objeto->id)}}">Representante</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('inventoInformacoes.create', $objeto->id)}}">Informações
                        sobre o
                        invento</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info"
                       href="{{route('antecedentesInvencao.create', $objeto->id)}}">Antecedentes da
                        Invenção</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('dataEventos.create', $objeto->id)}}">Datas de
                        Eventos do
                        Invento</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info"
                       href="{{route('anterioridadeReferencias.create', $objeto->id)}}">Anterioridade e
                        Referências</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info"
                       href="{{route('investimentoPesquisas.create', $objeto->id)}}">Investimentos na
                        Pesquisa</a>
                </div>

            </div>
        </div>
    </section>
@endsection
