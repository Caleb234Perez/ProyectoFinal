<?php
    session_start();
    if(empty($_SESSION['user'])){//para alejar a lo curiosos
        header("location:home.php");
        exit;
    }
    
    
    include("conexion.php");
    $id=$_SESSION['carritoprod'];
    $cnt=$_SESSION['cantidad'];
    $i=0;

    while($i<$cnt){
        $id=$_SESSION['carritoprod'][$i];

        $sql="update instrumento set Existencia=Existencia-1 where Id='$id'";
        $conexion->query($sql);
        $i++;
    }
    $_SESSION['cantidad']=0;
    unset($_SESSION['carritoprod']);

    header('location:home.php');

?>