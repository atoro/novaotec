<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Noticias Nova Otec</title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
  <link rel="stylesheet" type="text/css" media="all" href="css/slide.css">
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="css/responsive.css">
  <link rel="stylesheet" type="text/css" href="css/menu.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

  <!-- MENU ACORDEON -->
  <link rel="stylesheet" href="css/acordeon.css">
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="js/script.js"></script>

</head>

<body>
  <div class="contenido_logo">
    <div class="centro_logo">
      <div class="logo">
        <a href="index.php">
          <img src="imagenes/logo.jpg">
        </a>
      </div>
      <div class="redes">
        <a href="#"><img src="imagenes/twitter.jpg"></a>
        <a href="#"><img src="imagenes/facebook.jpg"></a>
      </div>
    </div>
  </div>

  <!-- NAV --> 
  <header>
    <div class="centro_header">
      <nav id="menu">
        <a href="#" class="nav-mobile" id="nav-mobile"></a>
        <ul>
          <li><a href="index.php">INICIO</a></li>
          <li><a href="asesoria.php">ASESORIA</a></li>
          <li><a href="cursos.php">CURSOS</a></li>
          <li><a href="biblioteca.php">BIBLIOTECA</a></li>
          <li><a href="clientes.php">CLIENTES</a></li>
          <li><a href="galeria.php">GALERIA</a></li>
          <li class="activo"><a href="noticias.php">NOTICIAS</a></li>
          <li><a href="contacto.php">CONTACTO</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <div class="contenedor_principal">

    <!-- CONTENIDO PRINCIPAL -->
    <section class="contenido">
      <div class="bloque">
        <div class="img_noticia">
          <img src="imagenes/noticias/1.jpg">
        </div>
        <div class="texto_noticia">
          <h2>Titulo de la Noticia</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
          <a href="detallenoticia.php">ver detalle</a>
        </div>
      </div>
      <div class="bloque">
        <div class="img_noticia">
          <img src="imagenes/noticias/1.jpg">
        </div>
        <div class="texto_noticia">
          <h2>Titulo de la Noticia</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
          <a href="detallenoticia.php">ver detalle</a>
        </div>
      </div>
      <div class="bloque">
        <div class="img_noticia">
          <img src="imagenes/noticias/1.jpg">
        </div>
        <div class="texto_noticia">
          <h2>Titulo de la Noticia</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
          <a href="detallenoticia.php">ver detalle</a>
        </div>
      </div>
      <!-- LINKS DE INTERES-->
      <div class="links">
        <div class="titulo">
          LINKS DE INTERES
        </div>
        <li><a href="http://www.corfo.cl" target="new">Corfo</a></li>
        <li><a href="http://www.sence.cl" target="new">Sence</a></li>
        <li><a href="http://www.emagenic.cl" target="new">Emagenic</a></li>
        <li><a href="http://www.google.cl" target="new">Google</a></li>
      </div>
    </section>

    <!-- CONTENIDO SECUNDARIO -->
    <section class="secundario">
      <div class="proximos_cursos">
        <div class="titulo_curso">
          PRÓXIMOS CURSOS
        </div>
        <!-- curso -->
        <div class="curso">
          <div class="imagen_curso">
            <img src="imagenes/proximoscursos/1.jpg">
          </div>
          <div class="texto_curso">
            <h2>Curso Valparaíso</h2>
            <p>Desde el 18 al 22 de agosto de 2014. 
            A realizarse en la Ciudad de Valparaíso, 
            Hotel Diego de Almagro.</p>
          </div>
        </div>
        <!-- curso -->
        <div class="curso">
          <div class="imagen_curso">
            <img src="imagenes/proximoscursos/2.jpg">
          </div>
          <div class="texto_curso">
            <h2>Curso Valparaíso</h2>
            <p>Desde el 18 al 22 de agosto de 2014. 
            A realizarse en la Ciudad de Valparaíso, 
            Hotel Diego de Almagro.</p>
          </div>
        </div>
        <!-- curso -->
        <div class="curso">
          <div class="imagen_curso">
            <img src="imagenes/proximoscursos/3.jpg">
          </div>
          <div class="texto_curso">
            <h2>Curso Valparaíso</h2>
            <p>Desde el 18 al 22 de agosto de 2014. 
            A realizarse en la Ciudad de Valparaíso, 
            Hotel Diego de Almagro.</p>
          </div>
        </div>
      </div>

      <!-- MENU ACORDEON -->
      <div id='cssmenu'>
        <ul>
           <div class="cursos">CURSOS</div>
           <li class='has-sub'><a href='#'><span>Gestión de Calidad</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Gestión Ambiental</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Inocuidad Alimentaria</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Seguridad y Salud Ambiental</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Gestión Empresarial</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Excelencia Operacional</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Gestión de Personas</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Cursos Técnicos</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
        </ul>
      </div>
    </section>
  </div>

  <!-- CLIENTES --> 
  <div class="clientes">
    <div id="contents">
        <div id="v2">
            <div id="demo-wrapper">
                <div id="demo-left">
                    <div id="hWrapperAuto">
                        <div id="carouselhAuto">
                            <div><img src="imagenes/clientes/1.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/2.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/3.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/4.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/5.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/6.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/7.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/8.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/9.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/10.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/11.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/12.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/13.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/14.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/15.jpg" /><br /></div>
                            <div><img src="imagenes/clientes/16.jpg" /><br /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <footer>
    <div class="contenido_footer">
      <p>Guardia Vieja  N° 255 of 1112- Providencia - Santiago Fono 56-2-23310311 / San Martin 571 Of 6 – Rancagua Fono 56-72-2768341</p>
      <p>Celulares +56-9 90 74 8650 / +56-9 54 01 5291</p>
      <div class="footer_secciones">
        <div class="seccion">
          <h3>ISO 9001</h3>
          <p>Lorem ipsum </p>
          <p>Dolor sit amet</p>
          <p>Adipiscing elit</p>
        </div>
        <div class="seccion">
          <h3>ISO 14001</h3>
          <p>Praesent</p>
          <p>Orci et dolor</p>
          <p>Sagittis vehicula</p>
        </div>
        <div class="seccion">
          <h3>INOCUIDAD</h3>
          <p>Ultricies nisi</p>
          <p>Aenean convallis </p>
          <p>Dapibus lorem</p>
        </div>
        <div class="seccion">
          <h3>SST</h3>
          <p>Ullamcorper sem</p>
          <p>Integer rhoncus </p>
          <p>Nibh sit amet</p>
        </div>
        <div class="seccion">
          <h3>G. EMPRESARIAL</h3>
          <p>Congue scelerisque</p>
          <p>Donec euismod </p>
          <p>Lorem hendrerit,</p>
        </div>
        <div class="seccion">
          <h3>G. PERSONAS</h3>
          <p>Ondimentum enim</p>
          <p>Fringilla nisls</p>
          <p>Rhoncus hers</p>
        </div>
      </div>
    </div>
  </footer>
  <div class="emagenic">
    <a href="http://www.emagenic.cl" target="new">desarrollado por emagenic.cl</a>
  </div>
  <!-- MENU -->
  <script>
    $(function() {
        var btn_movil = $('#nav-mobile'),
            menu = $('#menu').find('ul');
        btn_movil.on('click', function (e) {
            e.preventDefault();
            var el = $(this);
            el.toggleClass('nav-active');
            menu.toggleClass('open-menu');
        })
    });
  </script>
  <!-- CAROUSEL -->
  <script src="js/jsCarousel-2.0.0.js" type="text/javascript"></script>
  <link href="css/jsCarousel-2.0.0.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
    $(document).ready(function() {
      $('#carouselhAuto').jsCarousel({ onthumbnailclick: function(src) {  }, autoscroll: true, masked: true, itemstodisplay: 9, orientation: 'h' });
    });             
  </script>

</body>
</html>