
    <form
        action="{{ isset($info) ? route('inventoInformacoes.update', $info->id) : route('inventoInformacoes.store') }}"
        method="POST">
        @csrf

        <!-- Campos do formulário -->
        <div class="row pt-sm-3 mx-3">
            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="detalhe_inovacao" class="form-control bg-primary-subtle"
                           name="detalhe_inovacao"
                           value="{{isset($info)? $info->detalhe_inovacao: old('detalhe_inovacao') }}"
                           placeholder="{{$info->detalhe_inovacao ?? "3.1 Detalhe a inovação do presente invento"}}"
                        {{isset($info)? : 'required'}} style="height: 100px"></textarea>
                    <label for="detalhe_inovacao" class="text-black">3.1 Detalhe a inovação do presente invento</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="resolucao_vantagem" class="form-control bg-primary-subtle"
                           name="resolucao_vantagem"
                           value="{{isset($info)? $info->resolucao_vantagem: old('resolucao_vantagem') }}"
                           placeholder="{{$info->resolucao_vantagem ?? "Problemas que o invento resolve ou vantagens que apresenta"}}"
                              {{isset($info)? : 'required'}} style="height: 100px"></textarea>
                    <label for="resolucao_vantagem" class="text-black">Problemas que o invento resolve ou vantagens que
                        apresenta</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="comparacao" class="form-control bg-primary-subtle" name="comparacao"
                           value="{{isset($info)? $info->comparacao: old('comparacao') }}"
                           placeholder="{{$info->comparacao ?? "3.3 Compare o presente invento com a tecnologia atualmente utilizada"}}"
                              {{isset($info)? : 'required'}} style="height: 100px"></textarea>
                    <label for="comparacao" class="text-black">3.3 Compare o presente invento com a tecnologia
                        atualmente utilizada</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="desvantagem_limitacao" class="form-control bg-primary-subtle"
                           name="desvantagem_limitacao"
                           value="{{isset($info)? $info->desvantagem_limitacao: old('desvantagem_limitacao') }}"
                           placeholder="{{$info->desvantagem_limitacao ?? "3.4 Desvantagens e/ou limitações do invento"}}"
                              {{isset($info)? : 'required'}} style="height: 100px"></textarea>
                    <label for="desvantagem_limitacao" class="text-black">3.4 Desvantagens e/ou limitações do
                        invento</label>
                </div>
            </div>

            <div class="form-group col-12">
                <div class="form-floating mb-3">
                    <textarea type="text" id="uso_presente_futuro" class="form-control bg-primary-subtle"
                              name="uso_presente_futuro"
                              value="{{isset($info)? $info->uso_presente_futuro: old('uso_presente_futuro') }}"
                              placeholder="{{$info->uso_presente_futuro ?? "3.5 Uso presente e futuro do invento"}}"
                              {{isset($info)? : 'required'}} style="height: 100px"></textarea>
                    <label for="uso_presente_futuro" class="text-black">3.5 Uso presente e futuro do invento</label>
                </div>
            </div>


            <div class="form-group col-12">
                <div class="card bg-dark">
                    <div class="card-header bg-primary-subtle text-black">
                    <label class="">3.6 Na sua opinião, qual o estágio
                        de desenvolvimento de seu invento com
                        relação à comercialização?</label>
                    </div>
                    <div class="form-check mb-3 pt-3 mx-4">
                        <input type="radio" id="estagio_comercializacao1" class="form-check-input" name="estagio_comercializacao" value="Estado embrionário">
                        <label for="estagio_comercializacao1" class="form-check-label">
                            a) Estado embrionário(Precisa muito trabalho para levá-lo ao mercado)
                        </label>
                    </div>

                    <div class="form-check mb-3 pt-1 mx-4">
                        <input type="radio" id="estagio_comercializacao2" class="form-check-input"
                               name="estagio_comercializacao"
                               value="Parcialmente desenvolvido">
                        <label for="estagio_comercializacao2" class="form-check-label">
                            b) Parcialmente desenvolvido (Poderá ser levado ao mercado com um investimento razoável)
                        </label>
                    </div>

                    <div class="form-check mb-3 pt-1 mx-4">
                        <input type="radio" id="estagio_comercializacao3" class="form-check-input"
                               name="estagio_comercializacao"
                               value="Desenvolvido">
                        <label for="estagio_comercializacao3" class="form-check-label">
                            c) Desenvolvido(Pode ser levado ao mercado com um mínimo investimento)
                        </label>
                    </div>
                </div>
            </div>

            <!-- Botão de envio -->
            <div class="text-center pt-3">
                <button type="submit" class="btn btn-success btn-lg">Salvar</button>
            </div>
        </div>
    </form>

