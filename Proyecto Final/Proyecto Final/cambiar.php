<?php
    $aux=0;

    if (isset($_POST['cuenta'])) {
        //conexion a la base de datos
        include("conexion.php");

        $sql;$sql2;$sql3;
        $res;$res2;
        $usuario=$_POST['cuenta'];
        $pass=$_POST['newpass'];
        $contrasena=$_POST['contrasena'];
        $contrasena2=$_POST['contrasena2'];
        

        if($conexion->connect_errno){
            //no se conecto
            die('Error de conexión');
        }
        else {
            //genero la coneccion
            $sql="SELECT * FROM usuario WHERE usuario='$usuario'";
            $res=$conexion->query($sql);
            if ($res->num_rows>0) {
                //CUENTA EXISTE
                $bloqueo=$res->fetch_assoc();
                //if($bloqueo['acceso']>3){
                    //cuenta bloqueada
                    
                    if(password_verify($pass,$bloqueo['contrasena'])){
                        echo "firus";
                        if($contrasena != $contrasena2){
                            echo '<script> alert("¡Las contraseñas no coinciden!") </script>';
                            //$aux=3; //boton contraseñas no coinciden
                        }else{
                            $idCeunta=$bloqueo['Id'];
                            $encrippass=password_hash($contrasena, PASSWORD_DEFAULT,['cost'=>5]);
                            $sql2="UPDATE usuario SET contrasena='$encrippass' WHERE Id=$idCeunta";
                            $conexion->query($sql2);
                            header("location:home.php");
                            exit;
                            
                        }
                    }
/*
                    if($aux==1){
                        if($contrasena != $contrasena2){
                            echo '<script> alert("¡Las contraseñas no coinciden!") </script>';
                            //$aux=3; //boton contraseñas no coinciden
                        }else{
                            $idCeunta=$bloqueo['Id'];
                            $sql2="UPDATE usuario SET contrasena='$contrasena' WHERE Id=$idCeunta";
                            $conexion->query($sql2);
                        }
                    } else if($aux==0 && ($pass == $bloqueo['contrasena'])){
                        $aux=1;
                        $aux2=1;
                    }*/
                //}
                //else{
                    //cuenta no bloqueada

                //}
            }
            else{
                //cuenta inexistente
            }
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%);">
    
    <div class="container">
        <div class="row">
            <center><h1>Cambiar Contraseña</h1></center>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                    <div class="mb-3">
                        <input type="text" name="cuenta" class="form-control" id="exampleInputPassword1" placeholder="Nombre de ususario">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="newpass" class="form-control" id="exampleInputPassword1" placeholder="Contraseña antigua">
                    </div>
                    Establezca de nuevo su contraseña:
                    <div class="mb-3">
                        <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" placeholder="Nueva Contraseña">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="contrasena2" class="form-control" id="exampleInputPassword1" placeholder="Ingrese de nuevo su Nueva Contraseña">
                    </div>
                    <button type="submit" name="submit" class="btn btn-danger">Cambiar</button> 
                </form>
            </div>
            <div class="col-3">
                <a href="home.php"><button class="btn btn-warning">Regresar</button></a>
            </div>
        </div>
    </div>
</body>
</html>