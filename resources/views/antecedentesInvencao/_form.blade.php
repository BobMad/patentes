<form
    action="{{ isset($info) ? route('antecedentesInvencao.update', $info->id) : route('antecedentesInvencao.store', $objeto->id) }}"
    method="POST">
    @csrf
    @isset($info)
        @method('PUT')
    @endisset

    <!-- Campos do formulário -->
    <div class="row pt-sm-3 mx-3">
        <div class="form-group col-12">
            <div class="form-floating mb-3">
                    <textarea type="text" id="diferencial" class="form-control bg-primary-subtle"
                              name="diferencial"
                              value="{{isset($info)? $info->diferencial: old('diferencial') }}"
                              placeholder="{{$info->diferencial ?? "4.1 Como a presente invenção difere do atualmente conhecido no estado da técnica? (Faça um comparativo com o presente pedido de patente de invenção)"}}"
                              {{isset($info)? : 'required'}} style="height: 100px"></textarea>
                <label for="diferencial" class="text-black">
                    4.1 Como a presente invenção difere do atualmente conhecido no estado da técnica?
                </label>
                <div class="small text-info">
                    (Faça um comparativo com o presente pedido de patente de invenção).
                </div>
            </div>
        </div>

        <div class="form-group col-12">
            <div class="form-floating mb-3">
                    <textarea type="text" id="diferencial_patentes" class="form-control bg-primary-subtle"
                              name="diferencial_patentes"
                              value="{{isset($info)? $info->diferencial_patentes: old('diferencial_patentes') }}"
                              placeholder="{{$info->diferencial_patentes ?? "4.2 Foi feita alguma busca de patentes? Em caso positivo, informe as patentes e o diferencial em relação à nova tecnologia ora proposta."}}"
                              {{isset($info)? : 'required'}} style="height: 100px"></textarea>
                <label for="diferencial_patentes" class="text-black">
                    4.2 Foi feita alguma busca de patentes?
                </label>
                <div class="small text-info">
                    Em caso positivo, informe as patentes e o diferencial em relação à nova tecnologia ora proposta.
                </div>
            </div>
        </div>

        <!-- Botão de envio -->
        <div class="text-center pt-3">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
        </div>
    </div>
</form>
