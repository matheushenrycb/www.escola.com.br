<?php

namespace App\Db;

use PDO;
use PDOException;

class Database
{
    /**
     * @var string
     * HOST de conexao com o banco de dados
     */
    const HOST = 'localhost';
    /**
     * @var string
     * nome banco de dados
     */
    const NAME = 'escola';

    /**
     * @var string
     * usuario do banco
     */
    const USER = 'root';
    /**
     * @var string
     * usuario do banco
     */
    const PASS = '';

    /**
     * @var string
     * mome da tabela que sera manipulada
     */
    private $table;


    /**
     * @var PDO
     * instancia de conexao com  banco de dados
     */
    private $connection;

    public function __construct($table = null)
    {

        $this->table = $table;
        $this->setConnection();
    }
    /**
     * 
     * metodo responsavel por criar conexao com banco de dados
     */
    private function setConnection()
    {

        try {
            $this->connection = new PDO('mysql:host=' . self::HOST . ';dbname=' . self::NAME, self::USER, self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('ERROR:' . $e->getMessage());
        }
    }


    /**
     * metodo que executa queries entro do banco
     * @param string $query
     * @param array $params
     * @return PDOstatement
     */
    public function execute($query, $params = [])
    {
        try {
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        } catch (PDOException $e) {
            die('ERROR:' . $e->getMessage());
        }
    }

    /**
     * metodo que insere dados no banco
     * @param array $values [fild =>value]
     * @return integer ID inserido
     */

    public function insert($values)
    {
        // Dados da query
        $fields = array_keys($values);
        $binds = array_pad([], count($fields), '?');

        //monta query
        $query = 'INSERT INTO ' . $this->table . '(' . implode(',', $fields) . ') VALUES(' . implode(',', $binds) . ')';

        //executa o insert
        $this->execute($query, array_values($values));

        //retorna o id inserido
        return $this->connection->lastInsertId();
    }



    /**
     * metodo responsavel por obtermos a consulta do banco
     * @param string $where
     * @param string $order
     * @param string $limit
     * @param string $fields
     * @return PDOStatement
     * 
     */
    public function select($where = null, $order = null, $limit = null, $fields = '*')
    {
        //DADOS  DAS QUERY
        $where = strlen($where) ? 'WHERE' . $where : '';
        $order = strlen($order) ? 'ORDER BY' . $order : '';
        $limit = strlen($limit) ? 'LIMIT' . $limit : '';

        //monta a query
        $query = 'SELECT ' . $fields . ' FROM ' . $this->table . ' ' . $where . ' ' . $order . ' ' . $limit;
        return $this->execute($query);
    }
    /**
     * metodo que atualiza os dados no banco
     * @param array $values [fild =>value]
     * @return boolean
     */
    public function update($where, $values) {
        $fields=array_keys($values);
        $query='UPDATE '.$this->table .' SET '.implode('=?,',$fields).' WHERE'.$where;
        $this->execute($query, array_values($values));
        return true;
    }
     /**
     * metodo que exclui dados do banco
     * @param  string $where
     * @return boolean
     */
    public function delete($where){

        $query = 'DELETE FROM '.$this->table.'WHERE'.$where;

        $this->execute($query);

        return true;
    }
}
