

<form class="row g-3 pt-5" action="{{ isset($titular) ? route('titulares.update', $titular->id) : route('titulares.store', $objeto->id) }}"
      method="POST">
    @csrf
    @isset($titular)
        @method('PUT')
    @endisset

    <!-- Campos do formulário -->

        <div class="form-group col-6">
            <div class="form-floating mb-3">
                <input type="text" id="nome" class="form-control bg-primary-subtle" name="nome"
                       value="{{isset($titular)? $titular->nome : old('nome') }}"
                       placeholder="{{$titular->nome ?? "Nome"}}" {{isset($titular)? : 'required'}}>
                <label for="nome" class="text-black">{{$titular->nome ?? "Nome"}}</label>
            </div>
        </div>

        <div class="form-group col-6">
            <div class="form-floating mb-3">
                <input type="text" id="cnpj" class="form-control bg-primary-subtle" name="cnpj"
                       value="{{isset($titular)? $titular->cnpj: old('cnpj') }}"
                       placeholder="{{$titular->cnpj ?? "CNPJ"}}"
                    {{isset($titular)? : 'required'}}>
                <label for="cnpj" class="text-black">{{$titular->cnpj ?? "CNPJ"}}</label>
            </div>
        </div>

        <div class="form-group col-6">
            <div class="form-floating mb-3">
                <input type="email" id="email" class="form-control bg-primary-subtle" name="email"
                       value="{{isset($titular)? $titular->endereco->email : old('email') }}"
                       placeholder="{{$titular->endereco->endereco->email ?? "E-mail"}}">
                <label for="email" class="text-black">{{$titular->endereco->email ?? "E-mail"}}</label>
            </div>
        </div>

        <div class="form-group col-6">
            <div class="form-floating mb-3">
                <input type="text" id="telefone" class="form-control bg-primary-subtle" name="telefone"
                       value="{{isset($titular)? $titular->endereco->telefone : old('telefone') }}"
                       placeholder="{{$titular->endereco->endereco->telefone ?? "Telefone"}}">
                <label for="telefone" class="text-black">{{$titular->endereco->telefone ?? "Telefone"}}</label>
            </div>
        </div>


        <div class="form-group col-2">
            <div class="form-floating mb-3">
                <input type="text" id="cep" class="form-control bg-primary-subtle" name="cep"
                       value="{{isset($titular)? $titular->endereco->cep : old('cep') }}"
                       placeholder="{{$titular->endereco->cep ?? "CEP"}}">
                <label for="cep" class="text-black">{{$titular->endereco->cep ?? "CEP"}}</label>
            </div>
        </div>
        <div class="form-group col-5">
            <div class="form-floating mb-3">
                <input type="text" id="logradouro" class="form-control bg-primary-subtle" name="logradouro"
                       value="{{isset($titular)? $titular->endereco->logradouro : old('logradouro') }}"
                       placeholder="{{$titular->endereco->logradouro ?? "Logradouro"}}">
                <label for="logradouro"
                       class="text-black">{{$titular->endereco->logradouro ?? "Logradouro"}}</label>
            </div>
        </div>
        <div class="form-group col-2">
            <div class="form-floating mb-3">
                <input type="text" id="numero" class="form-control bg-primary-subtle" size="10" name="numero"
                       value="{{isset($titular)? $titular->endereco->numero : old('numero') }}"
                       placeholder="{{$titular->endereco->numero ?? "Número"}}">
                <label for="numero" class="text-black">{{$titular->endereco->numero ?? "Número"}}</label>
            </div>
        </div>
        <div class="form-group col-3">
            <div class="form-floating mb-3">
                <input type="text" id="bairro" class="form-control bg-primary-subtle" name="bairro"
                       value="{{isset($titular)? $titular->endereco->bairro : old('bairro') }}"
                       placeholder="{{$titular->endereco->bairro ?? "Bairro"}}">
                <label for="bairro" class="text-black">{{$titular->endereco->bairro ?? "Bairro"}}</label>
            </div>
        </div>


    <!-- Botão de envio -->
    <div class="text-center">
        <button type="submit" class="btn btn-success btn-lg">Salvar</button>
    </div>
</form>
