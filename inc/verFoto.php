<?php
	require("../clases/Conexion.php");
	require("./funciones.inc.php");
	header("Content-type: image/gif");
	$instancia = Conexion::dameInstancia();
	$c=$instancia->dameConexion();
	iniciarSesion();
	$r=$c->query("SELECT portada from album where id=".$_GET['id']."");
	while($fila=$r->fetch_assoc()){
		echo $fila['portada'];
	}
?>
