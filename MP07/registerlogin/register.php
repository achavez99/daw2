<?php

include 'bd.php';

error_reporting(0);

if(isset($_POST['submit'])){
    $nombre = $_POST['Nombre'];
    $apellidos = $_POST['Apellidos'];
    $mail = $_POST['Mail'];
    $contraseña = md5($_POST['Contraseña']);
    $confContraseña = md5($_POST['ConfContraseña']); 
    $role = 'basic';

    if($contraseña == $confContraseña){
        $sql="INSERT INTO `users`(`id`, `nombre`, `apellidos`, `email`, `password`, `confpassword`, `role`) 
    VALUES (NULL,'".$nombre."', '".$apellidos."', '".$mail."', '".$contraseña."', '".$confContraseña."','"$role"')";
    $resultado= mysqli_query($conn,$sql);
    if($resultado){
        echo "<script>alert('Usuario creado correctamente')</script>"; 
    }
    else{
        echo "<script>alert('Algo salio mal!')</script>"; 
    }
    }else{
        echo "<script>alert('La contraseña no coincide')</script>";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="registro">
        <div class="registro-title">
            <h1>Registro</h1>
        </div>
    </div>

    <form action="" method="post">
        <div class="container">

        <label for="Nombre"></label>
        <input type="text" id="Nombre" name="Nombre" placeholder="Nombre" value="<?php echo $nombre; ?>" required><br><br>

        <label for="Apellidos"></label>
        <input type="text" id="Apellidos" name="Apellidos" placeholder="Apellidos" value="<?php echo $apellidos; ?>" required><br><br>

        <label for="Mail"></label>
        <input type="text" id="Mail" name="Mail" placeholder="Email" value="<?php echo $mail; ?>" required><br><br>

        <label for="Contraseña"></label>
        <input type="text" id="Contraseña" name="Contraseña" placeholder="Confirmar contraseña" value="<?php echo $_POST['Contraseña']; ?>" required><br><br>

        <label for="ConfContraseña"></label>
        <input type="text" id="ConfContraseña" name="ConfContraseña" placeholder="Confirmar contraseña" value="<?php echo $_POST['ConfContraseña']; ?>" required><br><br>

        <input type="submit" value="Registrar">

        </div>

    </form>
    
</body>
</html>