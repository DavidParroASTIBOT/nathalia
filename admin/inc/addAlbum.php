<?php
  require_once('../../clases/Conexion.php');
  if(!is_dir("../../uploads/".$_REQUEST['nombreAlb']."/")){
    mkdir("../../uploads/".$_REQUEST['nombreAlb']."/", 0777);
  }
  $nombreAlb=$_REQUEST['nombreAlb'];
  $idUser=$_REQUEST['idUser'];
  $tipoAlb=$_REQUEST['tipoAlb'];
  if(empty($nombreAlb)||empty($idUser)||empty($tipoAlb)){
    echo 0;
  }else{
    $instancia = Conexion::dameInstancia();
		$c=$instancia->dameConexion();
    $misql="INSERT INTO `album` (`id`,`nombre`,`id_usuario`,`tipo_album`,`ubicacion`) VALUES(NULL,'".$nombreAlb."',".$idUser.",".$tipoAlb.",'./uploads/".$_REQUEST['nombreAlb']."/');";
    echo $resultado = mysqli_query($c, $misql);
  }
?>
