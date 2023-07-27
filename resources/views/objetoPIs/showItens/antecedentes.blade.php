@isset($objeto->antecedentes)
    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse5" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapse5">
                    ANTECEDENTES DA INVENÇÃO
                </button>
            </h2>


            <div id="panelsStayOpen-collapse5" class="accordion-collapse collapse show">
                <div class="accordion-body">

                    <div class="row">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Diferencial</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                          value="{{$objeto->antecedentes->diferencial ?? ''}}">{{$objeto->antecedentes->diferencial ?? ''}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Diferencial Patentes</label>
                                <textarea type="text" id="palavras_chave" name="palavras_chave" class="form-control" style="height: auto"
                                          value="{{$objeto->infoInvento->antecedentes->diferencial_patentes ?? ''}}">{{$objeto->antecedentes->diferencial_patentes ?? ''}}</textarea>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endisset
