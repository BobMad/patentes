<div class="">
    <form action="{{ isset($titular) ? route('titulares.update', $titular->id) : route('titulares.store') }}"
          method="POST">
        @csrf

        <!-- Campos do formulário -->

        <div class="form-group">
            <div class="form-floating mb-3 mt-3">
                <input type="text" id="nome" class="form-control bg-primary-subtle" name="nome" placeholder="{{$titular->nome ?? "Nome"}}" required>
                <label for="nome" class="text-black">{{$titular->nome ?? "Nome"}}</label>
            </div>
        </div>

        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="text" id="cnpj" class="form-control bg-primary-subtle" name="cnpj" placeholder="{{$titular->cnpj ?? "CNPJ"}}"
                       required>
                <label for="cnpj" class="text-black">{{$titular->cnpj ?? "CNPJ"}}</label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="email" id="email" class="form-control bg-primary-subtle" name="email" placeholder="{{$titular->endereco->email ?? "E-mail"}}"
                       required>
                <label for="email" class="text-black">{{$titular->endereco->email ?? "E-mail"}}</label>
            </div>
        </div>

        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="text" id="telefone" class="form-control bg-primary-subtle" name="telefone" placeholder="{{$titular->endereco->telefone ?? "Telefone"}}"
                       required>
                <label for="telefone" class="text-black">{{$titular->endereco->telefone ?? "Telefone"}}</label>
            </div>
        </div>

        <div class="form-group d-inline-flex">
            <div class="form-floating mb-3">
                <input type="text" id="cep" class="form-control bg-primary-subtle" size="10" name="cep" placeholder="{{$titular->endereco->cep ?? "CEP"}}"
                       required>
                <label for="cep" class="text-black">{{$titular->endereco->cep ?? "CEP"}}</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="logradouro" class="form-control bg-primary-subtle" size="80" name="logradouro" placeholder="{{$titular->endereco->logradouro ?? "Logradouro"}}"
                       required>
                <label for="logradouro" class="text-black">{{$titular->endereco->logradouro ?? "Logradouro"}}</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="numero" class="form-control bg-primary-subtle" size="10" name="numero" placeholder="{{$titular->endereco->numero ?? "Número"}}"
                       required>
                <label for="numero" class="text-black">{{$titular->endereco->numero ?? "Número"}}</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="bairro" class="form-control bg-primary-subtle" size="42" name="bairro" placeholder="{{$titular->endereco->bairro ?? "Bairro"}}"
                       required>
                <label for="bairro" class="text-black">{{$titular->endereco->bairro ?? "Bairro"}}</label>
            </div>
        </div>

        <!-- Botão de envio -->
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
        </div>
    </form>
</div>
