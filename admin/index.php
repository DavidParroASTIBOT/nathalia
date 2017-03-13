<?php
    require("../inc/funciones.inc.php");
    require_once("../clases/Conexion.php");

    iniciarSesion();
    crearNombreIdSesion();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../favicon.png" type="image/png" />
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../admin.css" type="text/css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="./js/funciones.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
    <script src="https://use.fontawesome.com/01dd6c6b33.js"></script>
    <title>Administración</title>
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
        <h1>Gesitón de usuarios</h1>
        <button id="addUser" type="button" name="button">Añadir</button><button id="delUser" type="button" name="button">Borrar</button>
      </div>
      <div class="gAlbumes">
        <h1>Gestión álbumes</h1>
      </div>
    </div>
    <footer>
      <p><img class='cr' src='../img/cr.png'>Nathalia Dias Campos - Todos los derechos reservados - <a href='../inc/cookies.html'>Política de cookies</a> - <a href='../inc/avisoLegal.html'>Aviso Legal</a></p>
    </footer>
  </body>
</html>
