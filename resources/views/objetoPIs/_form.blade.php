<div class="">
    <form action="{{ isset($propriedade) ? route('objetoPIs.update', $propriedade->id) : route('objetoPIs.store') }}"
          method="POST">
        @csrf

        <!-- Campos do formulário -->
        <div class="row">
            <div class="form-group col-md-7">
                <div class="form-floating mb-3">
                    <input type="text" id="titulo" class="form-control bg-primary-subtle" name="titulo" placeholder="{{$propriedade->titulo ?? "Titulo"}}" required>
                    <label for="titulo" class="text-black">{{$propriedade->titulo ?? "Titulo"}}</label>
                </div>
            </div>

            <div class="form-group col-md-2">
                <div class="form-floating mb-3">
                    <input type="text" id="palavras_chave" class="form-control bg-primary-subtle" name="palavras_chave" placeholder="{{$propriedade->palavras_chave ?? "Palavras-Chave"}}"
                           required>
                    <label for="palavras_chave" class="text-black">{{$propriedade->palavras_chave ?? "Palavras-Chave"}}</label>
                </div>
            </div>

            <div class="form-group col">
                <div class="form-floating mb-3">
                    <input type="text" id="campo_invencao" class="form-control bg-primary-subtle" name="campo_invencao" placeholder="{{$propriedade->campo_invencao ?? "Invenção"}}"
                           required>
                    <label for="campo_invencao" class="text-black">{{$propriedade->campo_invencao ?? "Invenção"}}</label>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-auto ">
                <div class="form-floating mb-3">
                    <input type="text" id="detalhe_invento" size="73" class="form-control bg-primary-subtle" name="detalhe_invento" placeholder="{{$propriedade->detalhe_invento ?? "Detalhes do Invento"}}"
                           required>
                    <label for="detalhe_invento" class="text-black">{{$propriedade->detalhe_inventos ?? "Detalhes do Invento"}}</label>
                </div>
            </div>

            <div class="form-group col-md-auto">
                <div class="form-floating mb-3">
                    <input type="text" id="diario_laboratorio" size="75" class="form-control bg-primary-subtle" name="diario_laboratorio" placeholder="{{$propriedade->diario_laboratorio ?? "Diário de Laboratório"}}"
                           required>
                    <label for="diario_laboratorio" class="text-black">{{$propriedade->diario_laboratorio ?? "Diário de Laboratório"}}</label>
                </div>
            </div>

            <!-- Botão de envio -->
            <div class="text-center">
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            </div>

        </div>
    </form>
</div>
