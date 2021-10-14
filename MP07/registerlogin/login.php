<?php
include 'bd.php';

session_start();

if(isset($_POST['submit'])){
    $mail = $_POST['Mail'];
    $contraseña = $_POST['Contraseña'];

    $sql = "SELECT * FROM `users` WHERE email='$mail' AND contraseña='$contraseña'";
    $resultado= mysqli_query($conn, $sql);
    if($resultado->num_rows>0){
        $row=mysqli_fetch_assoc($resultado);
        $_SESSION['nombre'] = $row['nombre'];
        header("Location: home.php");
    }else{
        echo "<script>alert('Correo o contraseña incorrecta')</script>"; 
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
    

    <form method="post">
        <div class="container">

            <label for="Mail"></label>
            <input type="text" id="Mail" name="Mail" placeholder="Correo electrónico" value="<?php echo $mail; ?>" required><br><br>

            <label for="Contraseña"></label>
            <input type="text" id="Contraseña" name="Contraseña" placeholder="Contraseña" value="<?php echo $_POST['Contraseña']; ?>" required><br><br>

            <input type="submit" value="Acceder">

        </div>
        
    </form>
    </div>
</body>
</html>