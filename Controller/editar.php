<?php

require __DIR__ . '\../vendor/autoload.php';



use \App\Model\Aluno;

define('TITLE', 'Editar Aluno');
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
   // echo "<script>alert('". $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerAluno.php?status=error');
    exit;
}

$obaluno = Aluno::getAluno($_GET['id']);
if (!$obaluno instanceof Aluno) {
    // echo($obaluno);
    echo "<script>alert('". $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerAluno.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'], $_POST['cpf'], $_POST['genero'], $_POST['telefone'],
$_POST['cep'], $_POST['turma'], $_POST['estadoorigem'], $_POST['cidadeorigem'])) {
   // echo "<script>alert('". $_GET['id'] . "');</script>";
    
    $obaluno->nome  = $_POST['nome'];
    $obaluno->cpf  = $_POST['cpf'];
    $obaluno->genero  = $_POST['genero'];
    $obaluno->telefone  = $_POST['telefone'];
    $obaluno->cep  = $_POST['cep'];
    $obaluno->turma  = $_POST['turma'];
    $obaluno->estadoorigem  = $_POST['estadoorigem'];
    $obaluno->cidadeorigem  = $_POST['cidadeorigem'];
    //print_r($obaluno);
    $obaluno->atualizar();
    header('location: /www.escola.com.br/Controller/controllerAluno.php?status=success');
    exit;
}


include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioAlunos.php';
include __DIR__ . '\../View/footer.php';
