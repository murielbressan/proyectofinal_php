<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

$data = $_POST;

/* BASE DE DATOS */
include('../modelos/db.php');

if (!$enlace) {

    echo "Error: No se pudo conectar a MySQL." .PHP_EOL;
    echo "error de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " .mysqli_connect_error() . PHP_EOL;
    exit;

}

$user = $data ['dni'];
$password = $data['password'];


$sql = "SELECT password FROM usuario WHERE dni = '$user'";
$result = mysqli_query($enlace,$sql);
$passwordEncoded = mysqli_fetch_row($result);

if (mysqli_num_rows($result) >0 ) {

    // echo "Dni ". $usuario["dni"]." - Nombre: " . $usuario["nombre"]. " " . $usuario["apellido"]. "<br>";

    if(password_verify($password, $passwordEncoded[0] )) {
    
      $sql_atributos = "SELECT nombre, apellido, email FROM usuario WHERE dni = '$user'";
      $result_atributos = mysqli_query($enlace,$sql_atributos);
      $row = mysqli_fetch_row($result_atributos);


      session_start();

      $_SESSION['user'] = $user;
      $_SESSION['nombre'] = $row[0];
      $_SESSION['apellido'] = $row[1];
      $_SESSION['email'] = $row[2];
      header('Location: ../vistas/bienvenido.php');
  
    }else{
      header("location: ../vistas/login.php?fallo=true");
    }

}


?>

