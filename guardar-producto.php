<?PHP
    include ('establecerconexion.php');

	session_start();
	$nombreimagen = $_FILES['pro_img']['name'];
	$tmpimagen = $_FILES['pro_img']['tmp_name'];
	$extimagen = pathinfo($nombreimagen);
	$ext = array("png","gif","jpg","wmp","raw");
	$urlnueva = "productos/".$nombreimagen;

	if(is_uploaded_file($tmpimagen)){
			copy($tmpimagen, $urlnueva);
		}
		else{
			echo "Error: Solo imganes formato (jpg, png o gif)";
		}

	$pro_img= $nombreimagen;
	$pro_pre= $_POST['pro_pre'];
	$pro_des= $_POST['pro_des'];
	$pro_nom= $_POST['pro_nom'];

	$producto= "INSERT INTO `bd_tec`.`t_pro`(`pro_id`, `pro_pro`, `pro_pre`, `pro_des`, `pro_img`) VALUES ('','$pro_nom','$pro_pre','$pro_des','$pro_img')";
	$insertar=mysql_query($producto) or die('No se pudo insertar datos debido a: '. mysql_error());
	$insertar=array();
	header('Location: producto-registrado.php');
?>