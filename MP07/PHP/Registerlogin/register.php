<?php
$nombre = $_POST['Nombre'];
$apellidos = $_POST['Apellidos'];
$mail = $_POST['Mail'];
$contraseña = $_POST['Contraseña'];
$confContraseña = $_POST['ConfContraseña'];
/* $role = 'basic'; */

/* echo "El nombre es ".$nombre." la edad es ".$apellidos." y el dni es ".$edad;
 */
/* CONFIGURAR CONEXION AL SERVIDOR*/

$servidor="localhost";
$usuario="root";
$password="usbw";
$register="registerlogin";

$data = $_POST;

if(empty($data['Nombre']) || 
   empty($data['Apellidos']) ||
   empty($data['Mail']) ||
   empty($data['Contraseña']) ||
   empty($data['ConfContraseña'])){
   die('Complete todos los campos');
}
if($data['Contraseña']!== $data['ConfContraseña']){
    die('Contraseña y confirmación contraseña no son iguales!');
}

/* if ($stmt = $con->prepare('SELECT `email` FROM `users` WHERE `email` = ?')) {
	//Enlazar parámetros (s = string, i = int, b = blob, etc.), hash la contraseña usando la función PHP password_hash.
	$stmt->bind_param('s', $_POST['Mail']);
	$stmt->execute();
	$stmt->store_result();
	//Almacene el resultado para que podamos verificar si la cuenta existe en la base de datos.
	if ($stmt->num_rows > 0) {
		// Username already exists
		echo 'El correo electrónico ya esta registrado, escoja otro';
	} else {
		// Insert new account
	}
	$stmt->close();
} else {
	// Algo está mal con la instrucción sql, verifique que la tabla de cuentas exista con los 3 campos.
	
}
$con->close(); */
?>

/* CONEXION A BASE DE DATOS VARIABLE CONEXION*/
$con=mysqli_connect($servidor,$usuario,$password,$register);

 if(!$con){
    die("No se ha podido realizar la conexión ".mysqli_connect_error()."<br>");
 }else{
     mysqli_set_charset($con,"utf8");
     echo "Se ha establecido correctamente la conexión a la base de datos";
    
     $sql="INSERT INTO `users`(`id`, `nombre`, `apellidos`, `email`, `password`, `confpassword`, `role`) 
     VALUES (NULL, '".$nombre."', '".$apellidos."', '".$mail."', '".$contraseña."', '".$confContraseña."','basic')";


     $consulta=mysqli_query($con,$sql);

     if(!$con){
         die("No se ha podido realizar el insert");
     }else{
         echo "El insert se ha realizado correctamente";
     }
    }
?>