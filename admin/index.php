<?php
    require_once("../inc/funciones.inc.php");
    require_once("./inc/funciones.inc.php");
    require_once("../clases/Conexion.php");

    iniciarSesion();
    crearNombreIdSesion();

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
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="./css/admin.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="./dropzone/downloads/css/dropzone.css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="./js/funciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="./js/dropzone.js"></script>
    <script src="https://use.fontawesome.com/01dd6c6b33.js"></script>
    <title>Administración</title>
    <script src="./js/admin.js"></script>
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
        <button id="addAlbum" type="button" name="button">Crear álbum</button>
        <button id="addImg" type="button" name="button">Añadir imágenes</button>
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
          <label  for="nomAlb">Nombre del nuevo álbum: </label><input type="text" id="nomAlb">
          <button type="button" id="albumAdd">Crear</button>
        </form>
        <div class="subirPortada">
          <label for="imgAlb">Portada del álbum:</label><input type="file" name="portada" id="imgAlb">
          <button type="button" id="portadaAlb">Subir portada</button>
        </div>
        <select id='albumes'>
          <option value="0">-Selecciona el álbum</option>
          <?php for($c=0;$c<sizeof($nombresAlbum);$c++){
              echo "<option value='".$nombresAlbum[$c]['id']."'>".$nombresAlbum[$c]['nombre']."</option>";
            }
          ?>
        </select>
        <div id="dropzone" class="dropzone"></div>
        </div>
      </div>
    </div>
    <footer>
      <p><img class='cr' src='../img/cr.png'>Nathalia Dias Campos - Todos los derechos reservados - <a href='../inc/cookies.html'>Política de cookies</a> - <a href='../inc/avisoLegal.html'>Aviso Legal</a></p>
    </footer>
  </body>
</html>
