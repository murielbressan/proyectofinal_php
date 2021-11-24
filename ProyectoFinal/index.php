<!DOCTYPE html>
<html lang="es">
<head>
 <?php include('./modelos/head.php') ?>
 <link href="/css/styles.css" rel="stylesheet">
 <link href="/css/nav.css" rel="stylesheet">

 <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include('./funciones/funciones.php');
$productos = mostrar_productos();
?>

</head>
<?php session_start(); ?>
<body>
  <!-- Nav-->
 
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
  <div class="container-fluid">
    <a href="index.php"> <img class="logo" src="/assets/img/logo.png" alt=""></a>
    <a class="navbar-brand" href="#">Sweet Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="productos">Productos</a>
        </li>
        <?php  
          if(! isset($_SESSION['user'])){
         echo '<li class="nav-item">
          <a class="nav-link" href="/vistas/login.php">Login</a>
          </li>';
          } 
       ?>
       <?php  
          if( isset($_SESSION['user'])){
         echo ' <li class="nav-item">
         <a class="nav-link" href="/controlador/logout.php">Salir</a>
       </li>';
          } 
       ?>
        <li class="nav-item">
          <a class="nav-link " href="/vistas/carrito.php"><img class="carrito" src="/assets/img/cesta-de-la-compra.png" alt="Carrito"></a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>

<header class="headerindex"> 
  <div>

</div>
</header>
  
<section class="productos-section mb-3" id="productos">
    <div class="container">
      <div class="row mx-auto text-center ">
        <div class="col-lg-8  mx-auto">
          <h3 class="mb-2">Nuestros productos</h3>
          <h5 class="m-2">Para poder comprar necesitas estar logeado</h5>
        </div>
      </div>
      <div class="row align-items-end">
      <?php foreach($productos as $producto){ ?>
        <div class="col-xl-3 col-6 col-sm-12 mt-4 mb-4">
          <div class="producto text-center ">
            <a href="<?php echo $producto['id'];?>">
              <img class="img-fluid imgproducto"  src="<?php echo $producto['img'];?>"/>
              <h4 class="text-left nombreproduct"><?php echo $producto['nombre']; ?></h4>
              <h5 class="text-left precioproduct">$<?php echo $producto['precio']; ?></h5>
            </a>
            <button data-id_producto="<?php echo $producto['id'];?>" 
            data-id_usuario="<?php echo $_SESSION['user'];?>" 
            data-precio="<?php echo $producto['precio'];?>" 
            data-nombre="<?php echo $producto['nombre'];?>" 
            data-img="<?php echo $producto['img'];?>"
            class="btn btn-agregar mb-2"
            >Agregar</button>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
    </div>
  </section>

<?php include('./modelos/footer.php') ?>

<script src="/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>