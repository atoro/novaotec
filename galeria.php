<?php include("Conexion.php"); 
  $listado = "select * from pie";
  $sentencia = mysql_query($listado,$conn);
  while($rs=mysql_fetch_array($sentencia,$mibase)){
    $texto1 = $rs["texto1"];
    $texto2 = $rs["texto2"];
    $campo1 = $rs["campo1"];
    $campo2 = $rs["campo2"];
    $campo3 = $rs["campo3"];
    $campo4 = $rs["campo4"];
    $campo5 = $rs["campo5"];
    $campo6 = $rs["campo6"];
  }
  
?>
<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html">
  <title>Galería Nova Otec</title>
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

  <!-- Add jQuery library -->
  <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>

  <!-- Add mousewheel plugin (this is optional) -->
  <script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>

  <!-- Add fancyBox main JS and CSS files -->
  <script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
  <link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />

  <!-- Add Button helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-buttons.css?v=1.0.5" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>

  <!-- Add Thumbnail helper (this is optional) -->
  <link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
  <script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

  <!-- Add Media helper (this is optional) -->
  <script type="text/javascript" src="source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

  <script type="text/javascript">
    $(document).ready(function() {
      /*
       *  Simple image gallery. Uses default settings
       */

      $('.fancybox').fancybox();

      /*
       *  Different effects
       */

      // Change title type, overlay closing speed
      $(".fancybox-effects-a").fancybox({
        helpers: {
          title : {
            type : 'outside'
          },
          overlay : {
            speedOut : 0
          }
        }
      });

      // Disable opening and closing animations, change title type
      $(".fancybox-effects-b").fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        helpers : {
          title : {
            type : 'over'
          }
        }
      });

      // Set custom style, close if clicked, change title type and overlay color
      $(".fancybox-effects-c").fancybox({
        wrapCSS    : 'fancybox-custom',
        closeClick : true,

        openEffect : 'none',

        helpers : {
          title : {
            type : 'inside'
          },
          overlay : {
            css : {
              'background' : 'rgba(238,238,238,0.85)'
            }
          }
        }
      });

      // Remove padding, set opening and closing animations, close if clicked and disable overlay
      $(".fancybox-effects-d").fancybox({
        padding: 0,

        openEffect : 'elastic',
        openSpeed  : 150,

        closeEffect : 'elastic',
        closeSpeed  : 150,

        closeClick : true,

        helpers : {
          overlay : null
        }
      });

      /*
       *  Button helper. Disable animations, hide close button, change title type and content
       */

      $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,

        helpers : {
          title : {
            type : 'inside'
          },
          buttons : {}
        },

        afterLoad : function() {
          this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
      });


      /*
       *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
       */

      $('.fancybox-thumbs').fancybox({
        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : false,
        arrows    : false,
        nextClick : true,

        helpers : {
          thumbs : {
            width  : 50,
            height : 50
          }
        }
      });

      /*
       *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
      */
      $('.fancybox-media')
        .attr('rel', 'media-gallery')
        .fancybox({
          openEffect : 'none',
          closeEffect : 'none',
          prevEffect : 'none',
          nextEffect : 'none',

          arrows : false,
          helpers : {
            media : {},
            buttons : {}
          }
        });

      /*
       *  Open manually
       */

      $("#fancybox-manual-a").click(function() {
        $.fancybox.open('1_b.jpg');
      });

      $("#fancybox-manual-b").click(function() {
        $.fancybox.open({
          href : 'iframe.html',
          type : 'iframe',
          padding : 5
        });
      });

      $("#fancybox-manual-c").click(function() {
        $.fancybox.open([
          {
            href : '1_b.jpg',
            title : 'My title'
          }, {
            href : '2_b.jpg',
            title : '2nd title'
          }, {
            href : '3_b.jpg'
          }
        ], {
          helpers : {
            thumbs : {
              width: 75,
              height: 50
            }
          }
        });
      });


    });
  </script>
  <style type="text/css">
    .fancybox-custom .fancybox-skin {
      box-shadow: 0 0 50px #222;
    }

    
  </style>

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
        <a href="#"><img src="imagenes/in.jpg"></a>
        <a href="#"><img src="imagenes/yt.jpg"></a>
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
          <li class="activo"><a href="galeria.php">GALERIA</a></li>
          <li><a href="noticias.php">NOTICIAS</a></li>
          <li><a href="contacto.php">CONTACTO</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <div class="contenedor_principal">

    <!-- CONTENIDO PRINCIPAL -->
    <section class="contenido">

      <?php 
          $listadolink  = "select * from galeria_evento";
          $listado = "select * from  galeria where propiedad = '$_GET[id]'";
          $sentencialink  = mysql_query($listadolink ,$conn);
          while($rs =mysql_fetch_array($sentencialink ,$mibase)){
        ?>
      <div class="bloque">
        <h2><?php $texto = str_replace("\r\n","<br>",$rs["titulo_evento"]); echo $texto ?></h2>
        <div class="cont">
          <strong class="strong">Fecha:</strong>
          <p class="p"><?php $texto = str_replace("\r\n","<br>",$rs["fecha_evento"]); echo $texto ?></p>
        </div>
        <div class="cont">
          <strong class="strong">Región:</strong>
          <p class="p"><?php $texto = str_replace("\r\n","<br>",$rs["region_evento"]); echo $texto ?></p>
        </div>
        <div class="cont">
          <strong class="strong">Institución:</strong>
          <p class="p"><?php $texto = str_replace("\r\n","<br>",$rs["institucion_evento"]); echo $texto ?></p>
        </div>
        <!-- GALERIA -->
        <div class="galeria_evento">
          <div class="img_galeria">
            <a class="fancybox" href="imagenes/galeria/<?php echo $rs["id"]; ?>.jpg" data-fancybox-group="gallery" title="<?php echo $rs["titulo"]; ?>">
              <img src="imagenes/galeria/<?php echo $rs["id"]; ?>.jpg">
            </a> 
          </div>
        </div>
      </div>
      <?php } ?>

      <!-- LINKS DE INTERES-->
      <div class="links">
        <div class="titulo">
          LINKS DE INTERES
        </div>
        <?php 
          $listadolink  = "select * from  link";
          $sentencialink  = mysql_query($listadolink ,$conn);
          while($rslink =mysql_fetch_array($sentencialink ,$mibase)){
        ?>
        <li><a href="<?php echo $rslink["url"] ?>" target="new"><?php echo $rslink["link"] ?></a></li>
        <?php } ?>
      </div>
    </section>

    <!-- CONTENIDO SECUNDARIO -->
    <section class="secundario">
       <div class="proximos_cursos">
        <div class="titulo_curso">
          PRÓXIMOS CURSOS
        </div>
        <?php 
        $listado = "select * from proximoscursos";
        $sentencia = mysql_query($listado,$conn);
        while($rs=mysql_fetch_array($sentencia,$mibase)){
        ?>
        <!-- curso -->
        <div class="curso">
          <div class="imagen_curso">
            <img src="imagenes/proximoscursos/<?php echo $rs["id"]; ?>.jpg">
          </div>
          <div class="texto_curso">
            <h2><?php $texto = str_replace("\r\n","<br>",$rs["titulo_pcurso"]); echo $texto ?></h2>
            <p><?php $texto = str_replace("\r\n","<br>",$rs["contenido_pcurso"]); echo $texto ?></p>
          </div>
        </div>
        <?php } ?>
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
           <li class='has-sub'><a href='#'><span>Seguridad y Salud en el Trabajo</span></a>
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
           <li class='has-sub'><a href='#'><span>Gestión de Riesgos</span></a>
              <ul>
                 <li><a href='#'><span>Curso 1</span></a></li>
                 <li><a href='#'><span>Curso 2</span></a></li>
                 <li><a href='#'><span>Curso 3</span></a></li>
              </ul>
           </li>
           <li class='has-sub'><a href='#'><span>Eficiencia Energética</span></a>
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
                          <?php 
                          $listado = "select * from clientes";
                          $sentencia = mysql_query($listado,$conn);
                          while($rs=mysql_fetch_array($sentencia,$mibase)){
                          ?>
                            <div>
                              <img src="imagenes/clientes/<?php echo $rs["id"]; ?>.jpg" /><br />
                            </div>
                          <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

  <footer>
    <div class="contenido_footer">
      <p><?php echo $texto1 ?></p>
      <p><?php echo $texto2 ?></p>
      <div class="footer_secciones">
        <div class="seccion">
          <h3>ISO 9001</h3>
          <p><?php echo $campo1 ?></p>
        </div>
        <div class="seccion">
          <h3>ISO 14001</h3>
          <p><?php echo $campo2 ?></p>
        </div>
        <div class="seccion">
          <h3>INOCUIDAD</h3>
          <p><?php echo $campo3 ?></p>
        </div>
        <div class="seccion">
          <h3>SST</h3>
          <p><?php echo $campo4 ?></p>
        </div>
        <div class="seccion">
          <h3>G. EMPRESARIAL</h3>
          <p><?php echo $campo5 ?></p>
        </div>
        <div class="seccion">
          <h3>G. PERSONAS</h3>
          <p><?php echo $campo6 ?></p>
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