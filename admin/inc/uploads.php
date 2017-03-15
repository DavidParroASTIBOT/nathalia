<?php
require_once("./funciones.inc.php");
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{

	if(isset($_GET["delete"]) && $_GET["delete"] == true){
		$file = $_REQUEST['filename'];
		if(file_exists('../uploads/'.$_REQUEST['album'].'/'.$file))
		{
			unlink('../uploads/'.$_REQUEST['album'].'/'.$file);
			borrarImagen($_REQUEST['album'],$file);
			echo json_encode(array("res" => true));
		}
		else
		{
			echo json_encode(array("res" => false));
		}
	}else{
		$file = $_FILES["file"]["name"];
		if(!is_dir("../uploads/".$_REQUEST['album']."/"))
			mkdir("../uploads/".$_REQUEST['album']."/", 0777);

			if($file && move_uploaded_file($_FILES["file"]["tmp_name"], "../uploads/".$_REQUEST['album']."/".$file))
			{
				addImagen($_REQUEST['album'],$file );
			}
	}
}
?>
