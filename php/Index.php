<?php
//llamando a los campos
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];

//datos para el correo

$destinatario ="contacto@bluecleaner.com.mx";
$asunto = "Contacto desde la pagina de inicio bluecleaner.com.mx";

$carta = "De $nombre ";
$carta .= " $apellido \n ";
$carta .= "direccin´: $direccion \n ";
$carta .= "Correo: $correo \n";
$carta .= "Telefono: $telefono \n";

//enviando mensaje
mail($destinatario,$asunto,$carta);

header('Location:../index.html');
echo '<script> 
alert("Su mensaje se ha enviado con exito");   
</script>';
?>