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
    <style>
      footer{
        display:flex;
        position:fixed;
      }
    </style>
</head>
<body >
<div class="accordion" id="accordionExample">
  <div class="accordion-item back">
    <h2 class="accordion-header preg" id="headingOne">
      <button class="accordion-button preg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        ¿Hacen envios internacionales?
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
        ¿Cuales son sus horarios de atencion?
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Todo el día</strong>sim embargo los horarios de antencion mas rapidos son de 8:00 a.m. a 8:00 p.m.
      </div>
    </div>
  </div>
  <div class="accordion-item back">
    <h2 class="accordion-header preg" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        ¿Quién programo el footer?
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        Sabemos que es una 
        <strong>C Obra Maestra</strong>
        y es por ello que nos alegra que tenga buenos gustos como para apreciar la belleza del mismo. No obstante, el artista detras de tal pintura prefiere mantenerse en el anonimato.
      </div>
    </div>
  </div>
  <div class="accordion-item back">
    <h2 class="accordion-header" id="headingfour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        ¿Cuentan con servicio de devoluciones?
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Sí.</strong> 
          Siempre cuando cuente con su ticket de compra.
      </div>
    </div>
  </div>
  <div class="accordion-item back">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        ¿Cuanto tardan en hacer un envio? 
      </button>
    </h2>
    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Depende</strong> 
        En zonas al centro de la republica de 1 a dos dias, en cambio para envios en los estados exteriores de 3 a 5 dias, y en envios internacionales de dos a tres semanas. Tambien hay zonas especiales en las cuales los envios son el mismo día, como la casa de Ethienne.

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
        <strong>No</strong> 
        Para mejorar la experiencia y seguridad de los usuarios no contamos con un apartado de "comprar como invitado", esto debido a que a niguno de los 4 pendejos que estan haciendo esta pagina no la va aprogramar y no sabemos si caleb lo valla a hacer.
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php
  include("Footer.php");
?>