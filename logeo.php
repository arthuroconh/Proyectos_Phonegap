<?PHP session_start();?>
<?PHP include 'establecerconexion.php';
		//iniciando sesion
		//caargando datos ingresados
		$usu=$_POST['usu_usu'];
		$contrasenia=$_POST['usu_cla'];
		
		//pasando contraseña a MD5
		$contra= md5($contrasenia);
		
		//consultando 
		$consulta=mysql_query("SELECT * FROM `t_usu`,`t_cla`
							 WHERE `t_usu`.`usu_usu`='$usu' AND `t_cla`.`usu_id`=`t_usu`.`usu_id` AND `t_cla`.`cla_cla`='$contra'") or die(mysql_error());
		$f=mysql_fetch_array($consulta);
	if($f['usu_id']!=''){
		$_SESSION['usuario']=$usu;
		$_SESSION['usuario_id']=$f['usu_id'];
		$_SESSION['tipo_usuario']=$f['usu_tip'];
		if($_SESSION['tipo_usuario']==1){
			echo "<script>
					<!--
					location.href='administracion.php';
					//-->
					</script>";
			
		}else if($_SESSION['tipo_usuario']==2){
			echo "<script>
					<!--
					location.href='tienda.php';
					//-->
					</script>";
			
		}	
	}else{
			echo "<script>
					<!--
					location.href='login.php?error=noexiste';
					//-->
					</script>";
	}
?>