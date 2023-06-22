<div class="">
    <form action="{{ isset($titular) ? route('titulares.update', $titular->id) : route('titulares.store') }}"
          method="POST">
        @csrf

        <!-- Campos do formulário -->

        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="text" id="nome" class="form-control" name="nome" placeholder="nome"
                       required{{isset($titular) ? $titular->cnpj : old('cnpj')}}>
                <label for="nome">Nome</label>
            </div>
        </div>

        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="text" id="cnpj" class="form-control" name="cnpj" placeholder="cnpj"
                       required{{ isset($titular) ? $titular->cnpj : old('cnpj') }}>
                <label for="nome">CNPJ</label>
            </div>
        </div>

        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="text" id="email" class="form-control" name="email" placeholder="email"
                       required{{ isset($titular) ? $titular->email : old('email') }}>
                <label for="nome">E-mail</label>
            </div>
        </div>

        <div class="form-group">
            <div class="form-floating mb-3">
                <input type="text" id="telefone" class="form-control" name="telefone" placeholder="telefone"
                       required{{ isset($titular) ? $titular->telefone : old('telefone') }}>
                <label for="nome">Telefone</label>
            </div>
        </div>

        <div class="form-group d-inline-flex">
            <div class="form-floating mb-3">
                <input type="text" id="cep" class="form-control" size="10" name="cep" placeholder="cep"
                       required{{ isset($titular) ? $titular->cep : old('cep') }}>
                <label for="nome">CEP</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="logradouro" class="form-control" size="80" name="logradouro"
                       placeholder="logradouro"
                       required{{ isset($titular) ? $titular->logradouro : old('logradouro') }}>
                <label for="nome">Logradouro</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="numero" class="form-control" size="10" name="numero" placeholder="numero"
                       required{{ isset($titular) ? $titular->numero : old('numero') }}>
                <label for="nome">Número</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" id="bairro" class="form-control" size="42" name="bairro" placeholder="bairro"
                       required{{ isset($titular) ? $titular->bairro : old('bairro') }}>
                <label for="nome">Bairro</label>
            </div>
        </div>

        <!-- Botão de envio -->
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
        </div>
    </form>
</div>
