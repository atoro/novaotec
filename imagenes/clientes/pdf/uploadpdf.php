<? 
$cadenatexto = $_GET["cadenatexto"]; 
$nombre_archivo = $cadenatexto .".pdf";
$tipo_archivo = $HTTP_POST_FILES['userfile']['type']; 
$tamano_archivo = $HTTP_POST_FILES['userfile']['size']; 
if (!((strpos($tipo_archivo, "pdf") || strpos($tipo_archivo, "PDF")) )) { 
    echo "La extensi�n de los archivos no es correcta. Se permiten archivos .png o .jpg"; 
}else{ 
    if (move_uploaded_file($HTTP_POST_FILES['userfile']['tmp_name'], $nombre_archivo)){ 
 		
	
		
		echo "<div align=center>El archivo ha sido cargado correctamente.</div>"; 
	   	echo "<div align=center><a href=../../../admin/clientespdf.php>VOLVER</a></div>";
    }else{ 
       echo "Ocurri� alg�n error al subir el fichero. No pudo guardarse."; 
    } 
} 
?> 