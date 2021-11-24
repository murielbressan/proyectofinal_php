<!DOCTYPE html>
<html lang="es">
<head>
 <?php include('../modelos/head.php') ?>
 <link href="../css/styles.css" rel="stylesheet">
 <link href="../css/nav.css" rel="stylesheet">
</head>
<?php session_start(); 

if(! isset ($_SESSION['user'])){

    header("location: login.php");
}


?>
<body class="bodylogin" >
  <!-- Nav-->
  <?php include('../modelos/navbar.php') ?>


<header class="masthead-login">
         
<header class="headerlogin">
            <div class="container d-flex h-100 align-items-center">
              <div class="col-4 login">
                <div class="text-left">
                <h1>Bienvenid@ <?php echo $_SESSION['nombre'] ?>! </h1>
                </div>
            <div class="logincocinera col-4">
            </div>
              </div>
       
        </header>            
        </header>

        <?php include('../modelos/footer.php') ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>