<?php
session_start();
if($_SESSION['user']!="root"){
    //echo "no root";
    header("location:home.php");
}else{
    session_abort();
    //echo "root";
include("header.php");
?>

<?php 

?>

<!DOCTYPE html>
<html lang="en"><head>
    <link rel="stylesheet" href="estilos/est.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Tienda/Altas</title>
</head>
<body>

    <div class="container">
        <div class="row"><br></div>
        <div class="row"><br></div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
            <form action="añadir.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre: </label>
                    <input type="text" class="form-control" id="name" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" required>
                </div>
                <div class="mb-3">
                    <label for="cat" class="form-label">Categoria: </label>
                    <select class="form-select" name="categoria" id="cat" aria-label="Default select example" required>
                        <option value="aire">Aire</option>
                        <option value="cuerda">Cuerda</option>
                        <option value="percusion">Percusion</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="desc" class="form-label">Descripcion: </label>
                    <textarea class="form-control" id="desc" name="descripcion" rows="5" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="exist" class="form-label">Existencia: </label>
                    <input type="number" class="form-control" id="" name="existencia" aria-describedby="emailHelp" placeholder="100" required>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Precio: $</label>
                    <input type="number" class="form-control" id="price" name="precio" aria-describedby="emailHelp" placeholder="999" min="0" required>
                </div>
                <div class="mb-3">
                    <label for="offer" class="form-label">Porcentaje de oferta (en caso de no tener oferta dejar en 0): </label>
                    <input type="number" class="form-control" id="offer" name="oferta" aria-describedby="emailHelp" placeholder="100" min="0" max="100" required>
                </div>
                <div class="mb-3">
                    <label for="img" class="form-label">Imagen del producto: </label>
                    <input class="form-control" type="file" id="img" name="img" required>
                </div>
                <button type="submit" class="btn btn-success" name="Subir">Subir</button>
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