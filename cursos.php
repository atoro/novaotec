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
  <title>Cursos Nova Otec</title>
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
          <li class="activo"><a href="cursos.php">CURSOS</a></li>
          <li><a href="biblioteca.php">BIBLIOTECA</a></li>
          <li><a href="clientes.php">CLIENTES</a></li>
          <li><a href="galeria.php">GALERIA</a></li>
          <li><a href="noticias.php">NOTICIAS</a></li>
          <li><a href="contacto.php">CONTACTO</a></li>
        </ul>
      </nav>
    </div>
  </header>
  
  <div class="contenedor_principal">

    <!-- CONTENIDO PRINCIPAL -->
    <section class="contenido">
      <div class="cursos">
        <div class="curso">
          <div class="img_curso">
            <img src="imagenes/cursos/1.jpg">
          </div>
          <h2>Gestión de Calidad</h2>
          <p>ISO 9001</p>
          <a href="detallecurso.php">ver más</a>
        </div>
        <div class="curso">
          <div class="img_curso">
            <img src="imagenes/cursos/2.jpg">
          </div>
          <h2>Gestión Ambiental</h2>
          <p>ISO 14001</p>
          <a href="detallecurso.php">ver más</a>
        </div>
        <div class="curso">
          <div class="img_curso">
            <img src="imagenes/cursos/3.jpg">
          </div>
          <h2>Inocuidad Alimentaria</h2>
          <p>BRC-HACCP ISO 22000</p>
          <a href="detallecurso.php">ver más</a>
        </div>
        <div class="curso">
          <div class="img_curso">
            <img src="imagenes/cursos/4.jpg">
          </div>
          <h2>Seguridad y Salud en el Trabajo</h2>
          <p>OHSAS 18001</p>
          <a href="detallecurso.php">ver más</a>
        </div>
        <div class="curso">
          <div class="img_curso">
            <img src="imagenes/cursos/5.jpg">
          </div>
          <h2>Gestión Empresarial</h2>
          <p>BSC-KPI</p>
          <a href="detallecurso.php">ver más</a>
        </div>
        <div class="curso">
          <div class="img_curso">
            <img src="imagenes/cursos/6.jpg">
          </div>
          <h2>Excelencia Operacional</h2>
          <p>KAIZEN 5S - LEAN</p>
          <a href="detallecurso.php">ver más</a>
        </div>
        <div class="curso">
          <div class="img_curso">
            <img src="imagenes/cursos/7.jpg">
          </div>
          <h2>Gestión de Personas</h2>
          <a href="detallecurso.php">ver más</a>
        </div>
        <div class="curso">
          <div class="img_curso">
            <img src="imagenes/cursos/8.jpg">
          </div>
          <h2>Cursos Técnicos</h2>
          <a href="detallecurso.php">ver más</a>
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