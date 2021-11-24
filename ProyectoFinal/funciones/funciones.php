<?php
function mostrar_productos(){

include('./modelos/db.php');

if (!$enlace) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM productos";
$result = mysqli_query($enlace, $sql);
$productos = [];

if (mysqli_num_rows($result) > 0) {
 
  while($row = mysqli_fetch_assoc($result)) {
    $productos[] = $row;
  }
}
return $productos;
mysqli_close($enlace);
}
/*Carrito */

function traer_carrito(){

/* BASE DE DATOS */
include('../modelos/db.php');


if (!$enlace) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM carritos";
$result = mysqli_query($enlace, $sql);
$carrito = [];

if (mysqli_num_rows($result) > 0) {
 
  while($row = mysqli_fetch_assoc($result)) {
    $carrito[] = $row;
  }
} else {
  echo "0 results";
}

return $carrito;

mysqli_close($enlace);

}
 ?>
