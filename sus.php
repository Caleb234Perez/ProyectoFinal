<?php
    function cupon(){
        $codigo = "";
        $car="AKJBVsa2hv5ahf6a8fH86978G15DJH9dnak675AFJHwv";
        for($i=0;$i<7;$i++){
            $codigo.=$car[rand(0,44)];
        }
        return $codigo;
    }

    if(!empty($_POST['suscrip'])){
        include("conexion.php");
        if ($conexion->connect_errno){
            die('Error en la conexion');
            //echo "error conexion";
            header("location:home.php");
        }else{
            $mail=$_POST['sus'];
            $sql="SELECT * FROM usuario";
            $resultado=$conexion->query($sql);
            if($resultado->num_rows){
                while($fila = $resultado->fetch_assoc()){
                    if(($mail == $fila['correo'])){
                        if($fila['c1']==0){
                            $cupon=cupon();
                            $id = $fila['Id'];
                            $sql = "UPDATE usuario SET c1='$cupon' WHERE id=$id";
                            $conexion->query($sql);
                            $texto = "Gracias por suscribirse. Su cupon unico de descuento es: $cupon. Otorga un 10% de descuento en la compra de su eleccion.";
                            mail($mail,"Cupon de Suscripcion",$texto);
                            header("location:home.php");
                            //echo "actualizo";
                            break;
                        }
                    }
                }
                //echo "no actualizo";
                header("location:home.php");
            }
        }
    }else{
        //echo "nada";
        header("location:home.php");
    }
?>
