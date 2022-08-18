<?php
	
	$db_host = 'localhost'; //Host del Servidor MySQL
	$db_name = 'mipaggames'; //Nombre de la Base de datos
	$db_user = 'root'; //Usuario de MySQL
	$db_pass = ''; //Password de Usuario MySQL
	
	$fecha = date("Ymd-His"); //Obtenemos la fecha y hora para identificar el respaldo

	// Construimos el nombre de archivo SQL Ejemplo: mibase_20170101-081120.sql
	$salida_sql = $db_name.'_'.$fecha.'.sql'; 
	
	//Comando para genera respaldo de MySQL, enviamos las variales de conexion y el destino
	$dump = "mysqldump -h$db_host -u$db_user -p$db_pass --opt $db_name > $salida_sql";
	system($dump, $output); //Ejecutamos el comando para respaldo
	
?>