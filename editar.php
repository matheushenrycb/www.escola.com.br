<?php

require __DIR__ . '/vendor/autoload.php';
//print_r($_POST);
define('TITLE','Editar aluno');
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
 exit;

//Validação do POST
if (isset($_POST['nome'], $_POST['cpf'], $_POST['genero'], $_POST['telefone'],
$_POST['cep'], $_POST['turma'], $_POST['estadoorigem'], $_POST['cidadeorigem'])) {

    $obaluno->nome  = $_POST['nome'];
    $obaluno->cpf  = $_POST['cpf'];
    $obaluno->genero  = $_POST['genero'];
    $obaluno->telefone  = $_POST['telefone'];
    $obaluno->cep  = $_POST['cep'];
    $obaluno->turma  = $_POST['turma'];
    $obaluno->estado  = $_POST['estadoorigem'];
    $obaluno->cidade  = $_POST['cidadeorigem'];
    // print_r($obaluno);
    //$obaluno->cadastrar();
}
/**
*if (isset($_POST['nomearea'])) {
*
*    $obarea = new Area;
*}
*if (isset($_POST['nomeinst'])) {
*
*    $obinstituicao = new Instituicao;
*}
*if (isset($_POST['nome'], $_POST['dataverificacao'], $_POST['enade'], $_POST['area'])) {

*    $obaluno = new Curso;
*}
*
*if (isset($_POST['turma'])) {
*
*   $obinstituicao = new Sala;
*}
*/

header('location: index.php?status-success');
exit;
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formularioAlunos.php';
include __DIR__ . '/includes/footer.php';
