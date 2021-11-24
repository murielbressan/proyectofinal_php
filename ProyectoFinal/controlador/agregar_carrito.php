<?php
session_start();
/* BASE DE DATOS */
include('../modelos/db.php');

// var_dump($_POST);

  $user = $_SESSION['user'];
  $data = $_POST;
  $id_producto = $data['id_producto'];
  $id_usuario = $data['id_usuario'];
  $precio = $data['precio'];
  $nombre = $data['nombre'];
  $img = $data['img'];

  $sql = "INSERT INTO carritos (id_producto, id_usuario, nombre, precio, img)
  VALUES ('$id_producto', '$id_usuario','$nombre','$precio','$img')";

  if ($enlace->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $enlace->error;
  }

  return;

 ?>
