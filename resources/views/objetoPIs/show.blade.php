@extends('components.layout')

@section('content')
    <h1 class="display-5 pt-5 pb-5 text-center" xmlns="http://www.w3.org/1999/html">{{$objeto->titulo}}</h1>
    <div class="card-group">
        <div class="row card">
            <fieldset disabled>
                <legend>Disabled fieldset example</legend>
                <div class="form-control mb-3 bg-primary">
                    <label for="palavras_chave" class="form-label">Palavras-Chave</label>
                    <input type="text" id="palavras_chave" name="palavras_chave" class="form-control bg-primary-subtle"
                           value="{{isset($objeto)? $objeto->palavras_chave : "Sem palavras-chave"}}">
                </div>

                <div class="form-control mb-3">
                    <label for="campo_invencao" class="form-label">Campo de Invenção</label>
                    <input type="text" id="campo_invencao" name="campo_invencao" class="form-control"
                           value="{{isset($objeto)? $objeto->campo_invencao : "Sem campo de Invenção"}}">
                </div>

                <div class="form-control mb-3">
                    <label for="detalhe_invento" class="form-label">Descrição detalhada do Invento</label>
                    <textarea type="text" id="detalhe_invento" name="detalhe_invento" class="form-control"
                              style="height: auto;">{{isset($objeto)? $objeto->detalhe_invento : "Sem descrição detalhada do Invento"}}</textarea>
                </div>

                <div class="form-control mb-3">
                    <label for="diario_laboratorio" class="form-label">Diário de laboratório</label>
                    <textarea type="text" id="diario_laboratorio" name="diario_laboratorio" class="form-control"
                              style="height: auto;">{{isset($objeto)? $objeto->diario_laboratorio : "Sem diário de laboratório"}}"</textarea>
                </div>

            </fieldset>
        </div>
    </div>
    <div class="card"></div>

@endsection

@section('content-left')
    <div class="pt-5"></div>
    <div class="pt-5"></div>
    <div class="pt-3"></div>
    <section class="m-1 pt-5">
        <div class="card">
            <div class="card-header">
                <div class="text-center">
                    Painel Administrativo
                </div>
            </div>
            <div class="card-body">
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('inventores.create')}}">Inventor</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('titulares.create')}}">Titular</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('representantes.create')}}">Representante</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('inventoInformacoes.create')}}">Informações sobre o invento</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('antecedentesInvencao.create')}}">Antecedentes da Invenção</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('dataEventos.create')}}">Datas de Eventos do Invento</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('anterioridadeReferencias.create')}}">Anterioridade e Referências</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('investimentoPesquisas.create')}}">Investimentos na Pesquisa</a>
                </div>
                <div class="card-text mb-3 text-end">
                    <a class="btn btn-outline-info" href="{{route('transferenciaTecnologias.create')}}">Transferência de Tecnologia</a>
                </div>
            </div>
        </div>
    </section>
@endsection
