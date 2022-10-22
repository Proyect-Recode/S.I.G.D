<?php

// Llamo a la conexion para la bd

include_once('db.php');

// Recibo los datos del formulario

$nombre = $_POST ["nombre"];
$apellido = $_POST ["apellido"];
$username = $_POST ["username"];
$email = $_POST ["emailR"];
$clave = $_POST ["claveR"];


$conectar = connect();

$sql = " INSERT INTO usuario (nombre, apellido, usuario, email, contraseña) VALUES ("$nombre", "$apellido", "$username", "$email", "$clave")";

$resul = mysqli_query ($conectar, $sql) or trigger_error ("Query Failed! SQL - Error: ".mysqli_error($conectar))

echo "$sql";


?>