<form class="row g-3 pt-5" action="{{ isset($info) ? route('inventores.update', $info->id) : route('inventores.store') }}"
      method="POST">
    @csrf
    @isset($info)
        @method('PUT')
    @endisset

    <!-- Campos do formulário -->

    <div class="form-group col-12">
        <div class="form-floating mb-3">
            <input type="text" id="nome" class="form-control bg-primary-subtle" name="nome"
                   value="{{isset($info)? $info->nome : old('nome') }}"
                   placeholder="{{$info->nome ?? "Nome"}}" {{isset($info)? : 'required'}}>
            <label for="nome" class="text-black">{{$info->nome ?? "Nome"}}</label>
        </div>
    </div>

    <div class="form-group col-2">
        <div class="form-floating mb-3">
            <input type="text" id="sexo" class="form-control bg-primary-subtle" name="sexo"
                   value="{{isset($info)? $info->sexo: old('sexo') }}"
                   placeholder="{{$info->sexo ?? "Sexo"}}"
                {{isset($info)? : 'required'}}>
            <label for="sexo" class="text-black">{{$info->sexo ?? "Sexo"}}</label>
        </div>
    </div>

    <div class="form-group col-3">
        <div class="form-floating mb-3">
            <input type="date" id="data_nascimento" class="form-control bg-primary-subtle" name="data_nascimento"
                   value="{{isset($info)? $info->data_nascimento : old('data_nascimento') }}"
                   placeholder="{{$info->data_nascimento ?? "Data de Nascimento"}}">
            <label for="data_nascimento" class="text-black">{{$info->data_nascimento ?? "Data de Nascimento"}}</label>
        </div>
    </div>

    <div class="form-group col-3">
        <div class="form-floating mb-3">
            <input type="text" id="identidade" class="form-control bg-primary-subtle" name="identidade"
                   value="{{isset($info)? $info->identidade : old('identidade') }}"
                   placeholder="{{$info->identidadee ?? "Identidade"}}">
            <label for="identidade" class="text-black">{{$info->identidade ?? "Identidade"}}</label>
        </div>
    </div>


    <div class="form-group col-4">
        <div class="form-floating mb-3">
            <input type="text" id="cpf" class="form-control bg-primary-subtle" name="cpf"
                   value="{{isset($info)? $info->cpf : old('cpf') }}"
                   placeholder="{{$info->cpf ?? "CPF"}}">
            <label for="cpf" class="text-black">{{$info->cpf ?? "CPF"}}</label>
        </div>
    </div>
    <div class="form-group col-12">
        <div class="form-floating mb-3">
            <input type="text" id="qualificacao" class="form-control bg-primary-subtle" name="qualificacao"
                   value="{{isset($info)? $info->qualificacao : old('logradouro') }}"
                   placeholder="{{$info->qualificacao ?? "Qualificacao"}}">
            <label for="qualificacao"
                   class="text-black">{{$info->qualificacao ?? "Qualificacao"}}</label>
        </div>
    </div>
    <div class="form-group col-12">
        <div class="form-floating mb-3">
            <input type="text" id="instituicao" class="form-control bg-primary-subtle" size="10" name="instituicao"
                   value="{{isset($info)? $info->instituicao : old('instituicao') }}"
                   placeholder="{{$info->instituicao ?? "Instituicao"}}">
            <label for="instituicao" class="text-black">{{$info->instituicao ?? "Instituicao"}}</label>
        </div>
    </div>

{{--   IFAP --}}

    <div class="form-group col-12">
        <div class="form-floating mb-3">
            <input type="text" id="vinculo_ifap" class="form-control bg-primary-subtle" name="vinculo_ifap"
                   value="{{isset($info)? $info->vinculo_ifap : old('vinculo_ifap') }}"
                   placeholder="{{$info->vinculo_ifap ?? "Tipo de Vínculo com o IFAP"}}">
            <label for="vinculo_ifap" class="text-black">{{$info->vinculo_ifap ?? "Tipo de Vínculo com o IFAP"}}</label>
        </div>
    </div>

    <div class="form-group col-4">
        <div class="form-floating mb-3">
            <input type="text" id="matricula_ifap" class="form-control bg-primary-subtle" name="matricula_ifap"
                   value="{{isset($info)? $info->matricula_ifap : old('matricula_ifap') }}"
                   placeholder="{{$info->matricula_ifap ?? "Matrícula (IFAP)"}}">
            <label for="matricula_ifap" class="text-black">{{$info->matricula_ifap ?? "Matrícula (IFAP)"}}</label>
        </div>
    </div>

    <div class="form-group col-6">
        <div class="form-floating mb-3">
            <input type="text" id="curso_ifap" class="form-control bg-primary-subtle" name="curso_ifap"
                   value="{{isset($info)? $info->curso_ifap : old('curso_ifap') }}"
                   placeholder="{{$info->curso_ifap ?? "Curso (IFAP)"}}">
            <label for="curso_ifap" class="text-black">{{$info->curso_ifap ?? "Curso (IFAP)"}}</label>
        </div>
    </div>

    <div class="form-group col-2">
        <div class="form-floating mb-3">
            <input type="text" id="periodo" class="form-control bg-primary-subtle" name="periodo"
                   value="{{isset($info)? $info->periodo : old('periodo') }}"
                   placeholder="{{$info->periodo ?? "Período"}}">
            <label for="periodo" class="text-black">{{$info->periodo ?? "Período"}}</label>
        </div>
    </div>

    <div class="form-group col-4">
        <div class="form-floating mb-3">
            <input type="text" id="campus_ifap" class="form-control bg-primary-subtle" name="campus_ifap"
                   value="{{isset($info)? $info->campus_ifap : old('campus_ifap') }}"
                   placeholder="{{$info->campus_ifap ?? "Campus (IFAP)"}}">
            <label for="campus_ifap" class="text-black">{{$info->campus_ifap ?? "Campus (IFAP)"}}</label>
        </div>
    </div>

    <div class="form-group col-4">
        <div class="form-floating mb-3">
            <input type="text" id="centro_ifap" class="form-control bg-primary-subtle" name="centro_ifap"
                   value="{{isset($info)? $info->centro_ifap : old('centro_ifap') }}"
                   placeholder="{{$info->centro_ifap ?? "Centro/Laboratório (IFAP)"}}">
            <label for="centro_ifap" class="text-black">{{$info->centro_ifap ?? "Centro/Laboratório (IFAP)"}}</label>
        </div>
    </div>

    <div class="form-group col-4">
        <div class="form-floating mb-3">
            <input type="text" id="departamento" class="form-control bg-primary-subtle" name="departamento"
                   value="{{isset($info)? $info->departamento : old('departamento') }}"
                   placeholder="{{$info->departamento ?? "Departamento (IFAP)"}}">
            <label for="departamento" class="text-black">{{$info->departamento ?? "Departamento (IFAP)"}}</label>
        </div>
    </div>

{{--    ENDEREÇOS   --}}

    <div class="form-group col-4">
        <div class="form-floating mb-3">
            <input type="email" id="email" class="form-control bg-primary-subtle" name="email"
                   value="{{isset($info)? $info->endereco->email : old('email') }}"
                   placeholder="{{$info->endereco->email ?? "E-mail"}}">
            <label for="email" class="text-black">{{$info->endereco->email ?? "E-mail"}}</label>
        </div>
    </div>

    <div class="form-group col-4">
        <div class="form-floating mb-3">
            <input type="tel" id="telefone" class="form-control bg-primary-subtle" name="telefone"
                   value="{{isset($info)? $info->endereco->telefone : old('telefone') }}"
                   placeholder="{{$info->endereco->telefone ?? "Telefone Fixo"}}">
            <label for="telefone" class="text-black">{{$info->endereco->telefone ?? "Telefone Fixo"}}</label>
        </div>
    </div>

    <div class="form-group col-4">
        <div class="form-floating mb-3">
            <input type="tel" id="celular" class="form-control bg-primary-subtle" name="celular"
                   value="{{isset($info)? $info->endereco->celular : old('celular') }}"
                   placeholder="{{$info->endereco->celular ?? "Celular"}}">
            <label for="celular" class="text-black">{{$info->endereco->celular ?? "Celular"}}</label>
        </div>
    </div>

    <div class="form-group col-2">
        <div class="form-floating mb-3">
            <input type="text" id="cep" class="form-control bg-primary-subtle" name="cep"
                   value="{{isset($info)? $info->endereco->cep : old('cep') }}"
                   placeholder="{{$info->endereco->cep ?? "CEP"}}">
            <label for="cep" class="text-black">{{$info->endereco->cep ?? "CEP"}}</label>
        </div>
    </div>

    <div class="form-group col-5">
        <div class="form-floating mb-3">
            <input type="text" id="logradouro" class="form-control bg-primary-subtle" name="logradouro"
                   value="{{isset($info)? $info->endereco->logradouro : old('logradouro') }}"
                   placeholder="{{$info->endereco->logradouro ?? "Logradouro"}}">
            <label for="logradouro" class="text-black">{{$info->endereco->logradouro ?? "Logradouro"}}</label>
        </div>
    </div>

    <div class="form-group col-2">
        <div class="form-floating mb-3">
            <input type="text" id="numero" class="form-control bg-primary-subtle" name="numero"
                   value="{{isset($info)? $info->endereco->numero : old('numero') }}"
                   placeholder="{{$info->endereco->numero ?? "Número"}}">
            <label for="numero" class="text-black">{{$info->endereco->numero ?? "Número"}}</label>
        </div>
    </div>

    <div class="form-group col-3">
        <div class="form-floating mb-3">
            <input type="text" id="bairro" class="form-control bg-primary-subtle" name="bairro"
                   value="{{isset($info)? $info->endereco->bairro : old('bairro') }}"
                   placeholder="{{$info->endereco->bairro ?? "Bairro"}}">
            <label for="bairro" class="text-black">{{$info->endereco->bairro ?? "Bairro"}}</label>
        </div>
    </div>

    <div class="form-group col-12">
        <div class="form-floating mb-3">
            <input type="text" id="link_lattes" class="form-control bg-primary-subtle" name="link_lattes"
                   value="{{isset($info)? $info->link_lattes : old('link_lattes') }}"
                   placeholder="{{$info->link_lattes ?? "Link do Lattes"}}">
            <label for="link_lattes" class="text-black">{{$info->link_lattes ?? "Link do Lattes"}}</label>
        </div>
    </div>

    <!-- Botão de envio -->
    <div class="text-center mb-5">
        <button type="submit" class="btn btn-success btn-lg">Salvar</button>
    </div>
</form>
