<?php
$servidor="localhost";
$usuario="root";
$password="usbw";
$register="register";

$con=mysqli_connect($servidor,$usuario,$password,$register);

if(!$con){
    die("No se ha podido realizar la conexión ".mysqli_connect_error()."<br>");
 }else{
    mysqli_set_charset($con,"utf8");
 }

?>