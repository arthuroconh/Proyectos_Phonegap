<?php
session_start();
include ('establecerconexion.php');
$subject = "Orden de Compra Nro: $_SESSION[orden]";
require "phpmailer/class.phpmailer.php";
$error = '';
$message ="	<h1>Datos de la Orden</h1><br><br><br>
				
				<b>Orden Nro:</b> $_SESSION[orden]<br><br>

				<b>Usuario:</b> $_SESSION[comprador]<br><br>

				<b>Persona o Empresa:</b> $_SESSION[empresa]<br><br>

				<b>RIF:</b> $_SESSION[rif]<br><br>			

				<b>Telefono:</b> $_SESSION[telefono]<br><br>

				<b>Direcci&oacute;n:</b> $_SESSION[direccion]<br><br>

				<b>Correo:</b> $_SESSION[correo]<br><br>

				<h2>En cuesti&oacute;n de minutos nuestro equipo se pondra en contacto para concretar Formas de pago y de envio.</h2><br><br>

				<b>Recuerda consultar la secci&oacute;n ''Mis Ordenes'' para obtener m&aacute;s informaci&oacute;n de la orden</b><br><br>

				Tecnolog&iacute;a Clim&aacute;tica de Venezuela C.A. Agradece su confianza.<br>
				''Estamos Refrescando a Venezuela, sólo nos falta usted y su organización''.

				";
if(!$error)
{
$mail = new PHPMailer;
$mail ->Host = "www.desarrollotricolor.com.ve";
$mail ->From = "soporte@tecnologiaclimatica.com";
$mail ->FromName = "Orden de Compra en Tecnologiaclimatica.com";
$mail ->Subject = $subject;
$mail ->addAddress($_SESSION[correo], $_SESSION[empresa]);
$mail ->MsgHTML($message);

if ($mail->Send()) {

$mail = new PHPMailer;
$mail ->Host = "www.desarrollotricolor.com.ve";
$mail ->From = "soporte@tecnologiaclimatica.com";
$mail ->FromName = "Orden de Compra en Tecnologiaclimatica.com";
$mail ->Subject = $subject;
$mail ->addAddress('contacto@desarrollotricolor.com.ve', $_SESSION[empresa]);
$mail ->MsgHTML($message);
if ($mail->Send()) {
	echo "<script>
					<!--
					location.href='orden-procesada.php';
					//-->
					</script>";
}
}

}

?>