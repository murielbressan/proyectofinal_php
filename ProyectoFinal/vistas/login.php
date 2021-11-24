<!DOCTYPE html>
<html lang="es">
<head>
 <?php include('../modelos/head.php') ?>
 <link href="../css/styles.css" rel="stylesheet">
 <link href="../css/nav.css" rel="stylesheet">
</head>

<?php 
session_start(); 
if(isset($_SESSION['user'])){
  header("location: ./bienvenido.php");
}
?>

<body class="bodylogin" >
  <!-- Nav-->
  <?php include('../modelos/navbar.php'); ?>

<header class="headerlogin">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4 login">
                <div class="text-left">
                    <h1 class="my-0 txt-black mb-4">login</h1>
                    <form method="post" action="../controlador/loguearse.php" >
                      <input type="text" name="dni" class="form-control mb-4 shadow-none" placeholder="DNI" id="name" required>
                      <input type="password" name="password" class="form-control mb-2 shadow-none" placeholder="Contraseña" id="password" required>
                      <div class="mb-1">
                      <?php
                         if(isset($_GET["fallo"]) && $_GET["fallo"] == 'true')
                         {
                         echo "<div style='color:red'>Usuario o contraseña invalido </div>";
                       }
                     ?>
                    </div>
                      <button type="submit" class="btn btn-login btn-block shadow-none ">Ingresar</button>
                      <p ><h5 class="ms-2"> No tenés cuenta? <span> <a href="registrarse.php">Registrate.</a></span></h5></p>
                    </form>
                </div>
                </div>
            <div class="logincocinera col-4">
            </div>
              </div>


            
        </header>
  


        <?php include('../modelos/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>