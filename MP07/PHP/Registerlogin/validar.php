<?php
$mail=$_POST['Mail'];
$contra=$_POST['Contraseña'];
session_start();
$_SESSION['Mail']=$mail;

include('data.php');

$consulta=" SELECT * FROM users WHERE mail='$mail' AND password ='$contra' ";
$resultado=mysqli_query($con,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:userbasic.php")
}
else{
    ?>
    <?php
    include("login.php")
    ?>
    <h1 class="bad">Error en la autentificacion</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($con);