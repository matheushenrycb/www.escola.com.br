<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Professor;

//validação do ID
if(!isset($_GET['id'])or !is_numeric($_GET['id'])){
    header('location:/www.escola.com.br/Controller/controllerProfessor.php?status=error');
    exit;
}

// consultar Professor
 $obprofessor = Professor::getProfessor($_GET['id']);
 //validar o Professor
 if(!$obprofessor instanceof Professor){
    header('location: /www.escola.com.br/Controller/controllerProfessor.php?status=error');
    exit;
 }
 

//Validação do POST
if (isset($_POST['excluir'])) {
    $obprofessor->excluir();
    header('location: /www.escola.com.br/Controller/controllerProfessor.php?status=success');
    exit;
}
include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/confirmaExcluirp.php';
include __DIR__ . '\../View/footer.php';
