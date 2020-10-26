<main>

    <section>
        

    </section>
    <h2 class="mt-3 ml-3">Excluir Aluno</h2>
    <div class="container">

        <form id="formCadastroDeAluno" method="post">
            <div class="form-group">
                <p>Dseseja Realmente excluir Aluno<strong><?=$obaluno->nome?></strong>?</p>
            </div>
            <a href="index.php">
            <button type="button" class="btn btn-success ml-3">Cancelar</button>
            </a>
            <button type="submit" class="btn btn-danger">Salvar</button>
        </form>
    </div>
</main>