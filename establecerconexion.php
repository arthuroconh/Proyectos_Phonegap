<?php
	$conexion=mysql_connect("localhost","root","") 
	or die("Problemas en la conexion");
	mysql_select_db("bd_tec",$conexion) or
	die("Problemas en la seleccion de la base de datos");
 ?>