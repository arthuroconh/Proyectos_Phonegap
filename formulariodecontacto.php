<?php
$subject = "Contacto desde el Sitio Web";
require "phpmailer/class.phpmailer.php";
$error = '';
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$message ="	<h1>La siguiente empresa se puso en contacto</h1><br><br><br>
				
				<b>Nombre:</b> $nombre<br><br>

				<b>Telefono:</b> $telefono<br><br>

				<b>Correo:</b> $correo<br><br>

				<b>Mensaje:</b> $mensaje<br><br>

				";
if(!$error)
{
$mail = new PHPMailer;
$mail ->Host = "www.desarrollotricolor.com.ve";
$mail ->From = "soporte@tecnologiaclimatica.com";
$mail ->FromName = "Orden de Compra en Tecnologiaclimatica.com";
$mail ->Subject = $subject;
$mail ->addAddress('contacto@desarrollotricolor.com.ve','Contacto');
$mail ->MsgHTML($message);
if ($mail->Send()) {
	echo "<script>
					<!--
					location.href='enviado.php';
					//-->
					</script>";
}
}
?>