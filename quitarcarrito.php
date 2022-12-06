<?php
require "conexion.php";
session_start();
$idencarr = $_POST['producto'];
if(isset($_POST['producto'])){
$_SESSION['carritoprod'][$idencarr]='0';

$valor=0;
$total=0;
while($valor < $_SESSION['cantidad']){
    
    if($_SESSION['carritoprod'][$valor] != 0){
        $idbuscar = $_SESSION['carritoprod'][$valor];
        $sqli = "SELECT * FROM instrumento WHERE ID=$idbuscar;";
        $resultado = $conexion -> query($sqli);
        $aaa = $resultado -> fetch_assoc();
        
        echo "<div class='card' style='width: 60%;'>";
            echo "<div class='row g-0'>";
                echo "<div class='col-md-4'>";
                    echo "<img src=" . $aaa['Archivo'] . " class='img-fluid rounded-start' alt='...'>";
                echo "</div>";
                echo "<div class='col-md-8'>";
                    echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $aaa['Nombre'] . "</h5>";
                        echo "<p class='card-text'>" . $aaa['Descripcion'] . "</p>";
                        echo "<p class='card-text'><small class='text-muted'>";
                            if($aaa['oferta'] != '0'){
                                echo "<h5>Precio de: $<del>" . $aaa['Precio'] . "</del></h5>";
                                echo "<h5>a: $<span>" . $aaa['Precio'] - $aaa['oferta'] * $aaa['Precio'] / 100 . "</span></h5>";
                                
                            }
                            else{
                                echo "<h5>Precio: $<span>" . $aaa['Precio'] . "</span></h5>";
                            
                            }
                            echo "</small></p>";
                        echo "<button type='button' class='btn btn-danger' onclick='quitar(" . $valor . ")'>Quitar</button>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
        if($aaa['oferta'] != '0'){
            $total = $total + ($aaa['Precio'] - $aaa['oferta'] * $aaa['Precio'] / 100);
        } else{
            $total = $total + $aaa['Precio'];
        }
    }
    $valor++;
}
$_SESSION['deuda']=$total;
    echo "<p class='card-text'> Total a pagar: $" . $total . "</p>";
    if($_SESSION['deuda'] > 0){
        echo '<a href="DatPago.php"><button type="button" class="btn btn-dark">Proceder al pago</button></a>';
    }
}
?>