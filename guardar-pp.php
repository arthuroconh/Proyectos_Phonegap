<?PHP
    include ('establecerconexion.php');

	session_start();
	$nombreimagen = $_FILES['pro_img']['name'];
	$tmpimagen = $_FILES['pro_img']['tmp_name'];
	$extimagen = pathinfo($nombreimagen);
	$ext = array("png","gif","jpg","wmp","raw");
	$urlnueva = "slides/".$nombreimagen;

	if(is_uploaded_file($tmpimagen)){
			copy($tmpimagen, $urlnueva);
		}
		else{
			echo "Error: Solo imganes formato (jpg, png o gif)";
		}

	$pro_img= $nombreimagen;
	$pro_des= $_POST['pro_des'];
	$pro_nom= $_POST['pro_nom'];

	$producto= "INSERT INTO `t_sld`(`sld_id`, `sld_tit`, `sld_con`, `sld_img`) VALUES ('','$pro_nom','$pro_des','$pro_img')";
	$insertar=mysql_query($producto) or die('No se pudo insertar datos debido a: '. mysql_error());
	$insertar=array();
	header('Location: administracion.php');
?>