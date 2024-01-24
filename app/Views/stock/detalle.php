<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Detalles del producto </title>
</head>
<body>
    
    <h1> Detalles del producto</h1>

    <p><strong>Nombre: </strong>  <?= $producto['Nombre'] ?></p>
    <p><strong>Descripcion:</strong> <?= $producto['descripcion'] ?></p>
    <p><strong>Precio:</strong> <?= $producto['Precio'] ?></p>
    <p><strong>Stock:</strong> <?= $producto['Stock'] ?></p>
    

    <a href="<?= site_url('/')?>"> Volver al inicio</a>

</body>
</html>