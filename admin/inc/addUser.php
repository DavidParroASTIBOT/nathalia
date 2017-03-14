<?php

	$nombre = $_REQUEST['nombre'];
  $pass = $_REQUEST['pass'];
  if(empty($nombre)||empty($pass)){
    echo 0;
  }else{
    $conexion  = mysqli_connect('localhost','root','','nathalia');
    mysqli_set_charset ($conexion, "utf8" );
    $misql="INSERT INTO `usuario` (`id`,`nombre`,`pass`,`tipo`) VALUES(NULL,'".$nombre."','".$pass."',2);";
    echo $resultado = mysqli_query($conexion, $misql);
  }


  /*$outp = array();
	$outp = $resultado->fetch_all(MYSQLI_ASSOC);

  echo json_encode($outp);*/
?>
