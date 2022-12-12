<main>
    <form class="row g-3" action="?page=salvar" method="POST">
        <input type="hidden" name="acao" value="cadastrar">
        <div class="col-12">
            <label for="inputName" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="inputName">
            </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Telefone</label>
            <input type="text" name="telefone" class="form-control" id="inputPassword4" placeholder="(81) 9999-9999">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Endereço</label>
            <input type="text" name="endereco" class="form-control" id="inputAddress" placeholder="Rua 8888">
        </div>
        <div class="col-md-6">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" id="inputCity">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" name="estado" class="form-select">
            <option selected>Choose...</option>
            <option>Pernambuco</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="inputZip" class="form-label">CEP</label>
            <input type="text" name="cep" class="form-control" id="inputZip">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
        </form>
</main>
