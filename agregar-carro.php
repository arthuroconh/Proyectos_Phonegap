<?PHP
    include ('establecerconexion.php');
	session_start();

	$id=$_POST['pro_id'];

	$_SESSION['pro_id']=$id;
	echo $_SESSION['pro_id'];
	header('location: carro-de-compras.php')
?>