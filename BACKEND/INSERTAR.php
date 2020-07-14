<?php
  include("CONEXION.php");
  $link = Conectarse();
  $nombre = $_GET['nombre'];
  $cargo_programador = $_GET['cargo'];
  $correo_electronico = $_GET['correo'];
  $website_portafolio = $_GET['website'];
  $cadena ="insert into programador(NOMBRE,CARGO_PROGRAMADOR,CORREO_ELECTRONICO,WEBSITE_PORTAFOLIO) values('".$nombre."','".$cargo_programador."','".$correo_electronico."','".$website_portafolio."')";

  mysqli_query($link,$cadena)or die('INSERCION FALLIDA ' . mysqli_error());
  header("Location: BACKEND.php");
?>