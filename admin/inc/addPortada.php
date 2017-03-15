<?php
  require_once("./funciones.inc.php");
  //echo $_POST['album'];
  //echo "<br>".$_FILES['portada']['name'];
  $path = $_FILES['portada']['name'];
  $ext = pathinfo($path, PATHINFO_EXTENSION);
  $nombreAlbum=getNombreAlbum($_POST['album']);
  //echo "<br>".$nombreAlbum[0]['nombre'];
  $dir_subida = '../../uploads/'.$nombreAlbum[0]['nombre'].'/';
  //$fichero_subido = $dir_subida . basename($_FILES['portada']['name']);
  $fichero_subido = $dir_subida ."portada.".$ext;
  if (move_uploaded_file($_FILES['portada']['tmp_name'], $dir_subida."portada.".$ext)){
     echo "El archivo ha sido cargado correctamente.";
  }else{
     echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
  }
  $data=file_get_contents($fichero_subido);
  insertarPortada($_POST['album'],$data);
  header("Location: ../index.php");
?>
