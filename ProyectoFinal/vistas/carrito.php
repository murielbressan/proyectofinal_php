<!DOCTYPE html>
<html lang="es">
    <head>
       <?php

       error_reporting(E_ALL);
       ini_set('display_errors', 1);
       include('../funciones/funciones.php');
       include('../modelos/head.php');
       $carrito = traer_carrito();
       ?>

<link href="../css/styles.css" rel="stylesheet">
 <link href="../css/nav.css" rel="stylesheet">

    </head>
    <?php session_start(); ?>
    <body id="page-top">
        <!-- Navigation-->

        <?php include('../modelos/navbar.php') ?>

        <!-- Carrito-->
        <section class="" id="carrito">
            <div class="container">
                <div class="row ms-auto text-center">
                  <h3 class="mb-4 mt-4"><i class="fas fa-shopping-basket fa-lg pr-3 "></i>carrito de compras</h3>
                </div>
                <div class="row">
                  <div class="container contenedortable">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="col-1"></th>
                          <th class="col-6 col-sm-3 text-left">producto</th>
                          <th class="col-1 col-sm-1 text-center">cantidad</th>
                          <th class="col-2 col-sm-1 text-center">precio</th>
                          <th class="col-2 col-sm-1 text-center">subtotal</th>
                          <th class="col-2 col-sm-1 text-center">#</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php foreach($carrito as $item){ ?>
                        <tr>
                          <td class="align-middle "><img class="imgproducto" src="<?php echo $item['img'];?>" /></td>
                          <td class="align-middle text-left"><?php echo $item['nombre'];?></td>
                          <td class="align-middle text-center">
                            <input type="number" class="form-control" placeholder="01" id="cantidad">
                          </td>
                          <td class="align-middle text-center"><span id="precio"><?php echo $item['precio'];?></span></td>
                          <td class="align-middle text-center">$<span id="subtotal"><?php echo $item['precio'];?></span></td>
                          <td class=" align-middle"><button id="eliminar<?php echo $item['id_carrito'] ?>" data-id_carrito="<?php echo $item['id_carrito'];?>" class="btn"><i class="fa fa-trash-alt"></i></button></td>
                        </tr>
                        
                      <?php } ?>


                      </tbody>
                    </table>


                  </div>
                </div>
                <div class="row justify-content-end">
                  <button class="btn btn-comprar">Iniciar compra</button>
                </div>
            </div>
        </section>

        


        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/script.js"></script>
    </body>

</html>
