<?php
  include("CONEXION.PHP");
  $link = Conectarse();
  $nombre = $_GET['nombre'];
  
  $cadena ="delete from programador where NOMBRE=".$nombre;
  mysqli_query($link,$cadena)or die('BORRADO FALLIDA ' . mysqli_error());
  header("Location: BACKEND.php");
?>