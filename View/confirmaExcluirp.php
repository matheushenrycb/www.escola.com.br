<main>


  <section>
    <form class="form-group" method="post">
      <h2 class="mt-3">Excluir Professor</h2>
      <div class="form-group">
        <p>Você deseja realmente excluir o Professor <strong><?= $obprofessor->nome ?></strong>?</p>
      </div>

      <div class="form-group">
        <a href="/www.escola.com.br/Controller/controllerProfessor.php">
          <button type="button" class="btn btn-success">Cancelar</button>
        </a>

        <button type="submit" name="excluir" class="btn btn-danger">Excluir</button>
      </div>

    </form>
  </section>
</main>