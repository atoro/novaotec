<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
	
include("../Conexion.php");
	if ($_GET["action"]=="eliminar"){
		$insertar = "delete from asesoria WHERE id  = '$_GET[id]' " ; 
		$sentencia=mysql_query($insertar,$conn)or die("Error al eliminar un link: ".mysql_error);
	}
	
 ?>
<html>
<head>
<meta charset=UTF-8 />
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script language="JavaScript">
<!--
<!-- 
function openWindow(url, name) {
popupWin = window.open(url, name, 'scrollbars,resizable,width=650,height=500')
}

// -->


function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
//-->
</script>


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
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
//-->
</script>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<link href="../Letras.css" rel="stylesheet" type="text/css" />
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
.Estilo1 {color: #FFFFFF}
.Estilo2 {color: #333333}
body,td,th {
	color: #000000;
}
-->
</style>
<link href="../css/admin.css" rel="stylesheet" type="text/css" />

<title>admin</title></head>

<body>
  <p>
       <?php 
if ($_POST["Grabar"]){
	
		$insertar="INSERT INTO asesoria (asesoria_titulo,asesoria_contenido ) ";
		$insertar.= "VALUES( '$_POST[asesoria_titulo]','$_POST[asesoria_contenido]')";
		$sentencia=mysql_query($insertar,$conn)or die("Error al grabar: ".mysql_error);
	
}

?>
    
</p>
<form action="asesoria.php" method="post" name="form1" id="form1">
    <table width="70%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="38" colspan="2"><div align="center" class="titulos"><strong>Asesoria</strong></div></td>
      </tr>
      <tr>
        <td width="44%" height="39" align="right"><span class="texto">Nombre:</span><strong class="texto"> &nbsp; </strong></td>
        <td width="56%"><label for="asesoria_titulo"></label>
        <input type="text" name="asesoria_titulo" id="asesoria_titulo"></td>
      </tr>
      <tr>
        <td height="80" align="right" valign="top" class="Letras1"><span class="texto">Descripción:</span><span class="texto"><strong> &nbsp; </strong></span></td>
        <td><span class="textobox">
          <textarea name="asesoria_contenido" cols="45" rows="5" class="Letras1" id="asesoria_contenido"></textarea>
        </span></td>
      </tr>
      <tr>
        <td colspan="2" valign="top" class="Letras1"><div align="right" class="Letras1"></div></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
            <p>
              <label>
                <input type="submit" name="Grabar" id="Grabar" value="Grabar" />
              </label>
            </p>
            <p>&nbsp;</p>
        </div></td>
      </tr>
    </table>
</form>
<p>
  <?php 
$listado = "select * from  asesoria";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
</p>
<table width="86%" border="2" align="center" cellpadding="0" cellspacing="0" class="textotitulo2">
            <tr>
              <td height="265" class="margen"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="88%" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                    <tr>
                      <td width="11%" height="38" class="Letras1"><div align="left" class="Letras1"> 
                      

                      <span class="textobox"><a href="asesoria.php?id=<?php echo $rs["id"] ?>&action=eliminar" onClick=" return confirm('¿Está Seguro que desea eliminar?');"><img src="b_drop.png" width="16" height="16" border="0" /></a> &nbsp;</span><span class="texto">Eliminar</span></div></td>
                      <td width="89%" class="textobox"><a href="javascript:openWindow('editarasesoria.php?id=<?php echo $rs["id"]; ?>')"javascript:openWindow('editarasesoria.php?id=<?php echo $rs["id"]; ?>')""><img src="Lapiz.png" width="16" height="16" border="0"></a>  &nbsp;<span class="textoinfo">Editar</a></span></td>
                    </tr>
                    <tr>
                      <td height="34" align="right" valign="top" class="Letras1"><span class="textoinfo"><span class="texto">Nombre:</span> &nbsp; </span></td>
                      <td valign="top"><span class="texto">
                        <?php $texto = str_replace("\r\n","<br>",$rs["asesoria_titulo"]); echo $texto ?>
                      </span></td>
                    </tr>
                    <tr>
                      <td height="32" valign="top" class="Letras1"><div align="right" class="textoinfo"><span class="texto">Descripción:</span> &nbsp; </div></td>
                      <td valign="top"><span class="texto">
                        <?php $texto = str_replace("\r\n","<br>",$rs["asesoria_contenido"]); echo $texto ?>
                      </span></td>
                    </tr>
                    <tr>
                      <td height="23" colspan="2" align="left" valign="middle" class="Letras1">
                      
                      
                      <p class="titulos">&nbsp;</p>
                      </td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td height="19" valign="top">&nbsp;</td>
                </tr>
                </table>
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td height="2" bgcolor="#333333"></td>
                  </tr>
                </table></td>
            </tr>
  </table>
  <?php } ?>
</div>
<div align="left"></div>
<div align="center"></div>
<p align="center"><a href="sesion.php" class="texto">Volver</a></p>
<p align="center">&nbsp;</p>
<p align="center">&nbsp;</p>
</body>
</html>
<?php } ?>