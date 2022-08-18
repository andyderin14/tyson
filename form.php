<?php


$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$mensaje = $_POST ['mensaje'];



// Como me va a llegar a mi el cuerpo del mensaje al email //


$referencia = "Este mensaje fue enviado por el usuario: " . $nombre . "\r\n";
$referencia .= "Email del usuario: " . $email . "\r\n";
$referencia .= "Mensaje de usuario: " . $_POST ["mensaje"] . "\r\n";
$referencia .= "Enviado el: " . date ("d/m/Y" , time() );


$destinatario = 'andresderin78@gmail.com'; // Email a donde va a llegar el mensaje //
$asunto = 'Este mensaje fue enviado desde la web de Kangre Burguerz'; // Asunto que me va a llegar al emaildesde la página //


mail($destinatario, $asunto , utf8_decode($referencia) , $header);

header('Location.exito.html');


?>