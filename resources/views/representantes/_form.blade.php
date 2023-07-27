<div class="">
    <form action="{{ isset($representante) ? route('representantes.update', $representante->id) : route('representantes.store', $objeto->id) }}"
          method="POST">
        @csrf

        <!-- Campos do formulário -->
<div class="row">
        <div class="form-group col-md-7">
            <div class="form-floating mb-3">
                <input type="text" id="nome" class="form-control bg-primary-subtle" name="nome" placeholder="{{$representante->nome ?? "Nome"}}" required>
                <label for="nome" class="text-black">{{$representante->nome ?? "Nome"}}</label>
            </div>
        </div>

        <div class="form-group col-md-2">
            <div class="form-floating mb-3">
                <input type="text" id="rg" class="form-control bg-primary-subtle" name="rg" placeholder="{{$representante->rg ?? "RG"}}"
                       required>
                <label for="rg" class="text-black">{{$representante->rg ?? "RG"}}</label>
            </div>
        </div>

        <div class="form-group col">
            <div class="form-floating mb-3">
                <input type="text" id="cpf" class="form-control bg-primary-subtle" name="cpf" placeholder="{{$representante->cpf ?? "CPF"}}"
                       required>
                <label for="cpf" class="text-black">{{$representante->cpf ?? "CPF"}}</label>
            </div>
        </div>
</div>
<div class="row">
        <div class="form-group col-md-auto ">
            <div class="form-floating mb-3">
                <input type="text" id="campus" size="73" class="form-control bg-primary-subtle" name="campus" placeholder="{{$representante->campus ?? "Campus"}}"
                       required>
                <label for="campus" class="text-black">{{$representante->campus ?? "Campus"}}</label>
            </div>
        </div>

        <div class="form-group col-md-auto">
            <div class="form-floating mb-3">
                <input type="text" id="produto" size="75" class="form-control bg-primary-subtle" name="produto" placeholder="{{$representante->produto ?? "Produto"}}"
                       required>
                <label for="produto" class="text-black">{{$representante->produto ?? "Produto"}}</label>
            </div>
        </div>

        <!-- Botão de envio -->
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg">Salvar</button>
        </div>

</div>
    </form>
</div>
