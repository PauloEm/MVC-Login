<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Produtos</legend>

        <form method="post" action="/produto/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome_produto">Nome do Produto:</label>
            <input id="nome_produto" name="nome_produto" value="<?= $model->nome_produto ?>" type="text" />

            <label for="codigo">Código de Barras:</label>
            <input id="codigo" name="codigo" value="<?= $model->codigo ?>" type="text" />

            <label for="descricao">Descrição:</label>
            <input id="descricao" value="<?= $model->descricao ?>" name="descricao" type="text" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>