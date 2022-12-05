<?php
session_start();
if(empty($_SESSION['user'])){
    header("Location: index.php");
}
if($_SESSION['cantidad'] == '0'){
    header("Location: index.php");
}
session_abort();
    include_once "header.php";
    
    require "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos/est.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Pagar</title>
</head>
<body>
<center id="carrito">
<?php
$valor=0;
$total = 0;
while($valor< $_SESSION['cantidad']){
    if($_SESSION['carritoprod'][$valor] != '0'){
        $idbuscar = $_SESSION['carritoprod'][$valor];
        $sqli = "SELECT * FROM instrumento WHERE ID=$idbuscar;";
        $resultado = $conexion -> query($sqli);
        $aaa = $resultado -> fetch_assoc();
        ?>
        <div class="card" style="width: 60%;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo $aaa['Archivo'] ?>" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $aaa['Nombre'] ?></h5>
                        <p class="card-text"><?php echo $aaa['Descripcion'] ?></p>
                        <p class="card-text"><small class="text-muted"><?php
                            if($aaa['oferta'] != '0'){?>
                                <h5>Precio de: $<del><?php echo $aaa['Precio']?></del></h5>
                                <h5>a: $<span><?php echo $aaa['Precio'] - $aaa['oferta'] * $aaa['Precio'] / 100 ?></span></h5>
                                <?php
                            }
                            else{?>
                                <h5>Precio: $<span><?php echo $aaa['Precio']?></span></h5>
                            <?php
                            }
                            ?></small></p>
                        <button type="button" class="btn btn-danger" onclick="quitar(<?php echo $valor ?>)">Quitar</button>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
        if($aaa['oferta'] != '0'){
            $total = $total + ($aaa['Precio'] - $aaa['oferta'] * $aaa['Precio'] / 100);
        } else{
            $total = $total + $aaa['Precio'];
        }
    }
    $valor++;
}
$_SESSION['deuda']=$total;
echo "<p class='card-text'>Total a pagar: $" . $total . "</p>";
if($_SESSION['deuda'] > 0){
    echo '<a href="DatPago.php"><button type="button" class="btn btn-dark">Proceder al pago</button></a>';
}

?>
</center>

<script>
    function quitar(id){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("carrito").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "quitarcarrito.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("producto=" + id);
    }
</script>
</body>
</html>
<?php
    include_once "Footer.php";
?>

