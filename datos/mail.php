<?php
// Varios destinatarios
function correo($destino, $destino2){

  
  $para  = $destino . ', ';
  $para .= $destino2;
  // título
  $título = 'Has enviado correo exitosamente.';
  // mensaje
  // Para enviar un correo HTML, debe establecerse la cabecera Content-type
  $cabeceras = 'From: Recordatorio <alex.gaspar.1000@gmail.com>' . "\r\n";
  $cabeceras .= 'MIME-Version: 1.0' . "\r\n";
  $cabeceras .='Reply-To: '. $destino . "\r\n" ;
  $cabeceras .='X-Mailer: PHP/' . phpversion();
  $cabeceras .= 'Content-type: text/html; charset=iso-UTF-8' . "\r\n";

  // Cabeceras adicionales
 $mensaje = '
  <html>
  <head>
    <title>Haz Enviado Message.</title>
  </head>
  <body>
    <p></p>
    
  </body>
  </html>
  '; 
  

  // Enviarlo
  mail($para, $título, $mensaje, $cabeceras);
}


// function correo($destino, $destino2){



//   require("../class.phpmailer.php");

//   $mail = new PHPMailer();

//   $mail->IsSMTP();  // telling the class to use SMTP
//   $mail->Host     = "alex.gaspar.1000@gamil.com"; // SMTP server

//   $mail->From     = "alex.gaspar.1000@gamil.com";
//   $mail->AddAddress($destino);
//   $mail->AddAddress($destino2);

//   $mail->Subject  = "Enviado.";
//   $mail->Body     = "Enviado.";
//   $mail->WordWrap = 50;

//   if(!$mail->Send()) {
//     echo 'Message was not sent.';
//     echo 'Mailer error: ' . $mail->ErrorInfo;
//   } else {
//     echo 'Message has been sent.';
//   }

      
  
// }
?>