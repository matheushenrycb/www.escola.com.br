<?php

require __DIR__ . '/vendor/autoload.php';
//print_r($_POST);

use \App\Entity\Aluno;
$obaluno = new Aluno;
define('TITLE', 'Cadastrar Aluno');

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
    $obaluno->cadastrar();
    header('location: index.php?status-success');
    exit;
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


include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/formularioAlunos.php';
include __DIR__ . '/includes/footer.php';
