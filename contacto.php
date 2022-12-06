<?php 
  include_once 'header.php';

  if(isset($_POST['submit'])){
    $correo=$_POST['mail'];
    $nombre=$_POST['nombre'];
    $mensaje=$_POST['mensaje'];

    $texto1 = "Hola $nombre. Gracias por ponerte en contacto con nosotros. \n Esta es una copia de tu mensaje que enviaste en nuestra página. \n A la brevedad nos pondremos en contacto con usted. \n\n $mensaje.";
    $texto2 = "Cliente: $nombre. \n Correo: $correo \n Mensaje: $mensaje.";
    $correo2="alsondelcorazon1170@gmail.com";

    //correo al cliente
    mail($correo,"Contacto",$texto1);
    //correo a nosotros
    mail($correo2,"Contacto",$texto2);
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <script src="https://kit.fontawesome.com/c11f07c5a0.js" crossorigin="anonymous"></script>
    <style>
      a:link{
        color:black;
        text-decoration:none;
      }
      a:active{
          color:black;
          text-decoration:none;
      }
      #icono{
        color:black;
      }
    </style>
</head>
<body>

  <div class="container">
    <div class="row">
      <br>
    </div>
    <div class="row">
      <br>
    </div>
    <div class="row">
      <div class="col-6">
        <table>
          <tr>
            <td>
              <i id="icono" class="fa-solid fa-location-dot"></i> Arellano 203, Ojocaliente I, Aguascalientes, Ags., México
            </td>
          </tr>
          <tr>
            <td><i id="icono" class="fa-solid fa-phone"></i> +52 449 940 0769</td>
          </tr>
          <tr>
            <td><i id="icono" class="fa-solid fa-envelope"></i> alsondelcorazon1170@gmail.com</td>
          </tr>
          <tr>
            <td><i id="icono" class="fa-solid fa-thumbs-up"></i> <a id="icono" href="https://wa.me/524499400769" target="_blank"><i id="icono" class="fa-brands fa-whatsapp"></i></a> <a id="icono" href="https://www.instagram.com/al.son.del.corazon/" target="_blank"><i class="fa-brands fa-instagram"></i> </a><a id="icono" href="cupon2.php" target="_blank"><i id="icono" class="fa-solid fa-heart"></i></a></td>
          </tr>
        </table>
      </div>
      <div class="col-6">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
          <div class="mb-3">
            <input type="text" name="nombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre y Apellido">
          </div>
          <div class="mb-3">
            <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
          </div>
          <div class="mb-3">
            <textarea name="mensaje" id="" cols="71" rows="5" placeholder="Escríbenos tu mensaje..."></textarea>
          </div>
          <input type="submit" class="btn btn-danger" value="Enviar" name="submit">
        </form>
      </div>
    </div>
    <div class="row">
      <br>
    </div>
    <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3702.2824294572283!2d-102.25641058557811!3d21.88519746336588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429f1e2ad146379%3A0x75a2b18d070fd24f!2sArellano%20203%2C%20Ojocaliente%20I%2C%2020190%20Aguascalientes%2C%20Ags.!5e0!3m2!1ses!2smx!4v1669665215184!5m2!1ses!2smx" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
  </div>

  <!--<br><br><br><br><br><br><br><br><br>-->
  <div>
  <?php 
    include_once("Footer.php");
  ?>
  </div>
</body>
</html>
