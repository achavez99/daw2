<?php
include("aut_session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="form">

    <p>Hola,<?php echo $_SESSION['Nombre'];?></p>
    <p><a href="logout.php">Log out</a></p>
    
</div>
    
</body>
</html>