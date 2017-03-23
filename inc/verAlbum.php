<?php
require("../clases/Conexion.php");
require("./funciones.inc.php");
$idAlbum=$_REQUEST['id'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../favicon.png" type="image/png" />
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" href="../css/carousel.css">
    <title><?php echo nombreAlbum($idAlbum)['nombre']; ?></title>
    <link rel="stylesheet" href="style/carousel.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../js/jquery.carousel-1.1.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.11/jquery.mousewheel.min.js"></script>
  </head>
  <body>
    <header>
      <div class="menu">
        <ul id="menu">
          <li><a href="./blog.php">Volver</a></li>
          <li><img class='logo' src="../img/logo2.png" alt="logo"></li>
        </ul>
      </div>
    </header>
    <div class="cuerpo2 cuerpoalbum">
      <section id="photostack-1" class="photostack photostack-start">
        <div class="carousel">
          <div class="slides">
          <?php
          $ubicacion=ubicacionAlbum($idAlbum)['ubicacion'];
          $ubicacion=".".$ubicacion;
          $fotos=mostrarFotos($idAlbum);
          for($i=0;$i<sizeof($fotos);$i++){
            echo '<div class="slideItem">';
            echo '<a href="#"><img id="'.$ubicacion.$fotos[$i]['nombre'].'" class="materialboxed responsive-img galeria lazy" src="'.$ubicacion.$fotos[$i]['nombre'].'" alt="'.$fotos[$i]['id'].'"></a>';
              echo '<div class="shadow">';
  	             echo '<div class="shadowLeft"></div>';
  	             echo '<div class="shadowMiddle"></div>';
  	             echo '<div class="shadowRight"></div>';
  	          echo '</div>';
            echo '</div>';
          }
         ?>
       </div>
     </div>
    </section>
    </div>
    <script type="text/javascript">
    $(document).ready(function(){
      $(".buttonNav").css("margin-top",$())
      $('.carousel').carousel({
        carouselWidth:720,
        carouselHeight:480,
        directionNav:true,
        shadow:false,
        buttonNav:'bullets',
        speed: 500,
        autoplayInterval: 5000,
        reflection:true,
        frontWidth: 720,
        frontHeight:480,
        /*hAlign: 'center',
        vAlign: 'center',
        hMargin: 0.4,
        vMargin: 0.2,
        frontWidth: 400,
        frontHeight: 300,
        carouselWidth: 1000,
        carouselHeight: 360,
        left: 0,
        right: 0,
        top: 0,
        bottom: 0,
        back<a href="http://www.jqueryscript.net/zoom/">Zoom</a>: 0.8,
        slidesPer<a href="http://www.jqueryscript.net/tags.php?/Scroll/">Scroll</a>: 5,
        speed: 500,
        buttonNav: 'none',
        directionNav: false,
        autoplay: true,
        autoplayInterval: 3000,
        pauseOnHover: true,
        mouse: true,
        shadow: false,
        reflection: false,
        reflectionHeight: 0.2,
        reflectionOpacity: 0.5,
        reflectionColor: '255,255,255',
        description: false,
        descriptionContainer: '.description',
        backOpacity: 1,
        before: function(carousel) {},
        after: function(carousel) {}*/
      });
    });
    </script>
  </body>
</html>
