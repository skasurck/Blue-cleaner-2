<?php

$errorMSG = "";
$name = $_POST["name"];
$email = $_POST["email"];





$EmailTo = "administracion@bluecleaner.com.mx";
$Subject = "Nuevo Mensaje Corto desde la Página web";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;


// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
    echo '<script language="javascript">alert("Enviado");</script>';
    echo'<script type="text/javascript">
    window.location.href="https://www.bluecleaner.com.mx";
    </script>';
    
}else{
    if($errorMSG == ""){
        echo '<script language="javascript">alert("Error al enviar");</script>';
        echo'<script type="text/javascript">
    alert("Error al enviar");
    window.location.href="https://www.bluecleaner.com.mx";
    </script>';
    } else {
        echo $errorMSG;
    }
}

?>