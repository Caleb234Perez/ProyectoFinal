<?php
    session_start();
    
    //conexion a la base de datos
    include("conexion.php");

    //variables para validar ususario y captcha
    $contra=$_POST['pass'];
    $user=$_POST['user'];
    //variables para el manejos de datos
    $sql;$sql2;$sql3;
    $res;$res2;

    $bloqueda;//si no es usuario bloqueado
    $idbloq;//modifica acceso la contraseña es incorrecta

    $ususario;//el usuario es correcto
    
    //revisamos si se realizo la conexion
    if($user=="root" and $contra=="root"){
        $_SESSION['user']="root";
        header("location:home.php");
        exit;
    }



    if($conexion->connect_errno){
        die('Error de conexión');
    }    
    else{
        $sql="SELECT * FROM usuario WHERE usuario='$user'";
        $res=$conexion->query($sql);
        if($res->num_rows>0){
            //usuario existe
            $bloqueda=$res->fetch_assoc();
            //revisamos si no esta bloqueada
            if ($bloqueda['acceso'] > 3) {
                //cuanta bloqueada 
                header("location: bloqueo.php");
                exit;
            }
            else{
                //comprobar contraseña
                
                $sql2="SELECT * FROM usuario WHERE usuario='$user'";
                $res2=$conexion->query($sql2);
                
                if(password_verify($contra,$bloqueda['contrasena'])){
                    //contraseña correcta
                    //  comprobamos captcha
                    //captcha ingresado
                    if ( isset($_POST['securityCode']) && ($_POST['securityCode']!="")){ 
                        //catpcha incorrecto
                        if(strcasecmp($_SESSION['captcha'], $_POST['securityCode']) != 0){
                            header("location:home.php");
                            exit;
                        //captcha correcto
                        }else{
                            //guardamos los datos correspondientes
                            $datos=$res2->fetch_assoc();
                            $_SESSION['user']=$datos['usuario'];
                            $_SESSION['id']=$datos['Id'];
                            $_SESSION['cantidad']=0;
                            $_SESSION['mail']=$datos['correo'];
                            //$_SESSION['carritoprod'][];
                            
                            $id=$datos['Id'];

                            $sql="UPDATE usuario SET acceso=1 WHERE Id=$id";
                            $conexion->query($sql);
                            if(isset($_POST['remember'])){
                                //si queria cookies
                                setcookie('user',$datos['usuario'],time()+86400,'/');
                                setcookie('id',$datos['Id'],time()+86400,'/');
                            }
                            else {
                                //si no las borramos por si acaso
                                setcookie('user','',time()-1,'/');
                                setcookie('id','',time()-1,'/');
                            }
                        }
                    //captcha no ingresado
                    } else {
                        header("location:home.php");
                        exit;
                    }
                   
                }
                else{
                    //contraseña incorrecta
                    $idbloq=$bloqueda['Id'];
                    $acceso=$bloqueda['acceso']+1;
                    //aumentamos el campo acceso
                    $sql3="UPDATE usuario SET acceso=$acceso WHERE Id=$idbloq";
                    $conexion->query($sql3);
                }
            }
        }
        else{
            //usuario inexistente
        }
    }
    header("location: home.php");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>