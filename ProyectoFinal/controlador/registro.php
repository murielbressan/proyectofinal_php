<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = $_POST;

if($data['password'] != $data['password2']){
  echo "<h1>Las contraseñas no coinciden</h1>";
  header( "refresh:2;url=registrarse.php");
  exit;
} else {
  $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
}

/* BASE DE DATOS */
include('../modelos/db.php');

if (!$enlace) {

    echo "Error: No se pudo conectar a MySQL." .PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " .mysqli_connect_error() . PHP_EOL;
    exit;

}
$sql = "INSERT INTO usuario (nombre, apellido, dni, email, password)
VALUES ('".$data["nombre"]."','".$data["apellido"]."', '".$data["dni"]."', '".$data["email"]."','".$data["password"]."')";

if (mysqli_query($enlace, $sql)) {
  header( "refresh:0;url=../vistas/bienvenido.php");
} else {
  echo "Error: " . $sql . ":-" . mysqli_error($enlace);
}




?>

