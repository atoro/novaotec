<?php
		$conn=mysql_connect("localhost","novaotec_user","^l1Jr(Pg-6y?"); // ESTABLECER CONEXION
		if(!$conn){
			die("error al conectarse al motor");
		}
		$mibase = mysql_select_db("novaotec_bd",$conn); //SELECCION BD
		if(!$mibase){
			die("error al selecionar la base de datos");
		}
		
?>