<?php
require_once('../../clases/Conexion.php');
$nombre = $_REQUEST['nombre'];
$pass = $_REQUEST['pass'];
if(empty($nombre)||empty($pass)){
  echo 0;
}else{
  $instancia = Conexion::dameInstancia();
  $conexion=$instancia->dameConexion();
  $misql="DELETE FROM `usuario` WHERE `nombre` = '".$nombre."' AND `pass` = '".$pass."';";
  echo $resultado = mysqli_query($conexion, $misql);
}

?>
