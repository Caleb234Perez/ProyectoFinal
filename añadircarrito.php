<?php
session_start();
include("conexion.php");
?>
<?php
if(!empty($_POST['producto'])){
$producto=$_POST['producto'];
$sql="SELECT Existencia FROM instrumento WHERE Id='$producto'";


$res=$conexion->query($sql);
$existencia=$res->fetch_assoc();



$i=0;
$cont=0;
while($i< $_SESSION['cantidad']){
    if($_SESSION['carritoprod'][$i]==$producto){
        $cont++;
    }
    $i++;
}
if ($cont>=$existencia['Existencia']) {
    
    
}else{
        $newProducto=$_POST['producto'];

        $_SESSION['carritoprod'][]=$newProducto;
        $_SESSION['cantidad']++;
        $cantidad = $_SESSION['cantidad'];

        $valor=0;

        while($valor< $_SESSION['cantidad']){
            echo $_SESSION['carritoprod'][$valor] . "\n";
            $valor++;
        }
}
}else{
    echo "No deberias estar aqui";
}
?>
