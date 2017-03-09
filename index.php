<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="favicon.png" type="image/png" />
    <link rel="stylesheet" href="css/normalize.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://use.fontawesome.com/01dd6c6b33.js"></script>
    <title>Fotografía Nathalia Dias</title>
  </head>
  <body>
    <header>
      <div class="menu">
        <ul>
          <li><a href="#">INICIO</a></li>
          <li><a href="#secciones">SECCIONES</a></li>
          <li><a href="#blog">BLOG</a></li>
          <li><img class='logo' src="img/logo2.png" alt="logo"></li>
          <li><a href="#sobremi">SOBRE MI</a></li>
          <li><a href="#ubicacion">UBICACIÓN</a></li>
          <li><a href="#contacto">CONTACTO</a></li>
        </ul>
        <a href="#acceso">ACCESO CLIENTES</a>
      </div>
      <div id="slider"></div>
    </header>
    <div id="cuerpo">
      <div class="linea"><p><span></span></p></div>
      <div id="portafolio">
        <h1>Portafolio</h1>
        <div class="contPort">
          <div class="portOpa">
            <img src="img/bebe.png" alt="bebe">
            <p>Bebés y bautizos</p>
          </div>
          <div class="portOpa">
            <img src="img/comunion.png" alt="comuniones">
            <p>Comuniones</p>
          </div>
          <div class="portOpa">
            <img src="img/bodas.png" alt="bebe">
            <p>Bodas y Preboda</p>
          </div>
          <div class="portOpa">
            <img src="img/add-heart.png" alt="bebe">
            <p>Más</p>
          </div>
        </div>
        <div class="imgSec">
          <img class='imgPort' alt='bebe' src='img/bautizos/prueba.jpg'>
          <img class='imgPort' alt='bebe' src='img/comuniones/portada2.jpg'>
          <img class='imgPort' alt='bebe' src='img/boda/portada2.jpg'>
          <img class='imgPort' alt='bebe' src='img/otros/portada.jpg'>
        </div>
      </div>
      <div class="linea"><p><span></span></p></div>
      <div id="sobremi">
        <h1>Sobre Mi</h1>
        <div class="imgHere">
          <img src="img/slide_7.jpg" alt="">
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
      <div class="gmap">
        <div>
          <h1>Ubicación</h1>

        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973577.5475676614!2d-6.609159370391216!3d41.41244726324494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd47728c08c66e93%3A0xb3ff92d41ca26bef!2sValladolid!5e0!3m2!1ses!2ses!4v1489050544683" width="800" height="600" frameborder="0" style="border:0" allowfullscreen>
          <div>
          </div>
        </iframe>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 linea"><p><span></span></p></div>
      </div>
      <div class='contacto' id='contacto'>
        <h1>CONTACTO</h1>
        <img class='logo2' alt="Logo" src="img/logo2.png">
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
          <h2>Sígueme</h2>
          <ul>
            <li><a href='http://www.facebook.com'><img id="fb" src="img/face2.png" alt=""></a></li>
            <li><a href='http://www.twitter.com'><img id="tw" src="img/twitter2.png" alt=""></a></li>
            <li><a href='http://www.linkedin.com'><img id="in" src="img/link2.png" alt=""></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 linea">
                <p><span></span></p>
          </div>
      </div>
    </div>
    <footer>
    </footer>
    <a href='#' class='subir'><img src="img/flecha.png" alt="flecha"></a>
  </body>
</html>