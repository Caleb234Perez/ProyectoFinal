<?php
session_start();
if($_SESSION['user']!="root"){
    //echo "no root";
    header("location:home.php");
}else{
    session_abort();
    //echo "root";

?>
<?php

    include("header.php");
    include("conexion.php");

    if ($conexion->connect_errno){
        die('Error en la conexion');
    }

    $idbuscar = $_POST['id'];

    $sqli = "SELECT * FROM instrumento WHERE ID=$idbuscar;";

    $resultado = $conexion -> query($sqli);


    $aaa = $resultado -> fetch_assoc();
    echo $aaa['Nombre'];

    ?><br>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos/est.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tienda/Modificar</title>
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
            <div class="col-2"></div>
            <div class="col-8">
                <form action="modact.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre: </label>
                        <input type="text" class="form-control" id="" name="nombre" aria-describedby="emailHelp" placeholder="<?php echo $aaa['Nombre']?>">
                    </div>
                    <div class="mb-3">
                        <label for="cat" class="form-label">Categoria: </label>
                        <!-- <input type="text" class="form-control" id="cat" name="categoria" aria-describedby="emailHelp" placeholder="<?php echo $aaa['Categoria']?>"> -->
                        <select class="form-select" name="categoria" id="cat" aria-label="Default select example" required>
                        <option value="aire">Aire</option>
                        <option value="cuerda">Cuerda</option>
                        <option value="percusion">Percusion</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="form-label">Descripcion: </label>
                        <textarea class="form-control" id="desc" name="descripcion" rows="5"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exist" class="form-label">Existencia: </label>
                        <input type="number" class="form-control" id="" name="existencia" aria-describedby="emailHelp" placeholder="<?php echo $aaa['Existencia']?>">
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label">Precio: $</label>
                        <input type="number" class="form-control" id="price" name="precio" aria-describedby="emailHelp" placeholder="<?php echo $aaa['Precio']?>">
                    </div>
                    <div class="mb-3">
                        <label for="oferta" class="form-label">Porcentaje de oferta (en caso de no tener oferta dejar en 0): </label>
                        <input type="number" class="form-control" id="oferta" name="oferta" aria-describedby="emailHelp" placeholder="<?php echo $aaa['oferta']?>">
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Seleccionar archivo: </label>
                        <input class="form-control" type="file" id="img" name="imagen">
                        <img src="<?php echo $aaa['Archivo'] ?>" alt="<?php echo $aaa['Nombre']?>" class="img-fluid"><br>
                    </div>
                    <input type="hidden" name="imagenorigin" value="<?php echo $aaa['Archivo'] ?>">
                    <input type="hidden" name="id" value="<?php echo $aaa['Id'] ?>">
                    <button type="submit" class="btn btn-warning" name="Subir">Subir</button>
                    <button type="submit" class="btn btn-danger" name="Baja">Baja</button>
                </form>
            </div>
            <div class="col-2"></div>
        </div>
    </div>

    <?php
        include("Footer.php");

    }
    ?>
</body>
</html>