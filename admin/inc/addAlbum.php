<?php

  /*$dir_subida = './uploads/portadas/';
  $fichero_subido = $dir_subida . basename($_FILES['imagen']['name']);
  if (move_uploaded_file($_FILES['imagen']['tmp_name'], $dir_subida.$_FILES['imagen']['name'])){
     echo "El archivo ha sido cargado correctamente.";
  }else{
     echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
  }
  $data=file_get_contents($fichero_subido);*/
  if(!is_dir("../../uploads/".$_REQUEST['nombreAlb']."/")){
    mkdir("../../uploads/".$_REQUEST['nombreAlb']."/", 0777);
  }
  $nombreAlb=$_REQUEST['nombreAlb'];
  $idUser=$_REQUEST['idUser'];
  $tipoAlb=$_REQUEST['tipoAlb'];
  if(empty($nombreAlb)||empty($idUser)||empty($tipoAlb)){
    echo 0;
  }else{
    $conexion  = mysqli_connect('localhost','root','','nathalia');
    mysqli_set_charset ($conexion, "utf8" );
    $misql="INSERT INTO `album` (`id`,`nombre`,`id_usuario`,`tipo_album`,`ubicacion`) VALUES(NULL,'".$nombreAlb."',".$idUser.",".$tipoAlb.",'./uploads/".$_REQUEST['nombreAlb']."/');";
    echo $resultado = mysqli_query($conexion, $misql);
  }
?>
