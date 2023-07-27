@isset($objeto->datas)
    <div class="accordion mb-3" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse6" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapse6">
                    DATAS DE EVENTOS
                </button>
            </h2>


            <div id="panelsStayOpen-collapse6" class="accordion-collapse collapse show">
                <div class="accordion-body">

                    <div class="row">
                        <fieldset disabled>
                            <div class="mb-3">
                                <label for="palavras_chave" class="form-label h5">Data de Concepção</label>
                                <input type="date"class="form-control"
                                       value="{{$objeto->datas->concepcao ?? ''}}">
                            </div>

                            <div class="mb-3">
                                <label for="campo_invencao" class="form-label h5">Croquis e desenhos</label>
                                <input type="date" id="campo_invencao" name="campo_invencao" class="form-control"
                                       value="{{$objeto->datas->croquis_desenhos ?? ''}}">
                            </div>

                            <div class="mb-3">
                                <label for="campo_invencao" class="form-label h5">Primeira descrição</label>
                                <input type="date" id="campo_invencao" name="campo_invencao" class="form-control"
                                       value="{{$objeto->datas->primeira_descricao ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="campo_invencao" class="form-label h5">Modelo de operação</label>
                                <input type="date" class="form-control"
                                       value="{{$objeto->datas->modelo_operacao ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="campo_invencao" class="form-label h5">Data da primeira publicação</label>
                                <input type="date" class="form-control"
                                       value="{{ $objeto->datas->primeira_publicacao ?? ''}}">
                            </div>
                            <div class="mb-3">
                                <label for="campo_invencao" class="form-label h5">Data da apresentação</label>
                                <input type="date" class="form-control"
                                       value="{{ $objeto->datas->primeira_apresentacao ?? ''}}">
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endisset
