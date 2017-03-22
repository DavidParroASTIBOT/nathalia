<?php
  require_once('../clases/Conexion.php');
  $instancia = Conexion::dameInstancia();
  $c=$instancia->dameConexion();
  $misql="UPDATE `foto` SET `seleccionada` = '".$_POST['valor']."' WHERE `foto`.`id` = '".$_POST['idFoto']."';";
  $resultado = mysqli_query($c, $misql);
  echo $resultado->num_rows;
?>
