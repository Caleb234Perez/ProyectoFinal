<?php
//conexion a la base de datos
include("conexion.php");
include("header.php");



$aux=0;
$flag=0;

$nombre="";
$mail="";
$contrasena="";
$contrasena2="";
$cuent="";
 
if ($conexion->connect_errno){
    die('Error en la conexion');
    //echo "errorC";
}
else{
    if (isset($_POST['submit'])) {
        $nombre=$_POST['nombre'];
        $mail=$_POST['mail'];
        $contrasena=$_POST['contrasena'];
        $contrasena2=$_POST['contrasena2'];
        $cuent=$_POST['cuenta'];
        if($contrasena != $contrasena2 || $nombre == "root" || $nombre == "Root" || $nombre == "ROOT"){
            //echo '<script> alert("¡Las contraseñas no coinciden!") </script>';
            $aux=3; //boton contraseñas no coinciden
        } else{
            
            $sqlC="SELECT * FROM usuario";
            $resultado = $conexion->query($sqlC);
            if($resultado->num_rows){
                while($fila = $resultado->fetch_assoc()){
                    if(($cuent == $fila['usuario']) || ($mail == $fila['correo'])){
                        //echo '<script> alert("Usuario o correo ya existente") </script>';
                        $flag = 1; //si el usuario o el correo ya existen, prende una bandera que evitara que se inserten
                                        // valores repetidos
                        $aux=2; //boton con error al registrarse
                        break;
                    }
                }
                if($flag!=1){

                    $encripPass= password_hash($contrasena, PASSWORD_DEFAULT,['cost'=>5]);
                    $sql="INSERT INTO usuario (nombre,usuario,correo,contrasena,acceso,c1,c2,c3) VALUES ('$nombre','$cuent','$mail','$encripPass','0',0,0,0)";
                    $conexion->query($sql);
                    if($conexion->affected_rows >=1){
                        //echo '<script> alert("¡registro exitoso!") </script>';
                        $aux=1; //boton de registro exitoso
                    }
                }
            }


            /*
            $sql="INSERT INTO usuario (nombre,usuario,correo,contrasena,acceso) VALUES ('$nombre','$cuent','$mail','$contrasena',1)";
            $conexion->query($sql);
            if($conexion->affected_rows >=1){
                //echo '<script> alert("¡registro exitoso!") </script>';
                $aux=1;
            }*/
        }
    }else{
        //echo "errorO";
    }
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>


<body style="background-image: linear-gradient(to right, #f83600 0%, #f9d423 100%);">


    <div class="container">
        <div class="row">
            <br>
        </div>
        <div class="row">
            <br>
        </div>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6">
            <?php if($aux==0){?>
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                    <div class="mb-3">
                        
                        <input type="email" name="mail" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="contrasena" class="form-control" id="exampleInputPassword1" placeholder="Contraseña" required>
                    </div>
                    <div class="mb-3">
                        <input type="password" name="contrasena2" class="form-control" id="exampleInputPassword1" placeholder="Ingrese de nuevo su Contraseña" required>
                    </div>
                    
                    <div class="mb-3">
                        <input type="text" name="nombre" class="form-control" id="exampleInputPassword1" placeholder="Nombre completo" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="cuenta" class="form-control" id="exampleInputPassword1" placeholder="Nombre de ususario" required>
                    </div>
                    <input type="submit" class="btn btn-danger" value="Registrarme" name="submit">
                </form>
                <?php
                }
                else if($aux == 1){?>
                    Registro exitoso
                    <a href="home.php">
                        <button class="btn btn-danger">Inicio</button>
                    </a>
                    
                <?php
                } else if($aux == 2){?>
                    Usuario o Correo ya existentes
                    <a href="home.php">
                        <button class="btn btn-danger">Inicio</button>
                    </a>
                    <a href="registro.php">
                        <button class="btn btn-danger">Registrarse</button>
                    </a>
                <?php
                } else if($aux == 3){?>
                    Las contraseñas no coinciden o el usuario no es válido.
                    <a href="home.php">
                        <button class="btn btn-danger">Inicio</button>
                    </a>
                    <a href="registro.php">
                        <button class="btn btn-danger">Registrarse</button>
                    </a>
                <?php
                }
                ?>
            </div>
            <div class="col-3"></div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php
        include("Footer.php");
    ?>
</body>
</html>