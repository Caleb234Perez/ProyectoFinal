<?php 
include_once 'header.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos/est.css">
    <title>Preguntas Frecuentes</title>
</head>
<body >
<div class="accordion" id="accordionExample">
  <div class="accordion-item back">
    <h2 class="accordion-header preg" id="headingOne">
      <button class="accordion-button preg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        ¿Hacen envíos internacionales?
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Sí</strong>, con una tarifa extra.
    </div>
  </div>
  <div class="accordion-item back">
    <h2 class="accordion-header preg" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        ¿Cuáles son sus horarios de atención?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Todo el día</strong>, sin embargo, los horarios de antención más rapidos son de 8:00 a.m. a 8:00 p.m.
      </div>
    </div>
  </div>
  <div class="accordion-item back">
    <h2 class="accordion-header preg" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ¿Cómo obtengo cupones de descuento?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Tenemos <strong>tres</strong> cupones válidos para cada usuario. El primero se consigue suscribiéndose a nuestra página. Los otros dos están ocultos por nuestro sitio y deberá descubrirlos. Cada cupón es válido <strong>una sola vez</strong> y se aplica sobre el total de su compra.
      </div>
    </div>
  </div>
  <div class="accordion-item back">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        ¿Cómo funciona el sistema de ofertas a los productos?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        El <strong>administrador</strong> es el encargado de asignar las ofertas a los productos, por lo que es su decisión cuándo estará un producto en oferta y de cuánto será el descuento.
      </div>
    </div>
  </div>
  <div class="accordion-item back">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        ¿Cuánto tardan en hacer un envío? 
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Depende</strong> En zonas al centro de la república de <strong>uno a dos</strong> días. En cambio, para envíos en los estados exteriores de <strong>3 a 5</strong> días, y en envíos internacionales de <strong>dos a tres</strong> semanas. Dentro del estado de Aguascalientes es posible que la entrega se realice el mismo día, según la carga de trabajo.
      </div>
    </div>
  </div>
  <div class="accordion-item back">
    <h2 class="accordion-header" id="headingSix">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        ¿Puedo comprar sin estar registrado?
      </button>
    </h2>
    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>No</strong> Para mejorar la experiencia y seguridad de los usuarios no contamos con un apartado de "comprar como invitado".
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
  include("Footer.php");
?>