<?php
require_once('../clases/Conexion.php');
$instancia = Conexion::dameInstancia();
$c=$instancia->dameConexion();
function iniciarSesion(){
	session_cache_limiter();
    session_name('ndc');
    session_start();
}

function crearNombreIdSesion() {
	$sn=session_name();
	$si=session_id();
	$_SESSION['nombreId'] = $sn."=". $si;
}
function ubicacionAlbum($id){
	GLOBAL $c;
	$sql="SELECT `ubicacion` FROM `album` WHERE `id`=".$id.";";
  $res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
  /*$fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }*/
	$fm= mysqli_fetch_assoc($res);
  return $fm;
}
function nombreAlbum($id){
	GLOBAL $c;
	$sql="SELECT `nombre` FROM `album` WHERE `id`=".$id.";";
  $res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
  /*$fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }*/
	$fm= mysqli_fetch_assoc($res);
  return $fm;
}
function idUser($nombre){
	GLOBAL $c;
	$sql="SELECT `id` FROM `usuario` WHERE `nombre`='".$nombre."';";
	$res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
	/*$fm=array();
	while($f= mysqli_fetch_assoc($res)){
		$fm[]=$f;
	}*/
	$fm=mysqli_fetch_assoc($res);
	return $fm;
}
function esSeleccionada($id){
	GLOBAL $c;
	$stmt=$c->prepare("SELECT `seleccionada` FROM `foto` WHERE id=?");
	$stmt->bind_param('i', $id);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($seleccionada);
	$stmt->fetch();
	if($seleccionada==1){
		return 1;
	}	else {
		return 0;
	}
}

function comprobarUsuario($pass){
	GLOBAL $c;
	$stmt=$c->prepare("SELECT id,nombre,pass,tipo FROM `usuario` WHERE pass=?");
	$stmt->bind_param('s', $pass);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($id,$nombre,$pass,$tipo);
	if($stmt->num_rows==1){
		  $stmt->fetch();
		 	$_SESSION['id']=$id;
			$_SESSION['nombre']=$nombre;
			$_SESSION['pass']=$pass;
			$_SESSION['tipo']=$tipo;
			 return true;
	 }else{
		 return false;
	 }
	//return true;
}
function comprobarAlbum($usuario){
	GLOBAL $c;
	$stmt=$c->prepare("SELECT * FROM `album` WHERE id_usuario=?");
	$stmt->bind_param('s', $usuario);
	$stmt->execute();
	$stmt->store_result();
	if($stmt->num_rows>0){
		return true;
	}else{
		return false;
	}
}
function mostrarAlbumes($idUser){
	GLOBAL $c;
	$stmt=$c->prepare("SELECT * FROM `album` WHERE id_usuario=?");
	$stmt->bind_param('s', $idUser);
	$stmt->execute();
	$stmt->store_result();
	$stmt->bind_result($id,$nombre,$id_usuario,$tipo_album,$portada,$ubicacion);
	$resultado = array();
	while($stmt->fetch()){
		$bindResults=array($id,$nombre,$id_usuario,$tipo_album,$portada,$ubicacion);
		array_push($resultado,$bindResults);
	}
	//print_r($resultado);
	return $resultado;
}
function usuario($id){
	global $c;
	$stmt=$c->prepare("SELECT * FROM `usuario` WHERE pass=?");
	$stmt->bind_param('s', $pass);
	$stmt->execute();
	$stmt->store_result();
}

function validarPass($pass){
	$expresionReg='/^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{4,8}$/i';
	if (preg_match($expresionReg, $pass)) {
		return true;
	} else{
		return false;
	}
}
function validarCorreo($correo){
	$expresionReg='/^[a-zA-Z0-9]+([[a-zA-Z0-9\.]+)*@([_a-z0-9\-]+\.)+([a-z])+$/i';
	if (preg_match($expresionReg, $correo)) {
		return true;
	} else{
		return false;
	}
}
function generaPass(){
	//Se define una cadena de caractares.
	$cadena = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890";
	//Obtenemos la longitud de la cadena de caracteres
	$longitudCadena=strlen($cadena);
	//Se define la variable que va a contener la contraseña
	$pass = "";
	//Se define la longitud de la contraseña
	$longitudPass=8;
	//Creamos la contraseña
	for($i=1 ; $i<=$longitudPass ; $i++){
		//Definimos numero aleatorio entre 0 y la longitud de la cadena de caracteres-1
		$pos=rand(0,$longitudCadena-1);
		$pass .= substr($cadena,$pos,1);
	}
	return $pass;
}
function mostrarFotos($idAlbum){
	GLOBAL $c;
	$sql="SELECT `nombre`,`id` FROM `foto` WHERE `id_album`=".$idAlbum.";";
  $res = mysqli_query($c, $sql) or die(mysqli_error($c).$sql);
  $fm=array();
  while($f= mysqli_fetch_assoc($res)){
    $fm[]=$f;
  }
  return $fm;
}
?>
