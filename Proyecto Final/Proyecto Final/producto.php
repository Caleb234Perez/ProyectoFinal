<?php
session_start();
if(empty($_SESSION['user'])){
    header("Location: index.php");
}
session_abort();
?>

<?php 
include_once 'header.php';
?>

<?php
    require 'conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos/est.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tienda</title>
</head>

<?php

$idbuscar = $_POST['id'];

$sqli = "SELECT * FROM instrumento WHERE ID=$idbuscar;";
$resultado = $conexion -> query($sqli);
$aaa = $resultado -> fetch_assoc();
?>
<body>
    <center>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $aaa['Archivo'] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $aaa['Nombre'] ?></h5>
                <p class="card-text"><?php echo $aaa['Descripcion'] ?></p>
                <p class="card-text">
                    <?php
                        if($aaa['oferta'] != '0'){?>
                            <h5>Precio de: $<del><?php echo $aaa['Precio']?></del></h5>
                            <h5>a: $<span><?php echo $aaa['Precio'] - $aaa['oferta'] * $aaa['Precio'] / 100 ?></span></h5>
                
                        <?php
                         }
                        else{?>
                            <h5>Precio: $<span><?php echo $aaa['Precio']?></span></h5>
                        <?php
                        }
                    ?>
                    <h5>Disponibles: <?php echo $aaa['Existencia']?></h5>
                    </p>
                    <input type="hidden" id="idprod" name="id" value="<?php echo $aaa['Id'] ?>">
                <button type="button" onclick="añadir()" class="btn btn-danger">Añadir a carrito</button>
            </div>
        </div>
    </center>

    <script>
    function añadir(){
        idProducto = document.getElementById("idprod").value;

        ticket = idProducto;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.responseText);
            }
        };
        xhttp.open("POST", "añadircarrito.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("producto=" + idProducto);
    }
    </script>
</body>

<?php
    include_once("Footer.php");
?>