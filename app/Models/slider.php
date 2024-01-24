<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Slider con PHP y jQuery</title>
  <!-- Incluye jQuery (puedes cambiar la URL a la versión que prefieras) -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <style>
    /* Estilos opcionales para mejorar la presentación */
    #slider-container {
      width: 80%;
      margin: auto;
      overflow: hidden;
    }
    #slider {
      width: 300%;
      display: flex;
      transition: transform 0.5s ease-in-out;
    }
    .slide {
      width: 100%;
      flex: 0 0 auto;
    }
    img {
      width: 100%;
      height: auto;
    }
  </style>
</head>
<body>

<div id="slider-container">
  <div id="slider">
    <?php
      // Aquí puedes colocar las imágenes de tu slider
      $images = array("imagen1.jpg", "imagen2.jpg", "imagen3.jpg");

      foreach ($images as $image) {
        echo '<div class="slide"><img src="ruta/a/tu/directorio/' . $image . '" alt="Slide"></div>';
      }
    ?>
  </div>
</div>

<script>
  // Script para controlar el slider con jQuery
  $(document).ready(function() {
    var slideCount = $('#slider img').length;
    var currentIndex = 0;

    function showSlide(index) {
      if (index < 0) {
        currentIndex = slideCount - 1;
      } else if (index >= slideCount) {
        currentIndex = 0;
      } else {
        currentIndex = index;
      }

      var translateValue = -currentIndex * 100 + '%';
      $('#slider').css('transform', 'translateX(' + translateValue + ')');
    }

    // Controles de flechas
    $('#prev-btn').click(function() {
      showSlide(currentIndex - 1);
    });

    $('#next-btn').click(function() {
      showSlide(currentIndex + 1);
    });
  });
</script>

</body>
</html>
