<?php

$mensagem = '';
if (isset($_GET['status'])) {
    switch ($_GET['status']) {
        case 'success':
            $mensagem = '<div class="alert alert-success">Ação executada com sucesso!</div>';
            break;
        case 'error':
            $mensagem = '<div class="alert alert-danger">Ação nao executada</div>';
            break;
    }
}

$resultados = '';
foreach ($alunos as $aluno) {
    $resultados .= '<tr>
                        <td>' . $aluno->id . '</td>
                        <td>' . $aluno->nome . '</td>
                        <td>' . $aluno->cpf . '</td>
                        <td>' . ($aluno->genero == 'm' ? 'Masculino' : 'Feminino') . '</td>
                        <td>' . $aluno->telefone . '</td>
                        <td>' . $aluno->cep . '</td>
                        <td>' . $aluno->estadoorigem . '</td>
                        <td>' . $aluno->cidadeorigem . '</td>
                        <td>
                        <a href="editar.php?id=' . $aluno->id . '"><button type="button" class="btn btn-primary">Editar</button>
                        </a>
                        
                        <a href="excluir.php?id=' . $aluno->id . '"><button type="button" class="btn btn-danger">Excluir</button>
                        </a>
                        </td>
                        
                        </tr>';
}

$resultados = strlen($resultados) ? $resultados : '<tr>
    <td colspan="6" class="text-center">        Nenhum aluno encontrado</td>
    </tr>';
?>

<main>
    <?= $mensagem ?>
    <section>
        <a href="cadastro.php">
            <button class="btn btn-success"> Novo +</button>
        </a>

    </section>
    <section>
        <table class="table bg-white mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Sexo</th>
                    <th>Telefone</th>
                    <th>CEP</th>
                    <th>Estado</th>
                    <th>Cidade</th>
                </tr>
            </thead>
                <tbody>
                <?=$resultados?>
                </tbody>

        </table>

    </section>

</main>