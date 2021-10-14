<?php
require('register.php')
session_start();
if (isset($_POST['Mail'])){
    $mail = stripcslashes($_REQUEST['Mail']);
    $mail = mysqli_real_escape_string($con, $mail);
    $password = stripcslashes($_REQUEST['Contraseña']);
    $password = mysqli_real_escape_string($con, $password);

    $query = "SELECT * FROM `users` WHERE Mail='$mail'
    AND password='" . md5($password) . "'";
    $result = mysqli_query($con, $query) or die(mysql_error());
    $rows = mysqli_num_rows($result);

    if($rows == 1){
        $_SESSION['Mail'] = $mail;

        header("Location: basicuser.php")
    }
}
?>

<!-- $mail = $_POST['Mail'];
$contraseña = $_POST['Contraseña'];

/* CONFIGURAR CONEXION AL SERVIDOR*/

$servidor="localhost";
$usuario="root";
$password="usbw";
$register="registerlogin";

/* CONEXION A BASE DE DATOS VARIABLE CONEXION*/

$con=mysqli_connect($servidor,$usuario,$password,$register);
 if(!$con){
    die("No se ha podido realizar la conexión ".mysqli_connect_error()."<br>");
 }else{
     mysqli_set_charset($con,"utf8");
     echo "Se ha establecido correctamente la conexión a la base de datos";
    
     $sql="INSERT INTO `registerlogin`.`registerlogin` (`id`, `Nombre`, `Apellidos`, `Mail`, `Contraseña`, `ConfContraseña`) 
     VALUES (NULL, '".$nombre."', '".$apellidos."', '".$mail."', '".$contraseña."', '".$confContraseña."')";

     $consulta=mysqli_query($con,$sql);

     if(!$con){
         die("No se ha podido realizar el insert");
     }else{
         echo "El insert se ha realizado correctamente";
     }
    }
 -->