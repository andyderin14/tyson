<?php


$nombre = $_POST ['nombre'];
$mensaje = $_POST ['mensaje'];


// Como me va a llegar a mi el cuerpo del mensaje al email //


$mensaje = "Este mensaje fue enviado por el usuario: " . $nombre . "\r\n";
$mensaje .= "Mensaje de usuario: " . $_POST ["mensaje"] . " \r\n";
$mensaje .= "Enviado el: " . date ("d/m/Y" , time() );


$destinatario = 'andresderin78@gmail.com'; // Email a donde va a llegar el mensaje //
$asunto = 'Este email fue enviado desde la web de Kangre Burguerz'; // Asunto que me va a llegar al emaildesde la página //


mail($destinatario, $asunto , utf8_decode($mensaje) , $header);

header('Location:exito.html');


?>