<nav class="navbar navbar-expand-lg navbar-light navlogin bg-light">
  <div class="container-fluid">
    <a href="index.php"> <img class="logo" src="/assets/img/logo.png" alt=""></a>
    <a class="navbar-brand" href="../index.php">Sweet Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Inicio</a>
        </li>
        <input type="hidden" id="user_dni" name="user_dni" value="">
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
          <a class="nav-link " href="carrito.php"><img class="carrito" src="/assets/img/cesta-de-la-compra.png" alt="Carrito"></a>
        </li>
      
      </ul>
    </div>
  </div>
</nav>