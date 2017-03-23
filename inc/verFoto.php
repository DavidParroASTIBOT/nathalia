<?php
	require("../clases/Conexion.php");
	require("./funciones.inc.php");
	iniciarSesion();
	//header("Content-type: image/gif");
	/*$instancia = Conexion::dameInstancia();
	$c=$instancia->dameConexion();
	iniciarSesion();
	$r=$c->query("SELECT portada from album where id=".$_GET['id']."");
	while($fila=$r->fetch_assoc()){
		echo $fila['portada'];
	}*/
	//echo "<br>Sel: ".esSeleccionada($_GET['id']);
	echo '<img id="'.$_GET['id'].'" src=".'.$_GET['foto'].'" alt="cargando..." style="height:90%;width:auto;margin:2.5% auto;display:block;box-shadow:0 0 20px rgb(0,0,0);">';

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="../js/jquery-3.1.1.min.js"></script>
		<link rel="icon" href="../favicon.png" type="image/png" />
		<script src="../js/jquery-3.1.1.min.js"></script>
		<script src="https://use.fontawesome.com/01dd6c6b33.js"></script>
		<title>NDC Fotografía</title>
		<style>
			@font-face {
				font-family: "cuerpo";
			  src: url('../fonts/Exo/Exo-Regular.ttf') format("truetype");
			}
			body{background-image: url("../img/patron.jpg");}
			label{position: absolute;top: 50%;left: 15px;font-family: cuerpo;}
			input[type="checkbox"],label:hover{cursor: pointer;}
			button{position: absolute;top: 50%;right: 15px;font-family: cuerpo;}
		</style>
		<script type="text/javascript">
		$(document).ready(function(){
			$("#back").click (function () {
	        location.href = "./login.php";
	    });
		});
</script>
	</head>
	<body>
		<?php
		if(esSeleccionada($_GET['id'])){
			echo '<label for="sel"><i id="icon" class="fa fa-thumbs-o-down fa-5x" aria-hidden="true"></i><input id="sel" type="checkbox" name="seleccionar" value="si" checked/></label>';
			echo '<button id="back" type="button" name="button"><i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>Volver</button>';
		}else{
			echo '<label for="sel"><i id="icon" class="fa fa-thumbs-o-up fa-5x" aria-hidden="true"></i><input id="sel" type="checkbox" name="seleccionar" value="si"/></label>';
			echo '<button id="back" type="button" name="button"><i class="fa fa-arrow-circle-o-left fa-lg" aria-hidden="true"></i>Volver</button>';
		}

		?>
	</body>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#sel").on('click', function(){
			var idFoto=$("img").attr("id");
			if($("#sel").is(':checked')){
				console.log("Seleccionada: "+idFoto);
				$("#icon").removeClass("fa-thumbs-o-up");
				$("#icon").addClass("fa-thumbs-o-down");
				$.post("./updateSelected.php","idFoto="+idFoto+"&valor=1",function(consulta){
					console.log(consulta);
				});
			}else{
				$("#icon").removeClass("fa-thumbs-o-down");
				$("#icon").addClass("fa-thumbs-o-up");
				console.log("Deseleccionada: "+idFoto);
				$.post("./updateSelected.php","idFoto="+idFoto+"&valor=0",function(consulta){
					console.log(consulta);
				});
			}
		});
	});
	</script>
</html>
