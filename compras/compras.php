<?php
session_start();

	if(isset($_SESSION['usuario'])){
    include ('../establecerconexion.php');
		$arreglo=$_SESSION['carrito'];
		$orden=0;
		$re=mysql_query("select * from `t_car` order by `ord_id` DESC limit 1") or die(mysql_error());	
		while (	$f=mysql_fetch_array($re)) {
					$orden=$f['ord_id'];	
		}
		if($orden==0){
			$orden=1;
		}else{
			$orden=$orden+1;

			$_SESSION['orden']=$orden;
		}
		for($i=0; $i<count($arreglo);$i++){
			mysql_query("insert into `t_car`(`car_id`, `pro_id`, `car_can`, `usu_id`, `ord_id`) values(
				'',
				'".$arreglo[$i]['Id']."',
				'".$arreglo[$i]['Cantidad']."',	
				'".$_SESSION['usuario_id']."',
				'$orden'
				)")or die(mysql_error());
			$ll=mysql_query("SELECT * FROM `t_pro` WHERE `pro_id`='".$arreglo[$i]['Id']."'");
			$pp=mysql_fetch_array($ll);
			$erraa=($arreglo[$i]['Cantidad']*$pp['pro_pre'])+$erraa;
		}

	$_SESSION['empresa']=$_POST['nombre'];
	$_SESSION['rif']=$_POST['rif'];
	$_SESSION['direccion']=$_POST['direccion'];
	$_SESSION['telefono']=$_POST['telefono'];
	$_SESSION['correo']=$_POST['correo'];
	$_SESSION['comprador']=$_SESSION['usuario'];
	mysql_query("INSERT INTO `t_ord`(`ord_id`, `ord_emp`, `ord_rif`, `ord_tel`, `ord_dir`, `ord_cor`, `ord_tot`) VALUES ('$orden','".$_SESSION['empresa']."','".$_SESSION['rif']."','".$_SESSION['telefono']."','".$_SESSION['direccion']."','".$_SESSION['correo']."','$erraa')");
		unset($_SESSION['pro_id']);
		unset($_SESSION['pro_pre']);
		unset($_SESSION['total']);
		unset($_SESSION['encarro']);
		unset($_SESSION['carrito']);
		header("Location: ../contact.php");
	}

?>