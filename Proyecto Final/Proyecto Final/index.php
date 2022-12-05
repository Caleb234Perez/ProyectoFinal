<?php
    session_start();
if(empty($_COOKIE['user'])){
    
   
}else{
    $_SESSION['user']=$_COOKIE['user'];  
    $_SESSION['id']=$_COOKIE['id'];
}
header('Location:home.php');
?>