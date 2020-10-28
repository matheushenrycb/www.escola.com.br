<?php

require __DIR__ . '/vendor/autoload.php';
//print_r($_POST);

use \App\Entity\Aluno;

//validação do ID
if(!isset($_GET['id'])or !is_numeric($_GET['id'])){
    header('location: index.php?status=error');
    exit;
}

// consultar aluno
 $obaluno = Aluno::getAluno($_GET['id']);
 //validar o aluno
 if(!$obaluno instanceof Aluno){
    header('location: index.php?status=error');
    exit;
 }
 

//Validação do POST
if (isset($_POST['excluir'])) {
    $obaluno->excluir();
    header('location: index.php?status-success');
    exit;
}
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/confirmaExcluir.php';
include __DIR__ . '/includes/footer.php';
