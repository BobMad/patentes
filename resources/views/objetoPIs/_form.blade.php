<div class="" xmlns="http://www.w3.org/1999/html">
    <form action="{{ isset($objeto) ? route('objetoPIs.update', $objeto->id) : route('objetoPIs.store') }}"
          method="POST">
        @csrf

        <!-- Campos do formulário -->
        <div class="row pt-5 mx-3">
            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <input type="text" id="titulo" class="form-control bg-primary-subtle" name="titulo"
                           value="{{isset($objeto)? $objeto->titulo: old('titulo') }}"
                           placeholder="{{$objeto->titulo ?? "Titulo"}}"
                        {{isset($objeto)? : 'required'}}>
                    <label for="titulo" class="text-black">Titulo</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <input type="text" id="palavras_chave" class="form-control bg-primary-subtle" name="palavras_chave"
                           value="{{isset($objeto)? $objeto->palavras_chave: old('palavras_chave') }}"
                           placeholder="{{$objeto->palavras_chave ?? "Palavras-Chave"}}"
                        {{isset($objeto)? : 'required'}}>
                    <label for="palavras_chave" class="text-black">Palavras-Chave</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <input type="text" id="campo_invencao" class="form-control bg-primary-subtle" name="campo_invencao"
                           value="{{isset($objeto)? $objeto->campo_invencao: old('campo_invencao') }}"
                           placeholder="{{$objeto->campo_invencao ?? "Campo de Invencão"}}"
                        {{isset($objeto)? : 'required'}}>
                    <label for="campo_invencao" class="text-black">Campo de Invenção</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="detalhe_invento" class="form-control bg-primary-subtle"
                              name="detalhe_invento"
                              value="{{isset($objeto)? $objeto->detalhe_invento: old('detalhe_invento') }}"
                              placeholder="{{$objeto->detalhe_invento ?? "Detalhes do Invento"}}"
                              {{isset($objeto)? : 'required'}} style="height: 100px"></textarea>
                    <label for="detalhe_invento" class="text-black">Detalhes do Invento</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="diario_laboratorio" class="form-control bg-primary-subtle"
                              name="diario_laboratorio"
                              value="{{isset($objeto)? $objeto->diario_laboratorio: old('diario_laboratorio') }}"
                              placeholder="{{$objeto->diario_laboratorio ?? "Detalhes de Laboratório"}}"
                              {{isset($objeto)? : 'required'}} style="height: 100px"></textarea>
                    <label for="diario_laboratorio" class="text-black">Detalhes de Laboratório</label>
                </div>
            </div>

            <!-- Botão de envio -->
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            </div>

        </div>
    </form>
</div>
