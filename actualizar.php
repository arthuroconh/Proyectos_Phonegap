<?PHP
	$pro_id=$_POST['pro_id'];
	$pro_pre=$_POST['pro_pre'];
	$pro_nom=$_POST['pro_nom'];
	$pro_des=$_POST['pro_des'];
	$pro_img=$_FILES['pro_img'];
	if ($pro_id!='') {
		echo $pro_pre;
		echo $pro_nom;
		echo $pro_des;
		include ('establecerconexion.php');
		if ($pro_pre!='') {
			$pre= "UPDATE `t_pro` SET `pro_pre`='$pro_pre' WHERE `pro_id`='$pro_id'";
			$update=mysql_query($pre);
		}

		if ($pro_nom!='') {
			$nom = "UPDATE `t_pro` SET `pro_pro`='$pro_nom' WHERE `pro_id`='$pro_id'";
			$update=mysql_query($nom);
		}

		if ($pro_des!='') {
			$des = "UPDATE `t_pro` SET `pro_des`='$pro_des' WHERE `pro_id`='$pro_id'";
			$update=mysql_query($des);
		}

		if ($pro_img!='') {
				session_start();
				$nombreimagen = $_FILES['pro_img']['name'];
				$tmpimagen = $_FILES['pro_img']['tmp_name'];
				$extimagen = pathinfo($nombreimagen);
				$ext = array("png","gif","jpg");
				$urlnueva = "productos/".$nombreimagen;

				if(is_uploaded_file($tmpimagen)){
					if(array_search($extimagen['extension'], $ext)){
						copy($tmpimagen, $urlnueva);
						echo "Se Guardo la imagen";
					}
					else{
						echo "Error: Solo imganes formato (jpg, png o gif)";
					}		
				}	
				if ($nombreimagen!=''){
					$img = "UPDATE `t_pro` SET `pro_img`='$nombreimagen' WHERE `pro_id`='$pro_id'";
					$update=mysql_query($img);
				}
		}
	header('Location: administrar-productos.php');
	}else{
		header('Location: administracion.php');
	}

?>