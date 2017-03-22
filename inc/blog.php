<?php
  require_once("./funciones.inc.php");
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../favicon.png" type="image/png" />
    <link rel="stylesheet" href="../css/normalize.css" type="text/css">
    <link rel="stylesheet" href="../css/main.css" type="text/css">
    <link rel="stylesheet" href="../css/blog.css" type="text/css">
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/anclas.js"></script>
    <script src="https://use.fontawesome.com/01dd6c6b33.js"></script>
    <script type="text/javascript" src="../js/freewall.js"></script>
    <title>Blog</title>
  </head>
  <body>
    <header>
      <div class="menu">
        <ul id="menu">
          <li><a href="../index.php">Volver</a></li>
          <li><img class='logo' src="../img/logo2.png" alt="logo"></li>
        </ul>
      </div>
    </header>
    <div class="cuerpoblog">
      <?php
        $id=idUser("blog")['id'];
        $albumes=mostrarAlbumes($id);
        echo "<div id='freewall'>";
        for ($i=0; $i < sizeof($albumes); $i++) {
          echo '<div class="portadas2"><a href="./verAlbum.php?id='.$albumes[$i][0].'"><div class="imgDesc"><p>'.$albumes[$i][1].'</p></div></a><img id="'.$albumes[$i][0].'" class="portadasBlog" src=".'.$albumes[$i][5].'/portada.jpg" alt="o"></div>';
        }
        echo "</div>";
      ?>
    </div>
  </body>
  <script type="text/javascript">
  var wall = new Freewall("#freewall");
  $(document).ready(function(){

    wall.reset({
      selector: '.portadas2',
      animate: true,
      cellW: 150,
      cellH: 'auto',
      onResize: function() {
        wall.fitWidth();
      }
    });
    wall.fitWidth();


  });
  </script>
</html>
