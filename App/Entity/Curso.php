<?php

namespace App\Entity;

class Curso
{
    /**
     * @var integer
     */
    public $id;



    /**
     * define o nome do curso
     * @var string
     */
    public $nome;

    /**
     * define a data de criação
     * @var string
     */
    public $datacriacao;


    /**
     * define a media de avaliação
     * @var float
     */
    public $enade;

     /**
     * vem da outra classe
     * @var string
     */
    public $area;

}
