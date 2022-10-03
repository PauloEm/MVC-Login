<?php

namespace App\Controller;


use App\Model\ProdutoModel;

class ProdutoController 
{
    public static function index()
    {
       
        include 'Model/ProdutoModel.php';
        
        $model = new ProdutoModel(); 
        $model->getAllRows(); 

        include 'View/modules/Produto/ListaProduto.php'; 
    }


    public static function form()
    {
        include 'Model/ProdutoModel.php'; 
        $model = new ProdutoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 

        include 'View/modules/Produto/FormProduto.php'; 
    }


   
    public static function save()
    {
       include 'Model/ProdutoModel.php'; 

       $model = new ProdutoModel();

       $model->id =  $_POST['id'];
       $model->nome_produto = $_POST['nome_produto'];
       $model->codigo = $_POST['codigo'];
       $model->descricao = $_POST['descricao'];

       $model->save(); 

       header("Location: /produto"); 
    }


   
    public static function delete()
    {
        include 'Model/ProdutoModel.php'; 

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /produto"); 
    }
}