<?php
require_once('../clases/Conexion.php');
$instancia = Conexion::dameInstancia();
$c=$instancia->dameConexion();

mysqli_set_charset($c, "utf8");
	if ($c->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $c->connect_errno . ") " . $c->connect_error;
	}

function addImagen($album,$name){
	GLOBAL $c;
	$sql="insert into foto(id_album,nombre) VALUES('".$album."','".$name."')";
	if(mysqli_query($c, $sql)){
		return true;
	}else{
		return false;
	}
}

function borrarImagen($album,$name){
	GLOBAL $c;
	$sql="delete from imagenes where imagen_name='".$name."' and album_id='".$album."'";
	$res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
}


function getTiposAlbum(){
  GLOBAL $c;
  $sql="SELECT `id`,`descripcion` FROM `tipo_album-seccion`;";
  $res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
function getUsuarios(){
  GLOBAL $c;
  $sql="SELECT `id`,`nombre` FROM `usuario`;";
  $res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
function getNomAlbum(){
  GLOBAL $c;
  $sql="SELECT `id`,`nombre` FROM `album`;";
  $res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
function getNombreAlbum($id){
  GLOBAL $c;
  $sql="SELECT `nombre` FROM `album` WHERE `id`=".$id.";";
  $res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
function insertarPortada($id,$data){
	GLOBAL $c;
	$sql="UPDATE `album` SET `portada` = '".$c->real_escape_string($data)."' WHERE `album`.`id` ='".$id."'";
	if($c->query($sql)){
		return true;
	}else{
		return false;
	}

}
?>
