<?php
    require_once("../inc/funciones.inc.php");
    require_once("./inc/funciones.inc.php");
    require_once('../clases/Conexion.php');

    iniciarSesion();
    crearNombreIdSesion();
    if($_SESSION['tipo']!=1){
      header("Location: ../inc/login.php");
    }
    $tiposAlbum=getTiposAlbum();
    $usuarios=getUsuarios();
    $nombresAlbum=getNomAlbum();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../favicon.png" type="image/png" />
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="./css/materialize.css"  media="screen,projection"/>
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="./css/admin.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="./dropzone/downloads/css/dropzone.css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="./js/funciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="./js/dropzone.js"></script>
    <script src="https://use.fontawesome.com/01dd6c6b33.js"></script>
    <title>Administración</title>
    <!--<script src="./js/admin.js"></script>-->
    <script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
  	<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
  </head>
  <body>
    <header>
      <div class="menu3">
        <ul>
          <li><a href="../index.php">INICIO</a></li>
          <li><img class='logo' src="../img/logo2.png" alt="logo"></li>
          <?php if(isset($_SESSION['id'])){ ?>
              <li><a href="../inc/finalizarsesion.php">DESCONECTARSE</a></li>
          <?php } ?>
        </ul>
      </div>
    </header>
    <div class="cuerpo">
      <div class="gUsuarios">
        <h1>Gestión de usuarios</h1>
        <form id="gUsers" action="#" method="post">
          <div>
            <label for="user">Nombre:</label><input type="text" id="user" name="nombre">
          </div>
          <div>
            <label for="pass">Contraseña:</label><input type="text" id="pass" name="pass">
          </div>
        </form>
        <div class="botonesCen">
          <button id="addUser" type="button">Añadir</button><button id="delUser" type="button">Borrar</button>
        </div>
      </div>
      <div class="gAlbumes">
        <h1>Gestión álbumes</h1>
        <div class="botonesAlbum">
          <button id="addAlbum" type="button" name="button">Crear álbum</button>
          <button id="delAlbum" type="button" name="button">Borrar álbum</button>
        </div>
        <form class="newAlbum" action="#" method="post" enctype="multipart/form-data">
          <select id='nombreAlbum'>
            <option value="0">-Selecciona el tipo de álbum</option>
            <?php for($c=0;$c<sizeof($tiposAlbum);$c++){
                echo "<option value='".$tiposAlbum[$c]['id']."'>".$tiposAlbum[$c]['descripcion']."</option>";
              }
            ?>
          </select>
          <select id='nombreUsuario'>
            <option value="0">-Selecciona al usuario</option>
            <?php for($c=0;$c<sizeof($usuarios);$c++){
                echo "<option value='".$usuarios[$c]['id']."'>".$usuarios[$c]['nombre']."</option>";
              }
            ?>
          </select>
          <label  for="nomAlb">Nombre del nuevo álbum: <input type="text" id="nomAlb"></label>
          <button type="button" id="albumAdd">Crear</button>
        </form>
        <form class="delAlbum" action="#" method="post">
          <select id='album2' name="album2">
            <option value="0">-Selecciona el álbum</option>
            <?php
            for($c=0;$c<sizeof($nombresAlbum);$c++){
                echo "<option value='".$nombresAlbum[$c]['id']."'>".$nombresAlbum[$c]['nombre']."</option>";
              }
            ?>
          </select>
        </form>
        <div class="botonesAlbum">
          <button id="addPor" type="button" name="button">Añadir portada</button>
          <button id="addImg" type="button" name="button">Añadir imágenes</button>
        </div>
        <select id='albumes'>
          <option value="0">-Selecciona el álbum</option>
          <?php for($c=0;$c<sizeof($nombresAlbum);$c++){
              echo "<option value='".$nombresAlbum[$c]['id']."'>".$nombresAlbum[$c]['nombre']."</option>";
            }
          ?>
        </select>
        <div class="subirPortada">
          <form action="./inc/addPortada.php" method="post" enctype="multipart/form-data" id="subPortada">
            <select id='album' name="album">
              <option value="0">-Selecciona el álbum</option>
              <?php
              for($c=0;$c<sizeof($nombresAlbum);$c++){
                  echo "<option value='".$nombresAlbum[$c]['id']."'>".$nombresAlbum[$c]['nombre']."</option>";
                }
              ?>
            </select>
            <label for="imgAlb">Portada del álbum: <input type="file" name="portada" id="imgAlb"></label>
            <input type="submit" value="Subir portada">
          </form>
        </div>
        <form action="./inc/upload.php" enctype="multipart/form-data" class="dropzone" id="image-upload">

  			</form>
        </div>
      </div>
    </div>
    <footer>
      <p><img class='cr' src='../img/cr.png'>Nathalia Dias Campos - Todos los derechos reservados - <a href='../inc/cookies.html'>Política de cookies</a> - <a href='../inc/avisoLegal.html'>Aviso Legal</a></p>
    </footer>
  </body>
  <script type="text/javascript" src="./js/materialize.min.js"></script>
  <script type="text/javascript">
  	Dropzone.options.imageUpload = {
          maxFilesize:50,
          acceptedFiles: ".jpeg,.jpg,.png,.gif"
      };
  </script>

</html>
