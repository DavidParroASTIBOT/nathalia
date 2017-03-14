<?php

$nombre = $_REQUEST['nombre'];
$pass = $_REQUEST['pass'];
if(empty($nombre)||empty($pass)){
  echo 0;
}else{
  $conexion  = mysqli_connect('localhost','root','','nathalia');
  mysqli_set_charset ($conexion, "utf8" );
  $misql="DELETE FROM `usuario` WHERE `nombre` = '".$nombre."' AND `pass` = '".$pass."';";
  echo $resultado = mysqli_query($conexion, $misql);
}

?>
