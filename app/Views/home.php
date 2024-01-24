<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/navegacion.css">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet" crossorigin="anonymous"> 
  
    <title>Productos</title>
</head>
<body>


<!-- ////////////////////////////////NAVEGACION PRINCIPLA/////////////////////////////// -->
    <div class="nav">
<nav class="nav_principal">
        
        <ul type=none>
           
            <li>
                <a href="index.php">Inicio</a> </li>

              <li>  <a href="Stock">Stock</a> </li>
               
</ul>

</nav>
</div>
<!-- //////////////////////////////FIN DE LA NAVEGACION /////////////////////////////////// -->

<!-- ////////////////////////////////PRIMER DESCRIPCION///////////////////////////////////// -->
  <header>
    <h1>¡Distribuidor Mayorista de Bebidas!</h1>
    <p>¡Impulsando el Éxito de tu Negocio con Variedad y Calidad!</p>
  </header>

<strong><h1 class="titulo">Conocenos!!  </h1></strong>
<br>
<!-- ////////////////////////////////FIN DE LA DESCRIPCION//////////////////////////////////////////// -->
    

<!-- ////////////////////////////////////////INICIO DE SLIDER/////////////////////////////////////////////// -->
<div class="swiffy-slider">
    <ul class="slider-container">
        <li>
           <img src="img/s4.jpg" style="max-width: 100%;height: auto;">  </li>
            
            <li><img src="img/4.jpg" style="max-width: 100%;height: auto;"></li>
            <li><img src="img/s5.jpg" style="max-width: 100%;height: auto;"></li>
        </ul>

    <button type="button" class="slider-nav"></button>
    <button type="button" class="slider-nav slider-nav-next"></button>
 
    <div class="slider-indicators">
        <button class="active"></button>
        <button></button>
        <button></button>
    </div>
    </div>
 
</div>
</div>
<!-- ///////////////////////////////FIN DE SLIDER////////////////////////////// -->
<br>

<!-- //////////////////////////////////COMIENZA FOOTER////////////////////////// -->
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


<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script> 
<script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous" defer></script>
</body>
</html>



