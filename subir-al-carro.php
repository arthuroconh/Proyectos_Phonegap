<?PHP
    include ('establecerconexion.php');
	session_start();
	$_SESSION['pro_id']=$_POST['pro_id'];
	$consulta = mysql_query("SELECT * FROM `t_pro` WHERE `t_pro`.`pro_id`=$_SESSION[pro_id]");
	//insertanto variables de sesion
	$pro_can=$_POST['pro_can'];
	$_SESSION['pro_can']=$pro_can;

	$pro_pre=$_POST['pro_pre'];
	$_SESSION['pro_pre']=$pro_pre;
	$_SESSION['total']= $_SESSION['pro_can']*$_SESSION['pro_pre'];
	//Creando variable carrito

	header('location: carro-de-compras.php');
?>