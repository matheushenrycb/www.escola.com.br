<?php
require __DIR__.'\../vendor/autoload.php';


use \App\Model\Aluno;
$alunos = Aluno::getAlunos();
//print_r($alunos);
define('TITLELA', 'Lista de Alunos');

include __DIR__.'\../View/header.php';
include __DIR__.'\../View/listagemAlunos.php';
include __DIR__.'\../View/footer.php';