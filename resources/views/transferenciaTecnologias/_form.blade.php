<form
    action="{{ isset($info) ? route('transferenciaTecnologias.update', $info->id) : route('transferenciaTecnologias.store', $objeto->id) }}"
    method="POST">
    @csrf
    @isset($info)
        @method('PUT')
    @endisset

    {{--    Anterioridade    --}}

    <div class="row pt-sm-3">

        <div class="input-group">
            <div class="form-floating mb-3">

                <input type="text" list="objeto_pi_lista" class="form-control bg-primary-subtle" id="objetoPI_id" style="width: 96%">
                <datalist id="objeto_pi_lista" class="bg-primary-subtle">
                    @foreach($objetos as $i)
{{--                        <option value="{{isset($i)? $i->id : old('id') }}">{{ $i->titulo ?? 'Sem Propriedades Intelectuais Criadas' }}</option>--}}
                        <option class="text-black" value="{{$i->id ?? ''}}">{{ $i->titulo ?? 'Sem Propriedades Intelectuais Criadas' }}</option>
                    @endforeach
                </datalist>
                <label for="objetoPI_id" class="text-black" >Escolha a Propriedade...</label>
            </div>
        </div>

        <div class="input-group">
            <div class="form-floating mb-3">
                    <textarea type="text" id="potencial_comercializacao" class="form-control bg-primary-subtle"
                              name="potencial_comercializacao"
                              value="{{isset($info)? $info->potencial_comercializacao: old('potencial_comercializacao') }}"
                              placeholder="{{$info->potencial_comercializacao ?? "6.4 Informe detalhadamente, as circunstâncias e anexe cópia do trabalho."}}"
                              {{isset($info)? : 'required'}} style="width: 96%; height: 150px"></textarea>
                <label for="potencial_comercializacao" class="text-black" style="width: 96%">6.4Informe detalhadamente,
                    as circunstâncias e anexe cópia do trabalho.</label>
                <div class="small">(Especifique áreas de aplicação e/ou produtos que imaginas que possam utilizar esta
                    nova tecnologia)
                </div>
            </div>
        </div>

        <div class="input-group">
            <div class="form-floating mb-3">
                    <textarea type="text" id="interesses" class="form-control bg-primary-subtle"
                              name="interesses"
                              value="{{isset($info)? $info->interesses: old('interesses') }}"
                              placeholder="{{$info->interesses ?? "6.4 Informe detalhadamente, as circunstâncias e anexe cópia do trabalho."}}"
                              {{isset($info)? : 'required'}} style="width: 96%; height: 150px"></textarea>
                <label for="interesses" class="text-black" style="width: 96%">6.4Informe detalhadamente, as
                    circunstâncias e anexe cópia do trabalho.</label>

            </div>
        </div>

    </div>

    <!-- Botão de envio -->
    <div class="text-center pt-3">
        <button type="submit" class="btn btn-success btn-lg">Salvar</button>
    </div>

</form>
