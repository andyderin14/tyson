<h1>Titulo de la pagina</h1>



<?php


$nombre = $_POST ['name'];
$apellido = $_POST ['lastname'];
$email = $_POST ['email'];
$mensaje = $_POST ['textarea'];



// Como me va a llegar a mi el cuerpo del mensaje al email //


$body = "Este mensaje fue enviado por el usuario: " . $nombre . $apellido "\r\n";
$body .= "Email del usuario: " . $email . "\r\n";
$body .= "Mensaje de usuario: "  . $mensaje . "\r\n";
$body .= "Enviado el: " . date ("d/m/Y" , time() );


$destinatario = 'andresderin78@gmail.com'; // Email a donde va a llegar el mensaje //
$asunto = 'Este mensaje fue enviado desde la web de Kangre Burguerz'; // Asunto que me va a llegar al emaildesde la página //
$header = 'Tyson';

mail($destinatario, $asunto , utf8_decode($body) , $header);

header('location:exito.html');




// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//           $nombre = $_POST ['name'];
//           .
//           $return = mail($destinatario, $asunto , utf8_decode($referencia));
//           }

//           if ($mailReturn == true) {
//                     echo "<div id = \"success\">E-mail enviado con éxito</div>";
//                     } else {
//                       echo "<div id = \"fail\">E-mail cannot be sended.</div>";
//                     }      

?>