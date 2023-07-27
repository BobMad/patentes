@isset($objeto->investimentos)
    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse8" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapse8">
                    INVESTIMENTOS NA PESQUISA
                </button>
            </h2>


            <div id="panelsStayOpen-collapse8" class="accordion-collapse collapse show">
                <div class="accordion-body">

                    <div class="row">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Orgãos</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control"
                                       style="height: auto"
                                       value="{{$objeto->investimentos->orgaos ?? ''}}">
                            </div>

                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Contrato Termo?</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control"
                                       style="height: auto"
                                       value="{{$objeto->investimentos->orgaos ?? ''}}">

                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Foi informado?</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control"
                                       style="height: auto"
                                       value="{{$objeto->investimentos->orgaos ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Suporte Interno?</label>
                                <input type="text" id="palavras_chave" name="palavras_chave" class="form-control"
                                       style="height: auto"
                                       value="{{$objeto->investimentos->orgaos ?? ''}}">

                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endisset
