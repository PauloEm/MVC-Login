<?php

namespace App\DAO;


use App\Model\ProdutoModel;
use PDO;

class ProdutoDAO
{
    
    private $conexao;


     
    public function __construct()
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        
        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


    
    public function insert(ProdutoModel $model)
    {
        
        $sql = "INSERT INTO produto (nome_produto, codigo, descricao) VALUES (?, ?, ?) ";


        
        $stmt = $this->conexao->prepare($sql);


        
        $stmt->bindValue(1, $model->nome_produto);
        $stmt->bindValue(2, $model->codigo);
        $stmt->bindValue(3, $model->descricao);

        
        $stmt->execute();
    }


    
    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET nome_produto=?, codigo=?, descricao=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome_produto);
        $stmt->bindValue(2, $model->codigo);
        $stmt->bindValue(3, $model->descricao);
        $stmt->bindValue(4, $model->id);
        $stmt->execute();
    }


    
    public function select()
    {
        $sql = "SELECT * FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        
        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


    
    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT * FROM produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel"); 
    }


   
    public function delete(int $id)
    {
        $sql = "DELETE FROM produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}