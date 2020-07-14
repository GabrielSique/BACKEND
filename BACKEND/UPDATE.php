<?php
  include("CONEXION.php");
  $link = Conectarse();
  $nombre = $_GET['nombre'];
  $cargo_programador = $_GET['cargo'];
  $correo_electronico = $_GET['correo'];
  $website_portafolio = $_GET['website'];

  $cadena ="update programador set NOMBRE='".$nombre."',CARGO_PROGRAMADOR='".$cargo_programador."',CORREO_ELECTRONICO='".$correo_electronico."',WEBSITE_PORTAFOLIO='".$website_portafolio."' where NOMBRE=".$nombre;
  mysqli_query($link,$cadena)or die('INSERCION FALLIDA ' . mysqli_error());

  header("Location: BACKEND.php");
?>