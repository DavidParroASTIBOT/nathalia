<?php

$DB_HOST = 'localhost';
$DB_NAME = 'nathalia';
$DB_USER = 'root';
$DB_PWD = '';

$db_con = new mysqli($DB_HOST,$DB_USER,$DB_PWD,$DB_NAME);
mysqli_set_charset($db_con, "utf8");
	if ($db_con->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $db_con->connect_errno . ") " . $db_con->connect_error;
	}

function addImagen($album,$name){
	GLOBAL $db_con;
	$sql="insert into foto(id_album,nombre) VALUES('".$album."','".$name."')";
	//echo $sql;
	if(mysqli_query($db_con, $sql)){
		return true;
	}else{
		return false;
	}
}

function borrarImagen($album,$name){
	GLOBAL $db_con;
	$sql="delete from imagenes where imagen_name='".$name."' and album_id='".$album."'";
	//echo $sql;
	$res = mysqli_query($db_con, $sql) or die(mysqli_error($db_con).$sql);
}


function getTiposAlbum(){
  GLOBAL $db_con;
  $sql="SELECT `id`,`descripcion` FROM `tipo_album-seccion`;";
  $res = mysqli_query($db_con, $sql) or die(mysqli_error($db_con).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
function getUsuarios(){
  GLOBAL $db_con;
  $sql="SELECT `id`,`nombre` FROM `usuario`;";
  $res = mysqli_query($db_con, $sql) or die(mysqli_error($db_con).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
function getNomAlbum(){
  GLOBAL $db_con;
  $sql="SELECT `id`,`nombre` FROM `album`;";
  $res = mysqli_query($db_con, $sql) or die(mysqli_error($db_con).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
function getNombreAlbum($id){
  GLOBAL $db_con;
  $sql="SELECT `nombre` FROM `album` WHERE `id`=".$id.";";
  $res = mysqli_query($db_con, $sql) or die(mysqli_error($db_con).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
function insertarPortada($id,$data){
	GLOBAL $db_con;
	$sql="UPDATE `album` SET `portada` = '".$db_con->real_escape_string($data)."' WHERE `album`.`id` ='".$id."'";
	if($db_con->query($sql)){
		return true;
	}else{
		return false;
	}

}
?>
