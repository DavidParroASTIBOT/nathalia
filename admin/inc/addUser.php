<?php
  require_once('../../clases/Conexion.php');
	$nombre = $_REQUEST['nombre'];
  $pass = $_REQUEST['pass'];
  if(empty($nombre)||empty($pass)){
    echo 0;
  }else{
		$instancia = Conexion::dameInstancia();
		$c=$instancia->dameConexion();
    $misql="INSERT INTO `usuario` (`id`,`nombre`,`pass`,`tipo`) VALUES(NULL,'".$nombre."','".$pass."',2);";
    echo $resultado = mysqli_query($c, $misql);
  }

?>
