<?php
session_start();
if ($_SESSION["$nusuario"] == "") { 
	header("location: sesion.php","_self");
} else {
include("../Conexion.php");
if ($_POST["Modificar"]){
	$insertar = "UPDATE cursos SET titulo_curso ='".$_POST["titulo_curso"]."',subtitulo_curso ='".$_POST["subtitulo_curso"]."'   WHERE id  = '" .$_GET["id"]."' " ; 
	$sentencia=mysql_query($insertar,$conn)or die("Error al grabar : ".mysql_error);


?>
<script language="javascript">
	window.opener.document.location="cursos.php"
	window.close();
	</script>	
<?php } ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Editar</title>
<link href="../Letras.css" rel="stylesheet" type="text/css" />

</head>

<body>

<?php 
$listado = "select * from  cursos where id ='$_GET[id]'";
$sentencia = mysql_query($listado,$conn);
while($rs=mysql_fetch_array($sentencia,$mibase)){
?>
<form action="editarcursos.php?id=<?php echo $_GET["id"]; ?>" method="post" name="form1" id="form1">
  <table width="44%" border="0" align="left" cellpadding="0" cellspacing="0">
    <tr>
      <td width="81%" valign="top"><p>
        <label>
          <input type="submit" name="Modificar" id="Modificar" value="Modificar" />
          </label>
        </p>
        <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td width="31%" height="32" align="right" valign="top" class="textos"><span class="texto">Titulo:</span>&nbsp;</td>
            <td width="69%" valign="top" class="Letras1"><input name="titulo_curso" type="text" id="titulo_curso" value="<?php echo $rs["titulo_curso"]; ?>" /></td>
          </tr>
          <tr>
            <td height="95" valign="top" class="textobox"><div align="right" class="titulo"><span class="textos"><span class="texto">Sub Titulo</span>:&nbsp;</span></div></td>
            <td valign="top" class="Letras1"><input name="subtitulo_curso" type="text" id="subtitulo_curso" value="<?php echo $rs["subtitulo_curso"]; ?>" /></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<?php } ?>
</body>
</html>
<?php } ?>