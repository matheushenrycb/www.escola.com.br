<main>

    <section>
        <a href="index.php">
            <button class="btn btn-success ml-3"> Voltar</button>
        </a>

    </section>
    <h2 class="mt-3 ml-3"><?=TITLE?></h2>
    <div class="container">

        <form id="formCadastroDeAluno" method="post">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nomeID">Nome</label>
                    <input type="text" class="form-control" onclick="mudarCorInput()" name="nome" value="<?=$obAluno->nome?>" id="nomeID" placeholder="nome">
                </div>
                <div class="form-group col-md-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" value="<?=$obAluno->cpf?>"id="cpf" placeholder="CPF" autocomplete="off" maxlength="14">

                </div>
                <div class="form-group col-md-3">
                    <label for="sexoID">Sexo</label>
                    <div>
                        <div class="form-check form-check-inline">
                            <label class="form-control">
                                <input type="radio" name="genero" value="m" checked>Masculino
                            </label>
                        </div>

                        <div class="form-check form-check-inline">
                            <label class="form-control">
                                <input type="radio" name="genero" value="f"<?=$obAluno->genero=='n'?'checked':''?>>Feminino
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="telefoneID">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="teleFoneID">
                </div>
                <div class="form-group col-md-4">
                    <label for="cepID">CEP</label>
                    <input type="number" class="form-control" name="cep" id="cepID">
                </div>
                <div class="form-group col-md-4">
                    <label for="turmaID">Turma</label>
                    <select name="turma" id="turmaID" class="form-control">
                        <option value="0" selected>Escolher...</option>
                        <option value="1225">1225</option>
                        <option value="1225">1226</option>
                        <option value="32212">32212</option>
                        <option value="32213">32213</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="estadoID">Estado Origem</label>
                    <select id="estadoID" onchange="procurarCidade()" name="estadoorigem" class="form-control">
                        <option value="0" selected>Escolher...</option>
                        <option value="sp">São Paulo</option>
                        <option value="ms">Mato Grosso do Sul</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="cidadeID">Cidade Origem</label>
                    <select id="cidadeID" name="cidadeorigem" class="form-control">
                        <option value="0" selected>Escolher...</option>
                        <option value="cbr">Corumbá</option>
                        <option value="ldr">Ladário</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</main>