<?php
    session_start();
    if(empty($_SESSION['user']) || $_SESSION['deusa']==0){//para alejar a lo curiosos
        header("location:home.php");
        exit;
    }
    
    
    include("conexion.php");
    
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <table class="table">
                <?php
                $total=0;
                    $i=0;
                    $cnt=$_SESSION['cantidad'];
                    $mensaje='<table class="table">';

                if($_POST['envio']=='mx'){

                    $iva=$_SESSION['deuda']*0.16;
                    $envio=500;
                }
                else{
                    $iva=$_SESSION['deuda']*0.9;
                    $envio=800;
                }

                    while ($i<$cnt) {
                        $id=$_SESSION['carritoprod'][$i];
                        $sql="select Nombre, Descripcion, Precio from instrumento where Id='$id'";
                        $resp2=$conexion->query($sql);
                        $datos=$resp2->fetch_assoc();
                        $mensaje.='<tr><td>'.$datos['Nombre'].'</td><td>'.$datos['Descripcion'].'</td><td>'.$datos['Precio'].'</tr>';
                        echo '<tr>';


                            echo '<td>';
                                echo $datos['Nombre'];
                            echo '</td>';

                            

                            echo '<td>';
                                echo $datos['Descripcion'];
                            echo '</td>';



                            echo '<td>';
                                echo $datos['Precio'];
                            echo '</td>';



                        echo '</tr>';
                        $total+=$datos['Precio'];
                        $i++;
                    }
                    
                ?>
                <tr>
                    <td>sub total</td>
                    <td></td>
                    <td><?php 
                       
                        echo $total;?>
                    
                
                    </td>
                </tr>
                <tr>
                    <td>oferta y cupones</td>
                    <td></td>
                    <td><?php echo $total-$_SESSION['deuda'];?></td>
                </tr>
                <tr>
                    <td>envio</td>
                    <td></td>
                    <td><?php echo $envio;?></td>
                </tr>
                <tr>
                    <td>Impuestos</td>
                    <td></td>
                    <td><?php echo $iva;?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td></td>
                    <td><?php 
                    $neto=$_SESSION['deuda']+$iva+$envio;
                    echo $_SESSION['deuda']+$iva+$envio;
                    $mensaje.='<td>sub total</td><td></td><td>'.$total.'</td></tr><tr><td>oferta y cupones</td><td></td><td>'.$total-$_SESSION['deuda'].'</td></tr>
                    <tr><td>envio</td><td></td><td>'.$envio.'</td></tr><tr><td>Impuestos</td><td></td>
                    <td>'.$iva.'</td></tr><tr><td>Total</td><td></td><td>'.$_SESSION['deuda']+$iva+$envio.'</td></tr></table>';
                    
                    
                    
                    
                    
                    ?></td>

                </tr>
                </table>
            </div>
            <div class="col-3"></div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-4">
                    <a href="home.php">
                        <button class="btn btn-dark" id="" type="submit">Listo</button>          
                    </a>
                </div>
                
            </div>
    </div>
    </div>
</body>
</html>
<?php
    date_default_timezone_set('America/Mexico_City');
    $Fecha =date('Y-m-d');
    //echo $Fecha;
    //mail($_SESSION['mail'],'ticket de compra',$mensaje);
    $sql2="INSERT INTO ventas (fechaVenta,montoVenta) VALUES ('$Fecha',$neto)";
    $conexion->query($sql2);


    $i=0;

    while($i<$cnt){
        $id=$_SESSION['carritoprod'][$i];

        $sql="update instrumento set Existencia=Existencia-1 where Id='$id'";
        $conexion->query($sql);
        $i++;
    }
    $_SESSION['deuda']=0;
    $_SESSION['cantidad']=0;
    unset($_SESSION['carritoprod']);

   // header('location:home.php');

?>