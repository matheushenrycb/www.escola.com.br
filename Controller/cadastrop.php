<?php

require __DIR__ . '\../vendor/autoload.php';
//print_r($_POST);

use \App\Model\Professor;
$obprofessor = new Professor;
define('TITLEP', 'Cadastrar Professor');

//Validação do POST
if (isset($_POST['nome'], $_POST['cpf'], $_POST['sala'], $_POST['turma'],
$_POST['materia'])) {

   
    $obprofessor->nome= $_POST['nome'];
    $obprofessor->cpf= $_POST['cpf'];
    $obprofessor->sala= $_POST['sala'];
    $obprofessor->turma= $_POST['turma'];
    $obprofessor->materia= $_POST['materia'];
    $obprofessor->cadastrar();
    header('location:/www.escola.com.br/Controller/controllerProfessor.php?status=success');
    exit;
}



include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioProfessor.php';
include __DIR__ . '\../View/footer.php';
