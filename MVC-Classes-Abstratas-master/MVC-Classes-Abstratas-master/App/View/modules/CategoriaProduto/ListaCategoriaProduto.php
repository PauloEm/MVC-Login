<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Categoria</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Categoria do Produto</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td>
                <a href="/categoriaproduto/delete?id=<?= $item->id ?>">X</a>
            </td>

            <td><?= $item->id ?></td>

            <td>
                <a href="/categoriaproduto/form?id=<?= $item->id ?>"><?= $item->categoria_produto ?></a>
            </td>

        </tr>
        <?php endforeach ?>

        
        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>
    
</body>
</html>