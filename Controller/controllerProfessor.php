<?php


require __DIR__.'\../vendor/autoload.php';
use \App\Model\Professor;
$professor = Professor::getProfessores();
define('TITLELP', 'Lista de Professores');
include __DIR__.'\../View/header.php';
include __DIR__.'\../View/listagemProfessor.php';
include __DIR__.'\../View/footer.php';