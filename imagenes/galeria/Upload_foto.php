<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php 
echo "<form action=upload.php?propiedad=$_GET[propiedad]&id=$_GET[id]&cadenatexto=$_GET[foto] method=post enctype=multipart/form-data> "
?><br>
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000"> 
    <br> 
    <br> 
    <b>Enviar un nuevo archivo: </b> 
    <br> 
    <input name="userfile" type="file"> 
    <br> 
    <input type="submit" value="Grabar"> 
</form> 
</body>
</html>