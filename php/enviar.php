<?php
//llamando a los campos
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$mensaje = $_POST["mensaje"];

//datos para el correo

$destinatario ="contacto@bluecleaner.com.mx";
$asunto = "Contacto desde la web bluecleaner.com.mx";

$carta = "De $nombre \n ";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Mensaje $mensaje";

//enviando mensaje
mail($destinatario,$asunto,$carta);
header('Location:../index.html');
?>