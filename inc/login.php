<?php
    require("./funciones.inc.php");
    require_once("../clases/Conexion.php");

    iniciarSesion();
    if(isset($_SESSION['id'])){
      $form=false;
      if(comprobarUsuario($_SESSION['pass'])){
        if($_SESSION['tipo']==1){
          header("Location: ../admin/index.php");
        }
        $form=false;
      }else{
        $form=true;
      }
    }else{
      if(isset($_POST['enviar'])){
        if(comprobarUsuario($_POST['pass'])){
          if($_SESSION['tipo']==1){
            header("Location: ../admin/index.php");
          }
          $form=false;
        }else{
          $form=true;
        }
      }else{
        $form=true;
      }
    }
    crearNombreIdSesion();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../favicon.png" type="image/png" />
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="./css/admin.css" type="text/css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/01dd6c6b33.js"></script>
    <title>Acceso</title>
  </head>
  <body>
    <header>
      <div class="menu3">
        <ul>
          <li><a href="../index.php">INICIO</a></li>
          <li><img class='logo' src="../img/logo2.png" alt="logo"></li>
          <?php if(isset($_SESSION['id'])){ ?>
              <li><a href="./finalizarsesion.php">DESCONECTARSE</a></li>
          <?php } ?>
        </ul>
      </div>
    </header>
    <div class="cuerpo2">
      <?php if($form){ ?>
      <form class='acceso' action="#" method="post">
        <label for="pass">Contraseña: </label><input type="password" name="pass" id="pass" />
        <input type="submit" name="enviar" value="Acceder">
      </form>
      <?php } else { ?>
        <h1>Bienvenid@: <?php echo $_SESSION['nombre']; ?></h1>
          <?php if(comprobarAlbum($_SESSION['id'])){ ?>
          <p>Ante todo, gracias por confiar en nosotros y contratar nuestros servicios.A continuación, podrá ver todas las fotos de su reportaje:</p>
            <?php
              $albumes=mostrarAlbumes($_SESSION['id']);
              $ubicacion=$albumes[0][5];
              $idAlbum=$albumes[0][0];
              $fotos=mostrarFotos($idAlbum);
              echo "<div class='portadas'>";
              for($i=0;$i<sizeof($fotos);$i++){
                echo '<img src="'.".".$ubicacion.$fotos[$i]['nombre'].'" alt="'.$fotos[$i]['nombre'].'">';
              }
              echo "</div>";
            ?>
          <?php  } else { ?>
            <h1>Aun no tienes álbumes</h1>
          <?php }  ?>
      <?php } ?>
    </div>
    <footer>
      <p><img class='cr' src='../img/cr.png'>Nathalia Dias Campos - Todos los derechos reservados - <a href='../inc/cookies.html'>Política de cookies</a> - <a href='../inc/avisoLegal.html'>Aviso Legal</a></p>
    </footer>
  </body>
</html>
