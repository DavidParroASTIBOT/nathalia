<!DOCTYPE html>
<html id="volver">
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="./favicon.png" type="image/png" />
    <link rel="stylesheet" href="./css/normalize.css" type="text/css">
    <link rel="stylesheet" href="./css/main.css" type="text/css">
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/slider.js"></script>
    <script src="./js/anclas.js"></script>
    <script src="https://use.fontawesome.com/01dd6c6b33.js"></script>

    <title>Fotografía Nathalia Dias</title>
  </head>
  <body>
    <header>
      <div class="menu">
        <ul id="menu">
          <li><a href="#slider">INICIO</a></li>
          <li><a href="#secciones">SECCIONES</a></li>
          <li><a href="./inc/blog.php">ÁLBUMES</a></li>
          <li><img class='logo' src="./img/logo2.png" alt="logo"></li>
          <li><a href="#anclaSobremi">SOBRE MI</a></li>
          <li><a href="#contacto">CONTACTO</a></li>
          <li><a href="#anclaUbicacion">UBICACIÓN</a></li>
        </ul>
        <a href="./inc/login.php">ACCESO CLIENTES</a>
      </div>
      <button type="button" name="menumobile" id="bmobile"><i class="fa fa-bars" aria-hidden="true"></i></button>
      <ul id="mmobile">
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>INICIO</a></li>
        <li><a href="#secciones"><i class="fa fa-th" aria-hidden="true"></i>SECCIONES</a></li>
        <li><a href="#blog"><i class="fa fa-picture-o" aria-hidden="true"></i>ÁLBUMES</a></li>
        <li><a href="#sobremi"><i class="fa fa-user-circle-o" aria-hidden="true"></i>SOBRE MI</a></li>
        <li><a href="#gmap"><i class="fa fa-map-marker" aria-hidden="true"></i>UBICACIÓN</a></li>
        <li><a href="#contacto"><i class="fa fa-phone" aria-hidden="true"></i>CONTACTO</a></li>
      </ul>
      <div id="slider"></div>
    </header>
    <div class="cuerpo">
      <div class="linea"><p><span></span></p></div>
      <div id="secciones">
        <h1>Secciones</h1>
        <div class="contPort">
          <a href="./inc/bebes.php">
            <div class="portOpa">
              <img src="./img/bebe.png" alt="bebes">
              <p>bautizos y Bebés</p>
            </div>
          </a>
          <a href="./inc/comuniones.php">
            <div class="portOpa">
              <img src="./img/angel2.png" alt="comuniones">
              <p>Comuniones e infantil</p>
            </div>
          </a>
          <a href="./inc/bodas.php">
            <div class="portOpa">
              <img src="./img/photos.png" alt="bodas">
              <p>Preboda, Bodas y postboda</p>
            </div>
          </a>
          <a href="./inc/premama.php">
            <div class="portOpa">
              <img src="./img/pregnant.png" alt="más">
              <p>Premamá</p>
            </div>
          </a>
          <a href="./inc/familia.php">
            <div class="portOpa">
              <img src="./img/family.png" alt="más">
              <p>Familia</p>
            </div>
          </a>
          <a href="./inc/otros.php">
            <div class="portOpa">
              <img src="./img/add-heart.png" alt="más">
              <p>Más</p>
            </div>
          </a>
        </div>
        <div class="imgSec">
          <img class='imgPort' alt='bebe' src='./img/bebes/portada-seccion.jpg'>
          <img class='imgPort' alt='comunion' src='./img/comuniones/portada-seccion.jpg'>
          <img class='imgPort' alt='boda' src='./img/bodas/portada-seccion-min.jpg'>
          <img class='imgPort' alt='mas' src='./img/premama/portada-seccion.jpg'>
          <img class='imgPort' alt='mas' src='./img/mas/portada-seccion.jpg'>
          <img class='imgPort' alt='mas' src='./img/mas/portada-seccion.jpg'>
        </div>
      </div>
      <div id="sobremi">
        <div class="linea"><p><span></span></p></div>
        <h1 id="anclaSobremi">Sobre Mi</h1>
        <div class="imgHere">
          <img src="./img/retrato.jpg" alt="">
          <p>
          Desde muy niña he sido una apasionada de la fotografía. Sin duda alguna el amor mueve al
          mundo y es lo que me empuja a levantarme cada día. Amo esta Profesión. Para mí la fotografía
          siempre ha sido la magia que me permite hacer de lo cotidiano algo extraordinario. Un Arte.
          Comencé haciendo fotos costumbristas en mis viajes otra de mis grandes pasiones, y un buen
          día por fin gracias al apoyos de los míos (os amo) me lancé a la piscina.<br><br>
          La fotografía me hace sentir única, tan única y especial como quiero que os sintáis vosotros con
          vuestros reportajes.<br><br>
          Me gustaría conoceros, dedicaros tiempo. Quiero que me contagiéis de la ilusión que estáis
          viviendo y que os motiva a buscar un fotógrafo para inmortalizar ese momento tan especial en
          vuestras vidas.<br><br>
          Quiero que al volver a ver mis fotografías al cabo del tiempo, recordéis todas esas sensaciones
          tan maravillosas que vivisteis.
          Si has llegado hasta aquí quiero darte las gracias por visitarme y querer conocerme un poquito
          más. <br><br>
          Si quieres conocerme no dudes en contactar conmigo que os estaré esperando.<br><br>
          Un saludo <p id='firma'>Nathalia Dias</p>
          </p>
        </div>
      </div>
      <div class="linea"><p><span></span></p></div>

      <div class='contacto' id='contacto'>
        <h1>CONTACTO</h1>
        <img class='logo2' alt="Logo" src="./img/logo2.png">
        <div class="formu">
          <div class="info">
              <div class="centrado">
                <p>Estamos deseando escucharte</p>
                <p>Este es nuestro mail:<strong> info@ndcfotografia.com</strong></p>
                <p>También te atendemos en el teléfono <br><i class="fa fa-phone" aria-hidden="true"></i><strong> 606 688 746</strong></p>
                <br>

              </div>

          </div>
          <div class="formContacto">
            <form action='sendEmail.php' >
              <fieldset class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" required class="form-control" name='email' id="exampleInputEmail1" placeholder="ejemplo@ejemplo.com">
              </fieldset>
              <fieldset class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" name='asunto' class="form-control" id="asunto" placeholder="Asunto">
              </fieldset>
              <fieldset class="form-group">
                <label for="exampleTextarea">¿Que quiere contarme?</label>
                <textarea class="form-control" name='descripcion' id="exampleTextarea" rows="3"></textarea>
              </fieldset>
              <button type="submit" class="btn enviar">Enviar</button>
            </form>
          </div>
        </div>
        <div class="rrss">
          <ul>
            <li><a href='http://www.facebook.com'><img id="fb" src="./img/face2.png" alt=""></a></li>
            <li><a href='http://www.twitter.com'><img id="tw" src="./img/twitter2.png" alt=""></a></li>
            <li><a href='http://www.linkedin.com'><img id="in" src="./img/link2.png" alt=""></a></li>
          </ul>
        </div>
        <div id="gmap" class="gmap">
          <div>
            <div class="linea"><p><span></span></p></div>
            <h1 id="anclaUbicacion">Ubicación</h1>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973577.5475676614!2d-6.609159370391216!3d41.41244726324494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd47728c08c66e93%3A0xb3ff92d41ca26bef!2sValladolid!5e0!3m2!1ses!2ses!4v1489050544683" width="800" height="600" frameborder="0" style="border:0" allowfullscreen>
            <div>
            </div>
          </iframe>
          <!--<div class="linea"><p><span></span></p></div>-->
        </div>
        <div class="linea"><p><span></span></p></div>
      </div>
    </div>
    <footer>
      <p><img class='cr' src='img/cr.png'>Nathalia Dias Campos - Todos los derechos reservados - <a href='./inc/cookies.html'>Política de cookies</a> - <a href='./inc/avisoLegal.html'>Aviso Legal</a></p>
    </footer>
    <a href='#' class='subir'><img src="img/flecha.png" alt="flecha"></a>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#bmobile").click(function(){
          $("#mmobile").toggleClass("mostrar");
        });
      });
    </script>
  </body>
</html>
