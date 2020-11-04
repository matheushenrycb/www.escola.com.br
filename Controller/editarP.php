<?php

require __DIR__ . '\../vendor/autoload.php';



use \App\Model\Professor;

define('TITLEP', 'Editar Professor');
if (!isset($_GET['id']) or !is_numeric($_GET['id'])) {
   // echo "<script>alert('". $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerProfessor.php?status=error');
    exit;
}

$obprofessor = Professor::getProfessor($_GET['id']);
if (!$obprofessor instanceof Professor) {
    // echo($obProfessor);
    echo "<script>alert('". $_GET['id'] . "');</script>";
    header('location:/www.escola.com.br/Controller/controllerProfessor.php?status=error');
    exit;
}
//Validação do POST
if (isset($_POST['nome'], $_POST['cpf'], $_POST['sala'], $_POST['turma'],
$_POST['materia'])) {
   // echo "<script>alert('". $_GET['id'] . "');</script>";
    
    $obprofessor->nome  = $_POST['nome'];
    $obprofessor->cpf  = $_POST['cpf'];
    $obprofessor->sala  = $_POST['sala'];
    $obprofessor->turma  = $_POST['turma'];
    $obprofessor->materia  = $_POST['materia'];
    
    //print_r($obProfessor);
    $obprofessor->atualizar();
    header('location: /www.escola.com.br/Controller/controllerProfessor.php?status=success');
    exit;
}

include __DIR__ . '\../View/header.php';
include __DIR__ . '\../View/formularioProfessor.php';
include __DIR__ . '\../View/footer.php';
