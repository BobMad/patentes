@isset($objeto->anterioridades)
    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse7" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapse7">
                    ANTECEDENTES DA INVENÇÃO
                </button>
            </h2>


            <div id="panelsStayOpen-collapse7" class="accordion-collapse collapse show">
                <div class="accordion-body">

                    <div class="row">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Outro Invento</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                       value="{{$objeto->anterioridades->outro_invento ?? ''}}">
                            </div>

                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Patentes Similares</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                       value="{{$objeto->anterioridades->patente_similar ?? ''}}">

                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Relação Bibliográfica</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                       value="{{$objeto->anterioridades->relacao_bibliografica ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Proteção Propriedade Intelectual</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                value="{{$objeto->anterioridades->protecao_propriedade_intelectual ?? ''}}">

                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Descrição outro Invento</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto" >{{$objeto->anterioridades->descricao_outro_invento ?? ''}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Foi relevado?</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                value="{{$objeto->anterioridades->revelada ?? ''}}">

                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Outra patente?</label>
                                <input type="text" class="form-control" style="height: auto"
                                value="{{$objeto->anterioridades->outra_patente ?? ''}}">

                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Foi revelado para Industria?</label>
                                <input type="text" class="form-control" style="height: auto"
                                value="{{$objeto->anterioridades->revelado_industria ?? ''}}">

                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Possui interesse comercial?</label>
                                <input type="text" class="form-control" style="height: auto"
                                value="{{$objeto->anterioridades->interesse_comercial ?? ''}}">

                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Detalhes revelados?</label>
                                <textarea type="text" class="form-control" style="height: auto" >{{$objeto->anterioridades->detalhe_revelada ?? ''}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Detalhes de outra patente?</label>
                                <textarea type="text" class="form-control" style="height: auto" >{{$objeto->anterioridades->detalhes_outra_patente ?? ''}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Detalhes do interesse comercial?</label>
                                <textarea type="text" class="form-control" style="height: auto" >{{$objeto->anterioridades->detalhes_interesse_comercial ?? ''}}</textarea>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endisset
