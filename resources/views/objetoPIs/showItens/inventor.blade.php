
{{--INVENTOR--}}
<form class="row">
<div class="accordion mb-3" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                INVENTOR
            </button>
        </h2>


        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show">
            <div class="accordion-body">

                <div class="row">
                    <fieldset disabled>
                        <div class="mb-3">
                            <label for="palavras_chave" class="form-label h5">Nome</label>
                            <input type="text" id="palavras_chave" name="palavras_chave" class="form-control"
                                   value="{{$objeto->inventores->nome ?? ''}}">
                        </div>

                        <div class="mb-3 col-2">
                            <label for="campo_invencao" class="form-label h5">Sexo</label>
                            <input type="text" id="campo_invencao" name="campo_invencao" class="form-control"
                                   value="{{$objeto->inventores->sexo ?? ''}}">
                        </div>

                        <div class="mb-3 col-3">
                            <label for="campo_invencao" class="form-label h5">Data de nascimento</label>
                            <input type="date" id="campo_invencao" name="campo_invencao" class="form-control"
                                   value="{{$objeto->inventores->data_nascimento ?? ''}}">
                        </div>
                        <div class="mb-3 col-2">
                            <label for="campo_invencao" class="form-label h5">Identidade</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->identidade ?? ''}}">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="campo_invencao" class="form-label h5">CPF</label>
                            <input type="number" class="form-control"
                                   value="{{$objeto->inventores->cpf ?? ''}}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="campo_invencao" class="form-label h5">Qualificação</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->qualificacao ?? ''}}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="campo_invencao" class="form-label h5">Instituição</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->instituicao ?? ''}}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="campo_invencao" class="form-label h5">Vinculo (IFAP)</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->vinculo_ifap ?? ''}}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="campo_invencao" class="form-label h5">Matrícula (IFAP)</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->matricula_ifap ?? ''}}">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="campo_invencao" class="form-label h5">Curso (IFAP)</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->curso_ifap ?? ''}}">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="campo_invencao" class="form-label h5">Período</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->periodo ?? ''}}">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="campo_invencao" class="form-label h5">Campus (IFAP)</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->campus_ifap ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Centro/Laboratório (IFAP)</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->centro_ifap ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Departamento</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->departamento ?? ''}}">
                        </div>
                        <div class="mb-3">
                            <label for="campo_invencao" class="form-label h5">Link do Lattes</label>
                            <input type="text" class="form-control"
                                   value="{{$objeto->inventores->link_lattes ?? ''}}">
                        </div>

                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
