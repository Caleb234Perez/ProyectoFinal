<?php
require "conexion.php";

$sqli = "SELECT * FROM instrumento";
$resultado = $conexion -> query($sqli);

if(!empty($_POST['producto'])){
$buscar = $_POST['producto'];

if($buscar == "Todos"){
    while($fila = $resultado ->fetch_assoc()){
        if($fila['Existencia'] != 0){
            echo "<div class='col'>";
                echo "<div class='card h-100'>";
                echo "<img src=" . $fila['Archivo'] . " class='card-img-top ima' alt='...' height='200px'>";
                    echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $fila['Nombre'] . "</h5>";
                        echo "<p class='card-text'>";
                            if($fila['oferta'] != '0'){
                                echo "<h5>Precio de: $<del>" . $fila['Precio'] . "</del></h5>";
                                echo "<h5>a: $<span>" . ($fila['Precio'] - $fila['oferta'] * $fila['Precio'] / 100)  . "</span></h5>";
                            }
                            else{
                                echo "<h5>Precio: $<span>" . $fila['Precio'] . "</span></h5>";
                            }
                    echo "</p>";
                    echo "</div>";
                    echo "<div class='card-footer'>";
                        echo "<small class='text-muted'>" . $fila['Descripcion'] . "</small>";
                        echo "<form action='producto.php' method='post'>";
                            echo "<input type='hidden' name='id' value=" . $fila['Id'] . ">";
                            echo "<input type='submit' value='Ver' class='btn btn-danger'>";
                        echo "</form>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    }
}else{
    $buscar = strtolower($buscar);
    while($fila = $resultado ->fetch_assoc()){
        if($fila['Existencia'] != 0 && $fila['Categoria'] == $buscar){
            echo "<div class='col'>";
                echo "<div class='card h-100'>";
                echo "<img src=" . $fila['Archivo'] . " class='card-img-top ima' alt='...' height='200px'>";
                    echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $fila['Nombre'] . "</h5>";
                        echo "<p class='card-text'>";
                            if($fila['oferta'] != '0'){
                                echo "<h5>Precio de: $<del>" . $fila['Precio'] . "</del></h5>";
                                echo "<h5>a: $<span>" . ($fila['Precio'] - $fila['oferta'] * $fila['Precio'] / 100)  . "</span></h5>";
                            }
                            else{
                                echo "<h5>Precio: $<span>" . $fila['Precio'] . "</span></h5>";
                            }
                    echo "</p>";
                    echo "</div>";
                    echo "<div class='card-footer'>";
                        echo "<small class='text-muted'>" . $fila['Descripcion'] . "</small>";
                        echo "<form action='producto.php' method='post'>";
                            echo "<input type='hidden' name='id' value=" . $fila['Id'] . ">";
                            echo "<input type='submit' value='Ver' class='btn btn-danger'>";
                        echo "</form>";
                    echo "</div>";
                echo "</div>";
            echo "</div>";
        }
    }
}
}else{
    echo "No deberias estar aqui";
}
?>