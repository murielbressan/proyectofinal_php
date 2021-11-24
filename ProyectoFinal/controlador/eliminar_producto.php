<?php

session_start();
/* BASE DE DATOS */
include('../modelos/db.php');

$user = $_SESSION['user'];
$data = $_POST;
$id_carrito = $data['id_carrito'];

$sql = "DELETE FROM carritos WHERE id_carrito = '$id_carrito'";

if ($enlace->query($sql) === TRUE) {
    echo "Se elimino el producto correctamente.";
    echo $sql;
  } else {
    echo "Error: " . $sql . "<br>" . $enlace->error;
  }

  return;


?>