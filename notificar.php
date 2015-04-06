<?php

include 'config.php';

error_reporting (E_ALL ^ E_NOTICE);

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = stripslashes($_POST['name']);
$email = trim($_POST['email']);
$subject = stripslashes($_POST['subject']);


$error = '';  
   $message ="
				Persona o Empresa: $_POST[name]

				Correo: $_POST[email]

				Asunto: $_POST[subject]

				Mensaje: 

				$_POST[message]
				";
if(!$error)
{
$mail = mail('blancoarthuro@gmail.com,arthuro_b@outlook.com,eliorivasm@gmail.com', $subject, $message,
     "From:  $_POST[name] $_POST[email]\r\n"
    ."Reply-To: $_POST[email]\r\n"
    ."X-Mailer: PHP/" . phpversion());


if($mail)
{
header("Location: compras.php");
}

}
}
?>