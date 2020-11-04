<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Aluno;

//validação do ID
if(!isset($_GET['id'])or !is_numeric($_GET['id'])){
    header('location:/www.escola.com.br/?status=error');
    exit;
}

// consultar aluno
 $obaluno = Aluno::getAluno($_GET['id']);
 //validar o aluno
 if(!$obaluno instanceof Aluno){
    header('location:/www.escola.com.br/?status=error');
    exit;
 }
 

//Validação do POST
if (isset($_POST['excluir'])) {
    $obaluno->excluir();
    header('location: index.php?status=success');
    exit;
}
include __DIR__ . '/View/header.php';
include __DIR__ . '/View/confirmaExcluir.php';
include __DIR__ . '/View/footer.php';
