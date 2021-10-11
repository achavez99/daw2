<?php
$nombre = $_POST['Nombre'];
$apellidos = $_POST['Apellidos'];
$mail = $_POST['Mail'];
$contraseña = $_POST['Contraseña'];
$confContraseña = $_POST['ConfContraseña'];

/* echo "El nombre es ".$nombre." la edad es ".$apellidos." y el dni es ".$edad;
 */
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
?>