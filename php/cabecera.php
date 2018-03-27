<?php 
  session_start();
  if (isset($_SESSION['contador'])) {
    $_SESSION['contador']=0;
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Alexis Store</title>
    <link rel="" type="text/css" href=""/>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/codigo.js"></script>
  </head>
  <body>
    <header><!--cabezera-->
      <h1>Mi tienda Virtual</h1>
      <h3>Tienda de productos Informaticos</h3>
      <nav></nav><!--menu de navegacion-->

    </header>
    <section><!--contenido de pagina-->
      <div id="carrito" style="background:darkblue;color:white;font-size: 40px;font-style:Arial"> Carrito</div><!--crea divisiones-->
