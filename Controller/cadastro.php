<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Aluno;
$obaluno = new Aluno;
define('TITLE', 'Cadastrar Aluno');

//Validação do POST
if (isset($_POST['nome'], $_POST['cpf'], $_POST['genero'], $_POST['telefone'],
$_POST['cep'], $_POST['turma'], $_POST['estadoorigem'], $_POST['cidadeorigem'])) {

   
    $obaluno->nome= $_POST['nome'];
    $obaluno->cpf= $_POST['cpf'];
    $obaluno->genero= $_POST['genero'];
    $obaluno->telefone= $_POST['telefone'];
    $obaluno->cep= $_POST['cep'];
    $obaluno->turma= $_POST['turma'];
    $obaluno->estadoorigem= $_POST['estadoorigem'];
    $obaluno->cidadeorigem= $_POST['cidadeorigem'];
    $obaluno->cadastrar();
    header('location:/www.escola.com.br/Controller/controllerAluno.php?status=success');
    exit;
}



include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioAlunos.php';
include __DIR__ . '\../View/footer.php';
