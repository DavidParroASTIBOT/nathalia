<?php
	require("../clases/Conexion.php");
	require("./funciones.inc.php");
	//header("Content-type: image/gif");
	/*$instancia = Conexion::dameInstancia();
	$c=$instancia->dameConexion();
	iniciarSesion();
	$r=$c->query("SELECT portada from album where id=".$_GET['id']."");
	while($fila=$r->fetch_assoc()){
		echo $fila['portada'];
	}*/
	echo '<img src=".'.$_GET['foto'].'" alt="cargando..." style="height:100%;width:auto;margin:auto;display:block;box-shadow:0 0 20px rgb(0,0,0);">';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="../js/jquery-3.1.1.min.js"></script>
		<link rel="icon" href="../favicon.png" type="image/png" />
		<title>NDC Fotografía</title>
		<style>
			@font-face {
				font-family: "cuerpo";
			  src: url('../fonts/Exo/Exo-Regular.ttf') format("truetype");
			}
			body{background-image: url("../img/patron.jpg");}
			label{position: absolute;top: 0;left: 0;font-family: cuerpo;}
		</style>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#sel").on('click', function(){
				if($("#sel").is(':checked')){
					alert("Seleccionada");
				}else{
					alert("Deseleccionada");
				}
			});
		});
		</script>
	</head>
	<body>
		<?php echo '<label for="sel">Seleccionar foto:<input id="sel" type="checkbox" name="seleccionar" value="si"/></label>'; ?>
	</body>
</html>
