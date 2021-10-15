<?php
$servidor="localhost";
$usuario="root";
$password="";
$database="login_reg";

$conn=mysqli_connect($servidor,$usuario,$password,$database);

if(!$conn){
    echo "<script>alert('No se ha podido realizar la conexion a la base de datos')</script>"; 
 }else{
    mysqli_set_charset($con,"utf8");
 }

?>