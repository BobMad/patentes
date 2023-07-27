
<div class="accordion mb-3" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseThree">
                TITULAR
            </button>
        </h2>


        <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show">
            <div class="accordion-body">

                <div class="row">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="palavras_chave" class="form-label h5">Nome</label>
                            <input type="text" id="palavras_chave" name="palavras_chave" class="form-control"
                                   value="{{$objeto->titulares->nome ?? ''}}">
                        </div>

                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">CPNJ</label>
                            <input type="text" id="campo_invencao" name="campo_invencao" class="form-control"
                                   value="{{$objeto->titulares->cnpj ?? ''}}">
                        </div>

                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">E-mail</label>
                            <input type="email" id="campo_invencao" name="campo_invencao" class="form-control"
                                   value="{{$objeto->enderecoTitular->email ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Telefone</label>
                            <input type="tel" class="form-control"
                                   value="{{$objeto->enderecoTitular->telefone ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">CEP</label>
                            <input type="text" class="form-control"
                                   value="{{ $objeto->enderecoTitular->cep ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Rua</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->enderecoTitular->logradouro ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Número</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->enderecoTitular->numero ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Bairro</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->enderecoTitular->bairro ?? ''}}">
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>

    </div>
</div>
