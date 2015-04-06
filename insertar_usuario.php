<?PHP
	include 'establecerconexion.php';
	require "phpmailer/class.phpmailer.php";
	//obteniendo datos
	$nombre=$_POST['usu_nom'];
	$usu=$_POST['usu_usu'];
	$contrasenia=$_POST['usu_cla'];
	$correo=$_POST['usu_cor'];
	//pasando contraseña a MD5
	$contra=  md5($contrasenia);
	// insert de usuario
	$usuario="INSERT INTO `t_usu`(`usu_id`, `usu_usu`, `usu_cor`, `usu_nom`,`usu_tip`) VALUES ('','$usu','$correo','$nombre',2)";
	$insertar=mysql_query($usuario) or die('No se pudo insertar datos debido a: '. mysql_error());
	$insertar=array();	
	//insert de clave
	$a=mysql_query("select * from `t_usu` order by `usu_id` DESC limit 1") or die(mysql_error());
			while (	$f=mysql_fetch_array($a)) {
			$usu=$f['usu_id'];
		}
	$usuario="INSERT INTO `t_cla`(`cla_id`, `cla_cla`, `usu_id`) VALUES ('','$contra','$usu')";
	$insertar=mysql_query($usuario) or die('No se pudo insertar datos debido a: '. mysql_error());
	$insertar=array();	

include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$email_clima='soporte@tecnologiaclimatica.com';
$subject = 'Datos de usuario';
$error = '';   
$message ="	<h1>Datos del Nuevo Usuario</h1><br><br><br>
				
				<b>Nombre:</b> $nombre<br><br>

				<b>Usuario:</b> $_POST[usu_usu]<br><br>

				<b>Contrase&ntilde;a:</b> $contrasenia<br><br>

				";
if(!$error)
{
$mail = new PHPMailer;
$mail ->Host = "www.desarrollotricolor.com.ve";
$mail ->From = "soporte@tecnologiaclimatica.com";
$mail ->FromName = "Nuevo usuario en Tecnologiaclimatica.com";
$mail ->Subject = $subject;
$mail ->addAddress($correo,'Usuario');
$mail ->MsgHTML($message);
if ($mail->Send()) {
	echo "<script>
					<!--
					location.href='registrado.php';
					//-->
					</script>";
}
}
}
?>