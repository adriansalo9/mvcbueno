<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de productos</h1>
    <?php
        foreach ($productos as $producto ) {?>
        <tr>
        <td><?= $producto->id?> </td>
        <td><?= $producto->name?> </td>
        </tr>
        <?php } 
        ?>    
</body>
</html>