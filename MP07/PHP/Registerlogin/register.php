<?php

$nombre = $_POST['Nombre'];
$apellidos = $_POST['Apellidos'];
$mail = $_POST['Mail'];
$contraseña = $_POST['Contraseña'];
$confContraseña = $_POST['ConfContraseña']; 
$role = 'basic';

$servidor="localhost";
$usuario="root";
$passwd="usbw";
$datos="users";

$con=mysqli_connect($servidor,$usuario,$passwd,$datos);
if(!$con){
    die("No se ha podido realizar la conexión ".mysqli_connect_error()."<br>");
 }else{
    mysqli_set_charset($con,"utf8");
    $sql="INSERT INTO `users`(`id`, `nombre`, `apellidos`, `email`, `password`, `confpassword`, `role`) 
    VALUES (NULL,'".$nombre."', '".$apellidos."', '".$mail."', '".$contraseña."', '".$confContraseña."','"$role"')";
    $consulta = mysqli_query($con,$sql);
}

?>
