<div class="" xmlns="http://www.w3.org/1999/html">
    <form action="{{ isset($objeto) ? route('objetoPIs.update', $objeto->id) : route('objetoPIs.store') }}"
          method="POST">
        @csrf

        <!-- Campos do formulário -->
        <h4 class="pt-3 text-center">(Para esta seção, se necessitar de folha adicional, identifique-a como anexo 1)</h4>

        <div class="row pt-3 mx-3">
            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <input type="text" id="titulo" class="form-control bg-primary-subtle" name="titulo"
                           value="{{isset($objeto)? $objeto->titulo: old('titulo') }}"
                           placeholder="{{$objeto->titulo ?? "2 1 . Título (utilize termos técnicos)"}}"
                        {{isset($objeto)? : 'required'}}>
                    <label for="titulo" class="text-black">2 1 . Título (utilize termos técnicos)</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <input type="text" id="palavras_chave" class="form-control bg-primary-subtle" name="palavras_chave"
                           value="{{isset($objeto)? $objeto->palavras_chave: old('palavras_chave') }}"
                           placeholder="{{$objeto->palavras_chave ?? "2 2 . Palavras-chave relacionadas ao presente invento"}}"
                        {{isset($objeto)? : 'required'}}>
                    <label for="palavras_chave" class="text-black">2 2 . Palavras-chave relacionadas ao presente invento</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="campo_invencao" class="form-control bg-primary-subtle" name="campo_invencao"
                           value="{{isset($objeto)? $objeto->campo_invencao: old('campo_invencao') }}"
                           placeholder="{{$objeto->campo_invencao ?? "2.3 Descreva objetivamente o campo de invenção"}}"
                        {{isset($objeto)? : 'required'}} style="height: 150px"></textarea>
                    <label for="campo_invencao" class="text-black">2.3 Descreva objetivamente o campo de invenção</label>
                    <div class="small">(Exemplo: novo uso do equipamento, processo para tratamento de efluentes, equipamento para..., etc.).</div>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="detalhe_invento" class="form-control bg-primary-subtle"
                              name="detalhe_invento"
                              value="{{isset($objeto)? $objeto->detalhe_invento: old('detalhe_invento') }}"
                              placeholder="{{$objeto->detalhe_invento ?? "2.4 Descrição detalhada do invento"}}"
                              {{isset($objeto)? : 'required'}} style="height: 150px"></textarea>
                    <label for="detalhe_invento" class="text-black">2.4 Descrição detalhada do invento</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="diario_laboratorio" class="form-control bg-primary-subtle"
                              name="diario_laboratorio"
                              value="{{isset($objeto)? $objeto->diario_laboratorio: old('diario_laboratorio') }}"
                              placeholder="{{$objeto->diario_laboratorio ?? "2.5 Diário de laboratório"}}"
                              {{isset($objeto)? : 'required'}} style="height: 150px"></textarea>
                    <label for="diario_laboratorio" class="text-black">2.5 Diário de laboratório</label>
                </div>
            </div>

            <!-- Botão de envio -->
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            </div>

        </div>
    </form>
</div>
