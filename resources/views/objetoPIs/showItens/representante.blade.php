@isset($objeto->representante)
<div class="accordion mb-3" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseThree">
                REPRESENTANTE
            </button>
        </h2>


        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
            <div class="accordion-body">

                <div class="row">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="palavras_chave" class="form-label h5">Nome</label>
                            <input type="text" id="palavras_chave" name="palavras_chave" class="form-control"
                                   value="{{$objeto->representante->nome ?? ''}}">
                        </div>

                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">RG</label>
                            <input type="text" id="campo_invencao" name="campo_invencao" class="form-control"
                                   value="{{$objeto->representante->rg ?? ''}}">
                        </div>

                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">CPF</label>
                            <input type="email" id="campo_invencao" name="campo_invencao" class="form-control"
                                   value="{{$objeto->representante->cpf ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Campus</label>
                            <input type="tel" class="form-control"
                                   value="{{$objeto->representante->campus ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Produto</label>
                            <input type="text" class="form-control"
                                   value="{{ $objeto->representante->produto ?? ''}}">
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

    </div>
</div>
@endisset
