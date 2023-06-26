<form
    action="{{ isset($info) ? route('investimentoPesquisas.update', $info->id) : route('investimentoPesquisas.store') }}"
    method="POST">
    @csrf
    @isset($info)
        @method('PUT')
    @endisset

    {{--    Anterioridade    --}}

    <div class="row pt-sm-3">
        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="orgaos">7.1 Órgãos de Fomento Envolvidos (CNPq, CAPES, FAPEMA, etc).</span>
            <input type="radio" class="btn-check col-lg-auto" name="orgaos" id="orgaos1"
                   autocomplete="off" value="Sim">
            <label class="btn btn-outline-success rounded-1" for="orgaos1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="orgaos" id="orgaos2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="orgaos2">Não</label>
        </div>
    </div>

    <div class="row pt-sm-3">
        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="contrato_termo">7.2 Foi feito contrato com órgão financiador ou gerido de acordo com um Termo de
Confidencialidade?</span>
            <input type="radio" class="btn-check col-lg-auto" name="contrato_termo" id="contrato_termo1"
                   autocomplete="off" value="Sim">
            <label class="btn btn-outline-success rounded-1" for="contrato_termo1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="contrato_termo" id="contrato_termo2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="contrato_termo2">Não</label>
        </div>
    </div>

    <div class="row pt-sm-3">
        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="foi_informado">7.3 O órgão financiador foi informado do invento?</span>
            <input type="radio" class="btn-check col-lg-auto" name="foi_informado" id="foi_informado1"
                   autocomplete="off" value="Sim">
            <label class="btn btn-outline-success rounded-1" for="foi_informado1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="foi_informado" id="foi_informado2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="foi_informado2">Não</label>
        </div>
    </div>

    <div class="row pt-sm-3">
        <div class="input-group mb-3">
            <span class="col-form-label-lg bg-dark rounded-1 text-white col-lg-10 px-3" id="suporte_interno">7.4 Suporte Interno (Recurso de Pesquisa do IFAP, Unidade ou do Departamento):</span>
            <input type="radio" class="btn-check col-lg-auto" name="suporte_interno" id="suporte_interno1"
                   autocomplete="off" value="Sim">
            <label class="btn btn-outline-success rounded-1" for="suporte_interno1">Sim</label>

            <input type="radio" class="btn-check col-lg-auto" name="suporte_interno" id="suporte_interno2"
                   autocomplete="off" value="Não">
            <label class="btn btn-outline-danger" for="suporte_interno2">Não</label>
        </div>
    </div>

    <!-- Botão de envio -->
    <div class="text-center pt-3">
        <button type="submit" class="btn btn-success btn-lg">Salvar</button>
    </div>

</form>
