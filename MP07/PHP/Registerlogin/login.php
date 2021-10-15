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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login">
        <div class="login-title">
            <h1>Login</h1>
        </div>
    

    <form action="/validar.php" method="post">
        <div class="container">

            <label for="Mail"></label>
            <input type="text" id="Mail" name="Mail" placeholder="Correo electrónico"><br><br>

            <label for="Contraseña"></label>
            <input type="text" id="Contraseña" name="Contraseña" placeholder="Contraseña"><br><br>

            <input type="submit" value="Acceder">

        </div>
        
    </form>
    </div>
</body>
</html>
