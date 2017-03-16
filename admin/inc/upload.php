<?php
  require_once("./funciones.inc.php");
  $id_album=$_REQUEST['id_album'];
  $nombre_album=getNombreAlbum($id_album);
  $uploadDir = '../../uploads/'.$nombre_album[0]['nombre'];
  if(!empty($_FILES)){
     echo "subida";
     $tmpFile = $_FILES['file']['tmp_name'];
     $filename = $uploadDir.'/'. $_FILES['file']['name'];
     if(move_uploaded_file($tmpFile,$filename)){
       if(addImagen($_REQUEST['id_album'],$_FILES['file']['name'])){
         echo "Metido en la BBDD";
       }else{
         echo "Error al meter en la BBDD";
       }
     }else{
       echo "Error al subir";
     }
  }else{
    echo "no subida";
  }
?>
