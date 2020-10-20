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
                    <input type="text" class="form-control"  name="nome" value="<?=$obaluno->nome?>" placeholder="nome">
                </div>
                <div class="form-group col-md-3">
                    <label for="cpf">CPF</label>
                    <input type="text" class="form-control" name="cpf" value="<?=$obaluno->cpf?>"id="cpf" placeholder="CPF" autocomplete="off" maxlength="14">

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
                                <input type="radio" name="genero" value="f"<?=$obaluno->genero=='n'?'checked':''?>>Feminino
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="telefoneID">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" value="<?=$obaluno->telefone?>">
                </div>
                <div class="form-group col-md-4">
                    <label for="cepID">CEP</label>
                    <input type="number" class="form-control" name="cep" value="<?=$obaluno->cep?>" >
                </div>

                <div class="form-group col-md-4">
                    <label for="cepID">Turma</label>
                    <input type="text"  class="form-control" name="turma" value="<?=$obaluno->turma?>" >
                </div>

                <div class="form-group col-md-6">
                    <label for="cepID">Estado</label>
                    <input type="text"  class="form-control" name="estadoorigem" value="<?=$obaluno->estadoorigem?>" >
                </div>


                <div class="form-group col-md-6">
                    <label for="cepID">Cidade</label>
                    <input type="text" class="form-control" name="cidadeorigem" value="<?=$obaluno->cidadeorigem?>">
                </div>

            <button type="submit" class="btn btn-success">Salvar</button>
        </form>
    </div>
</main>