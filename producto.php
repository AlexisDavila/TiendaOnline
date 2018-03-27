<?php
  include 'php/cabecera.php';
?>
<?php
  $con = mysqli_connect("localhost","root","","tiendaonline2");
  $query = "SELECT*FROM productos WHERE id=".$_GET['id']."";
  $result = mysqli_query($con,$query);
  while ($row = mysqli_fetch_array($result)) {
    echo "<article>";
    echo "<h3>".$row['nombre']."<h3>";
    echo "<p>".$row['descripcion']."</p>";
    echo "<p>Precio: S/.".$row['precio']."</p>";

    $query2 = "SELECT*FROM imagenesproductos WHERE idproducto=".$row['id']."";
    $result2 = mysqli_query($con,$query2);
    while ($row2 = mysqli_fetch_array($result2)) {
      echo "<img src='img/".$row2['imagen']."' width=150px>";
    }
    echo "<br>";
    echo "<a href='producto.php?id=".$row['id']."'><button>Mas información</button></a>";
    echo "   ";
    echo "<button>Comprar</button>";
    echo "</article>";
  }
?>
<?php
  include 'php/piedepagina.php';
?>
