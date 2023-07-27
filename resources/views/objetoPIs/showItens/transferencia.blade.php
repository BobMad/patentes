@isset($objeto->transferencias)
    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse9" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapse9">
                    TRANSFERÊNCIA DE TECNOLOGIA
                </button>
            </h2>


            <div id="panelsStayOpen-collapse9" class="accordion-collapse collapse show">
                <div class="accordion-body">

                    <div class="row">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Pontencial de comercialização</label>
                                <textarea type="text" class="form-control" style="height: auto">{{$objeto->transferencias->potencial_comercializacao ?? ''}}</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Interesses</label>
                                <textarea type="text" class="form-control" style="height: auto">{{$objeto->transferencias->interesses ?? ''}}</textarea>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endisset
