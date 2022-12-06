<?php
session_start();
if(empty($_SESSION['user'])){//para alejar a lo curiosos
    header("location:home.php");
    exit;
}


include("conexion.php");
if (isset($_POST['cup'])) {
    # code...
    $cupon=$_POST['cup'];//variable de cupon
    $id=$_SESSION['id'];//id del usuario logueado
    $sql="select c1,c2,c3 from usuario where id=$id";
    $sql2='';
    $res=$conexion->query($sql);
    $res2;
    $cupones=$res->fetch_assoc();
    $deuda=$_SESSION['deuda'];
    if($cupon!='Eva-01' && $cupon!='ReZ3r0' && $cupon!=$cupones['c1']){
        echo "cupon no valido";
    }
    
    
    else{
        
        if ($cupon=='Eva-01' && $cupones['c2']!=1) {
            $sql2="update usuario set c2=1 where Id=$id";

            $deuda*=0.85;
            echo "cupon valido ahora tienes un 15% de descuento";
            $res2=$conexion->query($sql2);
        }
        elseif ($cupon=='ReZ3r0' && $cupones['c3']!=1) {
            $sql2="update usuario set c3=1 where Id=$id";

            $deuda*=0.75;
            echo "ahora tienes un 25% de descuento";
            $res2=$conexion->query($sql2);
        }
        elseif ($cupon==$cupones['c1'] && $cupones['c1']!='1') {
            $sql2="update usuario set c1='1' where Id=$id";

            $deuda*=0.90;
            echo "ahora tienes un 10% de descuento";
            $res2=$conexion->query($sql2);
        }
        else{
            echo "cupón ya utilizado";
        }
        $_SESSION['deuda']=$deuda;
        //echo $_SESSION['deuda'];
    }

}
?>