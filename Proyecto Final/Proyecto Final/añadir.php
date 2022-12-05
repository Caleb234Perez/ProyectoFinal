<?php

if(isset($_POST['Subir'])){
    $archivo = $_FILES['img']['name'];
    $tipo = $_FILES['img']['type'];
    $tamaño = $_FILES['img']['size'];
    $temp = $_FILES['img']['tmp_name'];
    
    

    if(strpos($tipo, "jpg") || strpos($tipo, "jpeg") || strpos($tipo, "png")){
        
        //echo "Se carga la imagen";
        include("conexion.php");
    
        if ($conexion->connect_errno){
            die('Error en la conexion');
        }
        $name = $_POST['nombre'];
        $cat = $_POST['categoria'];
        $desc = $_POST['descripcion'];
        $ex =  $_POST['existencia'];
        $precio = $_POST['precio'];
        $oferta = $_POST['oferta'];
        $arch = "img/" . $archivo;

        $sqli = "INSERT INTO `instrumento`(`Nombre`, `Categoria`, `Descripcion`, `Existencia`, `Precio`, `Archivo`, `oferta`) VALUES ('$name','$cat','$desc','$ex','$precio','$arch', '$oferta')";
        $conexion -> query($sqli);

        $sqli = "SELECT * FROM instrumento WHERE Nombre='$name' AND Categoria='$cat' AND Descripcion='$desc' AND Existencia='$ex'";
        $resultado = $conexion -> query($sqli);

        $fila = $resultado ->fetch_assoc();

        if(strpos($tipo, "jpg")){
            $archivo = $fila['Id'] . ".jpg";
        }else if(strpos($tipo, "jpeg")){
            $archivo = $fila['Id'] . ".jpeg";
        }else if(strpos($tipo, "png")){
            $archivo = $fila['Id'] . ".png";
        }

        $arch = "img/" . $archivo;

        $obj = dirname(__FILE__) . "/img/" . $archivo;
        if(move_uploaded_file($temp, $obj)){
            $sqli = "UPDATE instrumento SET Archivo='$arch' WHERE Nombre='$name' AND Categoria='$cat' AND Descripcion='$desc' AND Existencia='$ex'";
            $conexion -> query($sqli);
                
        }else{
            header("Location: inventario.php");
        }
    }else{
        header("Location: inventario.php");
    }
    header("Location: inventario.php");
}
header("Location: index.php");
?>
