<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Grabar"]){
	$editar="update  inicio set nosotros  = '$_POST[nosotros]',nosotros_contenido  = '$_POST[nosotros_contenido]',vision  = '$_POST[vision]',vision_contenido  = '$_POST[vision_contenido]',mision  = '$_POST[mision]',mision_contenido  = '$_POST[mision_contenido]',politica  = '$_POST[politica]',politica_contenido  = '$_POST[politica_contenido]',valores  = '$_POST[valores]',valores_contenido  = '$_POST[valores_contenido]'
	";
	$sentencia = mysql_query($editar,$conn)or die("Error al grabar: ".mysql_error);
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>

<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url();
}
-->
</style>
<link href="Span/Letras.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/admin.css" rel="stylesheet" type="text/css">
<title>Admin</title>

</head>

<body>
  <?php
	$listado = "select * from inicio";
	$sentencia = mysql_query($listado,$conn);
	while($rs=mysql_fetch_array($sentencia,$mibase)){
		$nosotros = $rs["nosotros"];
		$nosotros_contenido = $rs["nosotros_contenido"];
		$mision = $rs["mision"];
		$mision_contenido = $rs["mision_contenido"];
		$vision = $rs["vision"];
		$vision_contenido = $rs["vision_contenido"];
		$politica = $rs["politica"];
		$politica_contenido = $rs["politica_contenido"];
		$valores = $rs["valores"];
		$valores_contenido = $rs["valores_contenido"];
	}
	?>
  <form action="inicio.php" method="post" name="form1" id="form1">
    
    <table width="45%" border="0" align="center" cellpadding="0" cellspacing="0">
      
      <tr>
        <td colspan="3"><div align="center" class="titulos"><strong>Inicio</strong></div></td>
      </tr>
      <tr>
        <td height="17" colspan="3"></td>
      </tr>
      <tr>
        <td width="29%" height="30" align="right" valign="top" class="texto"><p>Nosotros: &nbsp;</p></td>
        <td width="65%" valign="top"><input name="nosotros" type="text" class="textopreguntas" id="nosotros" value="<?php echo $nosotros; ?> " size="50"></td>
        <td width="6%">&nbsp;</td>
      </tr>
      <tr>
        <td height="94" align="right" valign="top" class="texto"><p>Contenido: &nbsp;</p></td>
        <td valign="top"><textarea name="nosotros_contenido" id="nosotros5" cols="50" rows="5"><?php echo $nosotros_contenido; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="33" align="right" valign="top" class="texto"><p>Visión: &nbsp;</p></td>
        <td valign="top"><input name="vision" type="text" class="textopreguntas" id="vision" value="<?php echo $vision; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="101" align="right" valign="top" class="texto"><p>Contenido: &nbsp;</p></td>
        <td valign="top"><textarea name="vision_contenido" id="nosotros3" cols="50" rows="5"><?php echo $vision_contenido; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="33" align="right" valign="top" class="texto"><p>Misión: &nbsp;</p></td>
        <td valign="top"><input name="mision" type="text" class="textopreguntas" id="texto3" value="<?php echo $mision; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="101" align="right" valign="top" class="texto"><p>Contenido: &nbsp;</p></td>
        <td valign="top"><textarea name="mision_contenido" id="servicios" cols="50" rows="5"><?php echo $mision_contenido; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="33" align="right" valign="top" class="texto"><p>Politica: &nbsp;</p></td>
        <td valign="top"><input name="politica" type="text" class="textopreguntas" id="texto4" value="<?php echo $politica; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="101" align="right" valign="top" class="texto"><p>Contenido: &nbsp;</p></td>
        <td valign="top"><textarea name="politica_contenido" id="politica_contenido" cols="50" rows="5"><?php echo $politica_contenido; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="33" align="right" valign="top" class="texto"><p>Valores: &nbsp;</p></td>
        <td valign="top"><input name="valores" type="text" class="textopreguntas" id="texto5" value="<?php echo $valores; ?> " size="50"></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="101" align="right" valign="top" class="texto"><p>Contenido: &nbsp;</p></td>
        <td valign="top"><textarea name="valores_contenido" id="servicios3" cols="50" rows="5"><?php echo $valores_contenido; ?> </textarea></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="2" align="right" valign="top" class="texto"><p>&nbsp;</p></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="18" colspan="3">&nbsp;</td>
      </tr>
      <tr>
        <td height="49" colspan="3"><div align="center">
          <label>
          <input name="Grabar" type="submit" class="textobox3" id="Grabar" value="Grabar" />
          </label>
        </div></td>
      </tr>
    </table>
    <p align="center"><a href="sesion.php" class="texto">Volver</a></p>
    <p align="center">&nbsp;</p>
    <p align="center">&nbsp;</p>
</form>
</body>
</html>
<?php } ?>