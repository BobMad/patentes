@isset($objeto->infoInvento)
    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse4" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapse4">
                    INFORMAÇÕES SOBRE O INVENTO
                </button>
            </h2>


            <div id="panelsStayOpen-collapse4" class="accordion-collapse collapse show">
                <div class="accordion-body">

                    <div class="row">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Detalhes do Invento</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                          value="{{$objeto->infoInvento->detalhe_inovacao ?? ''}}">{{$objeto->infoInvento->detalhe_inovacao ?? ''}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Resolução Vantagem</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                          value="{{$objeto->infoInvento->resolucao_vantagem ?? ''}}">{{$objeto->infoInvento->resolucao_vantagem ?? ''}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Comparação</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                          value="{{$objeto->infoInvento->comparacao ?? ''}}">{{$objeto->infoInvento->comparacao ?? ''}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Desvantagem ou Limitação</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                          value="{{$objeto->infoInvento->desvantagem_limitacao ?? ''}}">{{$objeto->infoInvento->desvantagem_limitacao ?? ''}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Uso Presente ou Futuro</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                          value="{{$objeto->infoInvento->uso_presente_futuro ?? ''}}">{{$objeto->infoInvento->uso_presente_futuro ?? ''}}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Estágio de Comercialização</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                          value="{{$objeto->infoInvento->estagio_comercializacao ?? ''}}">{{$objeto->infoInvento->estagio_comercializacao ?? ''}}</textarea>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endisset
