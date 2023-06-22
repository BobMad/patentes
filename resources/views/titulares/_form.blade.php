
    <form action="{{ isset($titular) ? route('titulares.update', $titular->id) : route('titulares.store') }}"
          method="POST">
        @csrf

        <!-- Campos do formulário -->
        <div class="form-group">
            <label for="nome" class="form-label mt-4">Nome:</label>
            <input type="text" id="nome" name="nome" class="form-control" value="{{ isset($titular) ? $titular->nome : old('nome') }}"
                   required>
        </div>

        <div class="form-group">
            <label class="form-label mt-3">Floating labels</label>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="nome" placeholder="nome">
                <label for="nome">Nome</label>
            </div>

        <div>
            <label for="cnpj">CNPJ:</label>
            <input id="cnpj" name="cnpj" required{{ isset($titular) ? $titular->cnpj : old('cnpj') }}>
        </div>

        <div>
            <label for="email">E-mail:</label>
            <input id="email" name="email" required{{ isset($titular) ? $titular->endereco->email : old('email') }}>
        </div>

        <div>
            <label for="telefone">Telefone:</label>
            <input id="telefone" name="telefone"
                   required {{ isset($titular) ? $titular->endereco->telefone : old('telefone') }}>
        </div>

        <div>
            <label for="cep logradouro numero bairro">Endereço:</label>
            <input id="cep" name="cep" required{{ isset($titular) ? $titular->endereco->cep : old('cep') }}>
            <input id="logradouro" name="logradouro"
                   required{{ isset($titular) ? $titular->endereco->logradouro : old('logradouro') }}>
            <input id="numero" name="numero" required{{ isset($titular) ? $titular->endereco->numero : old('numero') }}>
            <input id="bairro" name="bairro" required{{ isset($titular) ? $titular->endereco->bairro : old('bairro') }}>
        </div>

        <!-- Botão de envio -->
        <button type="submit">Salvar</button>
    </form>

