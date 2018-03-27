$(document).ready(inicio)
function inicio(){
  $(".botoncompra").click(agregar)
}
function agregar() {
  $("#carrito").load("php/cargacarrito.php?p="+$(this).val());
}
