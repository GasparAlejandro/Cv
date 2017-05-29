<?php



$nombre = $_POST['nombreCompleto'];
$correo = $_POST['correoElectronico'];
$asunto = $_POST['asunto'];



require("../class.phpmailer.php");
require_once("../class.smtp.php");

$mail = "Tienes un nuevo Mensaje<br>Nombre: ".$nombre."<br>Correo: ".$correo."<br>Asunto: ".$asunto;

$mailWeb = new PHPMailer();
// Seteo del uso
$mailWeb->IsSMTP(); // Uso SMTP
// Seteo de la seguridad
$mailWeb->SMTPSecure = 'tls';
// Host
$mailWeb->Host = "smtp.office365.com";
// Degug. Valores 1 -> errores y mensajes // 2 solo mensajes // 0 no informa nada
$mailWeb->SMTPDebug = 0;
// Autenticación
$mailWeb->SMTPAuth = true;
// Puerto
$mailWeb->Port = 25;
// Usuario
$mailWeb->Username = "alex.gaspar.1000@gmail.com";
// Contraseña
$mailWeb->Password = "JokerTitan23";
// Quien envia
$mailWeb->SetFrom("alex.gaspar.1000@gmail.com", "Cv");
// A quien se responderá
// $mailWeb->AddReplyTo("alex.gaspar.1000@gmail.com", "Contacto");
// Asunto del email
$mailWeb->Subject = "Nuevo Mensaje";
// En caso de que la vista HTML no esté activida. Esto ya es muy poco probable
$mailWeb->AltBody = "Para ver correctamente este mensaje use la vista de HTML";
// $mailWeb->AddEmbeddedImage('../img/SME_banner_gracias.jpg', 'banner');
$mailWeb->CharSet = 'UTF-8';
// El cuerpo del mensaje. 
$mailWeb->IsHTML(true);
$mailWeb->MsgHTML($mail);
// Dirección del destinatario
$mailWeb->AddAddress($correo);
$mailWeb->AddAddress("alex.gaspar.1000@gmail.com");


// Enviar el correo



if(!$mailWeb->Send()) {
  echo 'Message was not sent.';
  echo 'Mailer error: ' . $mailWeb->ErrorInfo;
} else {
  echo 'Tu mensaje ha sido enviado. En breve nos comunicaremos contigo. <br>Hemos enviado una copia del mensaje a tu correo';
}

?>