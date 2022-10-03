<?php

namespace App\Controller;

use App\Controller\CategoriaProdutoController;
use App\Controller\PessoaController;
use App\Controller\ProdutoController;

$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);


switch($url)
{
    case '/':
        echo "página inicial";
    break;

    case '/pessoa':
        
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/form/save':
        PessoaController::save();
    break;

    case '/pessoa/delete':
        PessoaController::delete();
    break;

   

    case '/produto':
        
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/form/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;

    case '/categoriaproduto':
        
        CategoriaProdutoController::index();
    break;

    case '/categoriaproduto/form':
        CategoriaProdutoController::form();
    break;

    case '/categoriaproduto/form/save':
        CategoriaProdutoController::save();
    break;

    case '/categoriaproduto/delete':
        CategoriaProdutoController::delete();
    break;

    default:
        echo "Erro 404";
    break;
}
