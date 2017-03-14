<?php
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

function comprobarUsuario($pass){
	$instancia = Conexion::dameInstancia();
	$c=$instancia->dameConexion();
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
	$instancia = Conexion::dameInstancia();
	$c=$instancia->dameConexion();
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
	$instancia = Conexion::dameInstancia();
	$c=$instancia->dameConexion();
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
	return $resultado;
}
function usuario($id){
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
function mandarPass($correo,$pass){
	$mensaje="Ha solicitado cambiar su contraseña.\r".
	"El sistema le ha asignado una contraseña aleatoria, por favor cambiela nada más acceda a su cuenta de nuevo.\n".
	"La contraseña que le ha asignado el sistema es: ".$pass."\n".
	"\n\nUn saludo de la administración de Heroe del Teclado";
	$mensaje=wordwrap($mensaje,70,"\r\n");
	/*return mail($correo,'Heroe del Teclado--Recuperacion Contraseña',$mensaje);*/
		$mail = new PHPMailer();

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  											// Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = "heroetecladodaw@gmail.com";        // SMTP username
		$mail->Password = "galileo2017";                      // SMTP password
		$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 465;                                    // TCP port to connect to

		$mail->setFrom("heroetecladodaw@gmail.com", 'Heroe del Teclado');
		$mail->addAddress($correo);               // Name is optional


		$mail->Subject = 'Heroe del Teclado--Recuperar contraseña';
		$mail->Body    = $mensaje;
		$mail->AltBody = $mensaje;

		if(!$mail->send()) {
		    return $mail->ErrorInfo;
		} else {
		    return 1;
		}

}
?>
