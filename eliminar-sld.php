<?PHP
    include ('establecerconexion.php');
	$id= $_GET['id'];
	$producto= "DELETE FROM `t_sld` WHERE `sld_id`=$id";
	$insertar=mysql_query($producto) or die('No se pudo eliminar debido a: '. mysql_error());
	$insertar=array();
	header('Location: eliminar-slider.php');
?>