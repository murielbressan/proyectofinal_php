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
  
<?php include('../modelos/navbar.php') ?>

<header class="headerlogin">
<div class="container d-flex h-100 align-items-center">
              <div class=" ">
                <div class="text-left registro  ">
                    <h1 class="my-0 txt-black mb-4">Registro</h1>
                    <form method="post" action="../controlador/registro.php">
                      <input type="text" class="form-control mb-4" placeholder="Nombre" name="nombre" id="name" required>
                      <input type="text" class="form-control mb-4" placeholder="Apellido" name="apellido" id="apellido" required>
                      <input type="number" class="form-control mb-4" placeholder="DNI" name="dni" id="dni" required>
                      <input type="text" class="form-control mb-4" placeholder="Correo" name="email" id="email" required>
                      <input type="password" class="form-control mb-4" placeholder="Contraseña" name="password" id="password" required>
                      <input type="password" class="form-control mb-4" placeholder="Contraseña" name="password2" id="password2" required>
                      <button type="submit" name="submit" class="btn btn-login btn-block">Enviar</button>
                    </form>
                </div>
              </div>


            </div>


            
        </header>
  


        <?php include('../modelos/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>