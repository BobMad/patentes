<form
    action="{{ isset($info) ? route('anterioridadeReferencias.update', $info->id) : route('anterioridadeReferencias.store', $objeto->id) }}"
    method="POST">
    @csrf
    @isset($info)
        @method('PUT')
    @endisset

    {{--    Anterioridade    --}}
    <h4 class="text-center pt-3">6.1 Anterioridade</h4>
    <div class="row pt-sm-3">
        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="outro_invento">1. Conhece um outro invento com característica similar?</span>
            <input type="radio" class="btn-check col-lg-auto" name="outro_invento" id="outro_invento1"
                   autocomplete="off" value="Sim" checked>
            <label class="btn btn-outline-success rounded-1" for="outro_invento1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="outro_invento" id="outro_invento2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="outro_invento2">Não</label>
        </div>

        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="patente_similar">2. Houve alguma patente depositada/requerida de um invento similar</span>
            <input type="radio" class="btn-check col-lg-auto" name="patente_similar" id="patente_similar1"
                   autocomplete="off" value="Sim" checked>
            <label class="btn btn-outline-success rounded-1" for="patente_similar1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="patente_similar" id="patente_similar2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="patente_similar2">Não</label>
        </div>

        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="relacao_bibliografica">3. Há pesquisa bibliográfica relacionada com o invento</span>
            <input type="radio" class="btn-check col-lg-auto" name="relacao_bibliografica" id="relacao_bibliografica1"
                   autocomplete="off" value="Sim" checked>
            <label class="btn btn-outline-success rounded-1" for="relacao_bibliografica1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="relacao_bibliografica" id="relacao_bibliografica2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="relacao_bibliografica2">Não</label>
        </div>

        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3"
                  id="protecao_propriedade_intelectual">4. Há alguma proteção de propriedade intelectual aplicada a esta invenção?</span>
            <input type="radio" class="btn-check col-lg-auto" name="protecao_propriedade_intelectual"
                   id="protecao_propriedade_intelectual1" value="Sim" autocomplete="off"
                   checked>
            <label class="btn btn-outline-success rounded-1" for="protecao_propriedade_intelectual1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="protecao_propriedade_intelectual"
                   id="protecao_propriedade_intelectual2" autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="protecao_propriedade_intelectual2">Não</label>
        </div>

        <div class="input-group">
            <div class="form-floating mb-3">
                    <textarea type="text" id="descricao_outro_invento" class="form-control bg-primary-subtle"
                              name="descricao_outro_invento"
                              value="{{isset($info)? $info->descricao_outro_invento: old('descricao_outro_invento') }}"
                              placeholder="{{$info->descricao_outro_invento ?? "6.2 Indique as principais referências bibliográficas relacionadas
ao presente invento, anexando, se possível, cópia:"}}"
                              {{isset($info)? : 'required'}} style="width: 96%; height: 150px"></textarea>
                <label for="descricao_outro_invento" class="text-black" style="width: 96%">6.2 Indique as principais referências
                    bibliográficas relacionadas
                    ao presente invento, anexando, se possível, cópia:</label>
            </div>
        </div>

        <div class="input-group">
            <div class="form-floating mb-3">
                    <textarea type="text" id="detalhe_invento" class="form-control bg-primary-subtle"
                              name="detalhe_invento"
                              value="{{isset($info)? $info->detalhe_invento: old('detalhe_invento') }}"
                              placeholder="{{$info->detalhe_invento ?? "6.2 Indique as principais referências bibliográficas relacionadas
ao presente invento, anexando, se possível, cópia:"}}"
                              {{isset($info)? : 'required'}} style="width: 96%; height: 150px"></textarea>
                <label for="detalhe_invento" class="text-black" style="width: 96%">6.2 Indique as principais referências
                    bibliográficas relacionadas
                    ao presente invento, anexando, se possível, cópia:</label>
            </div>
        </div>

    </div>


    {{--    Periodo de Graça    --}}
    <h4 class="text-center pt-3">6.3 Período de Graça</h4>

    <div class="row pt-sm-3">
        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="revelada">1. A presente invenção já foi revelada fora do IFAP?</span>
            <input type="radio" class="btn-check col-lg-auto" name="revelada" id="revelada1"
                   autocomplete="off" value="Sim" checked>
            <label class="btn btn-outline-success rounded-1" for="revelada1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="revelada" id="revelada2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="revelada2">Não</label>
        </div>

        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="outra_patente">2. Esteve pessoalmente envolvido em outro processo de patente?r</span>
            <input type="radio" class="btn-check col-lg-auto" name="outra_patente" id="outra_patente1"
                   autocomplete="off" value="Sim" checked>
            <label class="btn btn-outline-success rounded-1" for="outra_patente1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="outra_patente" id="outra_patente2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="outra_patente2">Não</label>
        </div>

        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="revelado_industria">3. O presente invento já foi revelado à indústria?</span>
            <input type="radio" class="btn-check col-lg-auto" name="revelado_industria"
                   id="revelado_industria1" value="Sim" autocomplete="off"
                   checked>
            <label class="btn btn-outline-success rounded-1" for="revelado_industria1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="revelado_industria"
                   id="revelado_industria2" autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="revelado_industria2">Não</label>
        </div>

        <div class="input-group mb-3">
                <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3"
                      id="interesse_comercial">4. Foi demonstrado interesse comercial?</span>
            <input type="radio" class="btn-check col-lg-auto" name="interesse_comercial"
                   id="interesse_comercial1"
                   autocomplete="off" value="Sim" checked>
            <label class="btn btn-outline-success rounded-1" for="interesse_comercial1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="interesse_comercial"
                   id="interesse_comercial2" autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="interesse_comercial2">Não</label>
        </div>

        <div class="input-group">
            <div class="form-floating mb-3">
                    <textarea type="text" id="detalhe_revelada" class="form-control bg-primary-subtle"
                              name="detalhe_revelada"
                              value="{{isset($info)? $info->detalhe_revelada: old('detalhe_revelada') }}"
                              placeholder="{{$info->detalhe_revelada ?? "6.4 Informe detalhadamente, as circunstâncias e anexe cópia do trabalho."}}"
                              {{isset($info)? : 'required'}} style="width: 96%; height: 150px"></textarea>
                <label for="detalhe_revelada" class="text-black" style="width: 96%">6.4Informe detalhadamente, as circunstâncias e anexe cópia do trabalho.</label>
                <div class="small">(Exemplo: apresentação em conferências, publicações científicas em revistas, comunicações informais, patentes, normas)</div>
                <div class="small text-danger">Alertamos que a divulgação de aspectos da invenção que por ventura não tenham sido comunicados a esta Divisão podem
                    prejudicar a expedição da carta-patente no Brasil, assim como eventuais solicitações de patenteamento no Exterior.</div>
            </div>
        </div>

        <div class="input-group">
            <div class="form-floating mb-3">
                    <textarea type="text" id="detalhes_outra_patente" class="form-control bg-primary-subtle"
                              name="detalhes_outra_patente"
                              value="{{isset($info)? $info->detalhes_outra_patente: old('detalhes_outra_patente') }}"
                              placeholder="{{$info->detalhes_outra_patente ?? "6.5 Informe quando, onde, e que tipo de invento:"}}"
                              {{isset($info)? : 'required'}} style="width: 96%; height: 150px"></textarea>
                <label for="detalhes_outra_patente" class="text-black" style="width: 96%">6.5 Informe quando, onde, e que tipo de invento:</label>
            </div>
        </div>

        <div class="input-group">
            <div class="form-floating mb-3">
                    <textarea type="text" id="detalhes_interesse_comercial" class="form-control bg-primary-subtle"
                              name="detalhes_interesse_comercial"
                              value="{{isset($info)? $info->detalhes_interesse_comercial: old('detalhes_interesse_comercial') }}"
                              placeholder="{{$info->detalhes_interesse_comercial ?? "6.6 Informe nome, contato e telefone da empresa:"}}"
                              {{isset($info)? : 'required'}} style="width: 96%; height: 150px"></textarea>
                <label for="detalhes_interesse_comercial" class="text-black" style="width: 96%">6.6 Informe nome, contato e telefone da empresa:</label>
            </div>
        </div>

    </div>
        <!-- Botão de envio -->
        <div class="text-center pt-3">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
        </div>

</form>
