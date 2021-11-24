$(".btn-agregar").click(function () {
  var precio = $(this).attr("data-precio");
  var img = $(this).attr("data-img");
  var nombre = $(this).attr("data-nombre");
  var id_usuario = $(this).attr("data-id_usuario");
  var id_producto = $(this).attr("data-id_producto");
  console.log(precio, img, nombre, id_usuario, id_producto);
  $.post(
    "../controlador/agregar_carrito.php",
    {
      id_producto: id_producto,
      id_usuario: id_usuario,
      precio: precio,
      nombre: nombre,
      img: img,
    },
    function (result) {
      alert("producto agregado!");
    }
  );
});

$("[id^=eliminar]").click(function () {
  var producto = $(this).attr("data-id_carrito");
  $.post("../controlador/eliminar_producto.php", {
    id_carrito: producto,
  });
  location.reload();
});

$(".cantidad").change(function () {
  var cantidad = $(this).val();
  var precio = $(this).parent().parent().find(".precio").text();
  var subtotal = cantidad * precio;
  $(this).parent().parent().find(".subtotal").text(subtotal);;
});
