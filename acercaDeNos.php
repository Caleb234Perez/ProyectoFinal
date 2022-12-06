<?php
  include_once ("header.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/c11f07c5a0.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/est.css">
    <title>Acerca de Nosotros</title>
</head>
<body>
  <div class="accordion" id="accordionExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingOne">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <h2>MISIÓN<h2>
        </button>
      </h2>
      <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <h5>La misión de <strong>Al Son del Corazón</strong> consiste en impulsar a las pequeñas bandas de jóvenes músicos, además de promover el arte y la cultura para el enriquecimiento de la vida de las personas al facilitar la venta de instrumentos, tanto en tiendas físicas como la venta en línea, en la ciudad de Aguascalientes y Jesús María.</h5>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <h2>VISIÓN</h2>
        </button>
      </h2>
      <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <h5>La visión de <strong>Al Son del Corazón</strong> es ser un referente a nivel estatal por su contribución a la música y las pequeñas bandas, promover su participación en pequeños y grandes eventos. Además, ser una de las tiendas minoristas de venta de instrumentos más reconocida en el estado de Aguascalientes.</h5>
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <h2>OBJETIVO</h2>
        </button>
      </h2>
      <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
        <div class="accordion-body">
          <h5>Ofrecer el mejor servicio, precio y experiencia a todos aquellos apasionados por la música que buscan expandir su colección. Apoyar al talento hidrocálido patrocinando e impulsando a todas las bandas, con el apoyo al proyecto iniciado por <strong>Los Trilobits</strong>, de la cual somos orgullosos patrocinadores oficiales.</h5>
        </div>
      </div>
    </div>
  </div>
  <div class="pie">
    <?php
      include("Footer.php");
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

