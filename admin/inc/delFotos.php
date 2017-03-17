<?php
  require_once('../../clases/Conexion.php');
  $instancia = Conexion::dameInstancia();
  $conexion=$instancia->dameConexion();
    $misql="SELECT `nombre` from `foto` WHERE `id_album`=".$_REQUEST['idAlb'].";";
    $res = mysqli_query($conexion, $misql) or die(mysqli_error($conexion).$misql);
    $fm=array();
    while($f= mysqli_fetch_assoc($res)){
      $fm[]=$f;
    }
    $borradas=0;
    for($i=0;$i<sizeof($fm);$i++){
      if(unlink("../../uploads/".$_REQUEST['nomAlb']."/".$fm[$i]['nombre'])){
        $borradas++;
      }
    }
    if($borradas>0){
      $misql="delete from `foto` WHERE `id_album`=".$_REQUEST['idAlb'].";";
      if(mysqli_query($conexion, $misql) or die(mysqli_error($conexion).$misql)){
        $misql="delete from `album` WHERE `id`=".$_REQUEST['idAlb'].";";
        if(mysqli_query($conexion, $misql) or die(mysqli_error($conexion).$misql)){
            if(rmdir("../../uploads/".$_REQUEST['nomAlb'])){
              echo true;
            }else{
              echo false;
            }
          } else {
            echo false;
          }
      }else{
        echo false;
      }
    }else{
      echo false;
    }
?>
