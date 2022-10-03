<?php

namespace App\Controller;

use App\Model\CategoriaProdutoModel;


class CategoriaProdutoController
{
    public static function index()
    {
       
        include 'Model/CategoriaProdutoModel.php';
        
        $model = new CategoriaProdutoModel(); 
        $model->getAllRows(); 

        include 'View/modules/CategoriaProduto/ListaCategoriaProduto.php'; 
    }


    public static function form()
    {
        include 'Model/CategoriaProdutoModel.php'; 
        $model = new CategoriaProdutoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 

        include 'View/modules/CategoriaProduto/FormCategoriaProduto.php'; 
    }


   
    public static function save()
    {
       include 'Model/CategoriaProdutoModel.php'; 

       $model = new CategoriaProdutoModel();

       $model->id =  $_POST['id'];
       $model->categoria_produto = $_POST['categoria_produto'];

       $model->save(); 

       header("Location: /categoriaproduto"); 
    }



    public static function delete()
    {
        include 'Model/CategoriaProdutoModel.php'; 

        $model = new CategoriaProdutoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /categoriaproduto"); 
    }
}