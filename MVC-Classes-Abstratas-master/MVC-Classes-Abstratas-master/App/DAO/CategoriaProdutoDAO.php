<?php

namespace App\DAO;


use App\Model\CategoriaProdutoModel;
use PDO;

class CategoriaProdutoDAO
{
    
    private $conexao;


     
    public function __construct()
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


    
    public function insert(CategoriaProdutoModel $model)
    {
        
        $sql = "INSERT INTO categoria (categoria_produto) VALUES (?) ";


        
        $stmt = $this->conexao->prepare($sql);


        
        $stmt->bindValue(1, $model->categoria_produto);
        
        $stmt->execute();
    }


    
    public function update(CategoriaProdutoModel $model)
    {
        $sql = "UPDATE categoria SET categoria_produto=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->categoria_produto);
        $stmt->bindValue(2, $model->id);
        $stmt->execute();
    }
   
    public function select()
    {
        $sql = "SELECT * FROM categoria ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/CategoriaProdutoModel.php';

        $sql = "SELECT * FROM categoria WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("CategoriaProdutoModel"); 
    }


   
    public function delete(int $id)
    {
        $sql = "DELETE FROM categoria WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}