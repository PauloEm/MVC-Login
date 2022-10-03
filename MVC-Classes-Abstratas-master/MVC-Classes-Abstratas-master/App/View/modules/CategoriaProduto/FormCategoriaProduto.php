<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categoria</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Categorias</legend>

        <form method="post" action="/categoriaproduto/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="categoria_produto">Categoria do Produto:</label>
            <input id="categoria_produto" name="categoria_produto" value="<?= $model->categoria_produto ?>" type="text" />
            
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>