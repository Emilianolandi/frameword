<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/productos.css">
    <link rel="stylesheet" href="css/navegacion.css">
    <title>Productos</title>
</head>
<body>
<div class="nav">
<nav class="nav_principal">
        
        <ul type=none>
           
            <li>
            <a href="<?= site_url('/') ?>">Inicio</a>

              <li>  <a href="<?= site_url('/Stock') ?>">Stock</a> </li>
               
</ul>

</nav>
</div>
<h1 class="cabeza">
    Lista de productos
</h1>
<div class="base">
    <table class="tabla">
        <thead>
            <div class="caja">
           
            <th>Nombre</th>
            <th>Precio</th>
            <th>Detalle</th>
        </thead>
        <tbody>
          
            
            <?php 
            foreach ($productos as $producto) : ?>
                    <tr>
                       
                        <td><?= $producto['Nombre'] ?></td>
                        <td>$<?= $producto['Precio'] ?></td>
                        <td>
                            <button class="link">
                            <a href="<?= site_url('Stock/verDetalle/' . $producto['id']) ?>">Ver detalles</a>
                            </button>
                            <br>
                            <button class="link">
                           
                            <a href="<?= site_url('Stock/actualizarStock/' . $producto['id']) ?>">Actualizar Stock</a>
                            </button> 
                        </td>
                    </tr>
                <?php endforeach;
            
        
            ?>
    </div>
        </tbody>
    </table>
    </div>
    <?php
$lugar='Buenos Aires';
$telefono='11-2233-4455';
$derechos='Derechos Reservados';
$R= '';
?>
<footer>
    <div class="pie_pagina">
        <div class="section">
            <ul>
                <li>
                <?php
                echo
                $lugar
                ?>
                </li>
                <li>
               <?php
                echo
                $telefono

                ?>
                </li>
                <li>
               <?php
            echo 
            $derechos

               ?>
               
            </li>            
          
        </ul>
        
        </div>
    </div>

</footer>

</body>
</html>
