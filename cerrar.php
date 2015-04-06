<?PHP
	session_start();
	unset($_SESSION['usuario']);
	unset($_SESSION['usuario_id']);
	header('Location: index.php');
?>