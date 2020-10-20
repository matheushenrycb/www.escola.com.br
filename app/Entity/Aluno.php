<?php

namespace App\Entity;

use \App\Db\Database;
use PDO;

class Aluno
{
    /**
     * @var integer
     */
    public $id;



    /**
     * @var string
     */
    public $nome;


    /**
     * @var string
     */
    public $cpf;

    /**
     * @var string (m/f)
     */
    public $genero;


    /**
     * @var string
     */
    public $telefone;

    /**
     * @var string
     */
    public $cep;

    /**
     * @var string
     */
    public $turma;

    /**
     * @var string
     */
    public $estadoorigem;

    /**
     * @var string
     */
    public $cidadeorigem;

    /**
     * metodo que cadastra um novo aluno
     * @var boolean
     */
    public function cadastrar()
    {
        //definir data  copiar para instituicao
       // $this->datacriacao = date('Y-m-d H:i:s');
        // inserir aluno no banco
        $obDatabase = new Database('aluno');
        $this->id = $obDatabase->insert([
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'genero' => $this->genero,
            'telefone' => $this->telefone,
            'cep' => $this->cep,
            'turma' => $this->turma,
            'estadoorigem' => $this->estadoorigem,
            'cidadeorigem' => $this->cidadeorigem
        ]);
        return true;

                   // print_r($this);
    
        //atribuir o id de aluno na instancia

        //retornar sucesso
    }

    /**
     * metodo que atualiza o aluno no banco
     * @return boolean
     * 
     */
    public function atualizar(){
        return (new Database('aluno'))->update('id='.$this->id,[
            'nome' => $this->nome,
            'cpf' => $this->cpf,
            'genero' => $this->genero,
            'telefone' => $this->telefone,
            'cep' => $this->cep,
            'turma' => $this->turma,
            'estadoorigem' => $this->estadoorigem,
            'cidadeorigem' => $this->cidadeorigem
        ]);
    }
    /**
     * metodo responsavel por obter os alunos do banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @return array
     * 
     */
    public static function getAlunos($where = null, $order=null, $limit=null){
        return( new Database('aluno'))-> select($where, $order,$limit)
                                      -> fetchAll(PDO::FETCH_CLASS, self::class);
    }


    
    /**
     * metodo responsavel por encontrar aluno atraves do id
     * @param integer
     * @return Aluno
     * 
     */
    public static function getAluno($id){
        return( new Database('aluno'))-> select('id='.$id)
                                        ->fetchObject(self::class);  

    }      
    
    public function excluir(){
        return(new Database('aluno'))->delete('id = '.$this->id);
    }
}
