<?php



require __DIR__.'/vendor/autoload.php';
use \App\Entity\Aluno;
$alunos = Aluno::getAlunos();
include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagemAlunos.php';
include __DIR__.'/includes/footer.php';