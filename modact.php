<?php
include("conexion.php");


if ($conexion->connect_errno){
     die('Error en la conexion');
}

if(isset($_POST['Subir'])){
    
    $id = $_POST['id'];
    if(!empty($_POST['nombre'])){
        $nom = $_POST['nombre'];
        $sqli = "UPDATE instrumento SET `Nombre`='$nom' WHERE Id=$id";
        $conexion -> query($sqli);
    }

    if(!empty($_POST['categoria'])){
        $nom = $_POST['categoria'];
        $sqli = "UPDATE instrumento SET `Categoria`='$nom' WHERE Id=$id";
        $conexion -> query($sqli);
    }

    if(!empty($_POST['descripcion'])){
        $nom = $_POST['descripcion'];
        $sqli = "UPDATE instrumento SET `Descripcion`='$nom' WHERE Id=$id";
        $conexion -> query($sqli);
    }

    if(isset($_POST['existencia']) && $_POST['existencia']!=NULL){
        $nom = $_POST['existencia'];
        $sqli = "UPDATE instrumento SET `Existencia`='$nom' WHERE Id=$id";
        $conexion -> query($sqli);
    }

    if(isset($_POST['precio']) && $_POST['precio']!=NULL){
        $nom = $_POST['precio'];
        $sqli = "UPDATE instrumento SET `Precio`='$nom' WHERE Id=$id";
        $conexion -> query($sqli);
    }

    if($_FILES['imagen']['size'] != 0){
        $nom = $_POST['imagenorigin'];
        unlink($nom);

        
        $archivo = $_FILES['imagen']['name'];
        $tipo = $_FILES['imagen']['type'];
        $tamaño = $_FILES['imagen']['size'];
        $temp = $_FILES['imagen']['tmp_name'];

        $sqli = "SELECT * FROM instrumento WHERE ID=$id";
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
            $arch = "img/" . $archivo;

            $sqli = "UPDATE instrumento SET `Archivo`='$arch' WHERE Id=$id";
            $conexion -> query($sqli);
        }
    }

    if(isset($_POST['oferta']) && $_POST['oferta']!=NULL){
        $nom = $_POST['oferta'];
        $sqli = "UPDATE instrumento SET `Oferta`='$nom' WHERE Id=$id";
        $conexion -> query($sqli);
    }
}

if(isset($_POST['Baja'])){
    $id = $_POST['id'];
    $sqli = "DELETE FROM instrumento WHERE Id=$id";
    $conexion -> query($sqli);
}

header("Location: inventario.php");
?>