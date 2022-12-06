<?php

    function newpass(){
        $key="";
        $loki="1234567890asdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";


        for ($i=0; $i < 8; $i++) { 
            $key.=$loki[rand(0,51)];
        }
        return $key;
    }
    $aux=0;
    if (isset($_POST['mail'])) {
        //conexion a la base de datos
        
        include("conexion.php");
        // varibles para validar y modificar contraseña
        $Newpass;//guarda la nueva contraseña
        $idCeunta; 
        $bloqueo;
        $mail=$_POST['mail'];
        //instrucciones para slq
        $sql;$sql2;$sql3;
        $res;$res2;
        
        if($conexion->connect_errno){
            //no se conecto
            die('Error de conexión');
        }
        else {
            //genero la coneccion
            $sql="SELECT * FROM usuario WHERE usuario='$mail'";
            $res=$conexion->query($sql);
            if ($res->num_rows>0) {
                //CUENTA EXISTE
                $bloqueo=$res->fetch_assoc();
                if($bloqueo['acceso']>3){
                    //cuenta bloqueada
                    $Newpass=newpass();
                    $NewEncrip=password_hash($Newpass, PASSWORD_DEFAULT,['cost'=>5]);//encriptamos la contraseña
                    $idCeunta=$bloqueo['Id'];

                    $sql2="UPDATE usuario SET contrasena='$NewEncrip', acceso=1 WHERE Id=$idCeunta";
                    $conexion->query($sql2);
                    $nombre = $bloqueo['nombre'];
                    $texto = "Hola $nombre. \nSe ha registrado una solicitud para restablecer su contrasena. \nSu nueva contrasena es: $Newpass \nNo la comparta con nadie.";
                    
                    $correo = $bloqueo['correo'];
                    mail($correo,"Recuperacion de contraseña",$texto);
                    $aux = 1;
                    //echo $Newpass;
                }
                else{
                    //cuenta no bloqueada
                    header("location:home.php");
                    exit;
                }
            }
            else{
                //cuenta inexistente
            }
        }
    }
    include("header.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cuenta Bloqueada</title>
</head>
<body style="background-image: linear-gradient(-20deg, #fc6076 0%, #ff9a44 100%);">
    
    <div class="container">
        <br>
        <div class="row">
            <center><h1>¿Cuenta bloqueada?</h1></center>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
                <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
                    <div class="mb-3">
                        <input type="text" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa la Cuenta bloqueada" required>
                    </div>
                    <button type="submit" name="submit" class="btn btn-danger">Recuperar cuenta</button> 
                </form>
            </div>
            <div class="col-3">
                <a href="home.php"><button class="btn btn-warning">Regresar</button></a>
            </div>
        </div>
        <?php
        if($aux == 1){?>
            <div class="row">
                <center><h6>Correo enviado. Si desea cambiar la contraseña, de clic en <a href="cambiar.php">Cambiar Contraseña</a></h6></center>
            </div>
        <?php
        }
        ?>
    </div>
    <br><br>
</body>
</html>
<?php
    include("Footer.php");
?>
