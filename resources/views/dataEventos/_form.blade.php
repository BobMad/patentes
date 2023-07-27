<form
    action="{{ isset($info) ? route('dataEventos.update', $info->id) : route('dataEventos.store', $objeto->id) }}"
    method="POST">
    @csrf
    @isset($info)
        @method('PUT')
    @endisset

    <!-- Campos do formulário -->
    <div class="row pt-sm-3 mx-3">
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="concepcao"> 1. Concepção&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; </span>
                <input type="date" class="form-control" id="concepcao" name="concepcao"
                       value="{{isset($info)? $info->concepcao : old('concepcao')}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="croquis_desenhos">2. Croquis e Desenhos &emsp;&emsp;&emsp;&emsp;&emsp;</span>
                <input type="date" class="form-control" id="croquis_desenhos" name="croquis_desenhos"
                       value="{{isset($info)? $info->croquis_desenhos : old('croquis_desenhos')}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="primeira_descricao">3. Primeira Descrição (relato) &emsp;&emsp;</span>
                <input type="date" class="form-control" id="primeira_descricao" name="primeira_descricao"
                       value="{{isset($info)? $info->primera_descricao : old('primeira_descricao')}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="modelo_operacao">4. Modelo (protótipo) em operação </span>
                <input type="date" class="form-control" id="modelo_operacao" name="modelo_operacao"
                       value="{{isset($info)? $info->modelo_operacao : old('modelo_operacao')}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="primeira_publicacao">5. Primeira Publicação&ensp;&emsp;&emsp;&emsp;&emsp;&emsp;</span>
                <input type="date" class="form-control"  id="primeira_publicacao" name="primeira_publicacao"
                       value="{{isset($info)? $info->primeira_publicacao : old('primeira_publicacao')}}">
            </div>
        </div>
        <div class="col-2"></div>
        <div class="col-3"></div>
        <div class="mb-3 col-7">
            <div class="input-group">
                <span class="input-group-text text-white" id="primeira_apresentacao">6. Primeira Apresentação Oral&emsp;&emsp;</span>
                <input type="date" class="form-control" id="primeira_apresentacao" name="primeira_apresentacao"
                       value="{{isset($info)? $info->primeira_apresentacao : old('primeira_apresentacao')}}">
            </div>
        </div>

        <!-- Botão de envio -->
        <div class="text-center pt-3">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
        </div>
    </div>
</form>
