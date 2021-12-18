<?php

$errorMSG = "";

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$city = $_POST["city"];
$zip = $_POST["zip"];

/*
// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Nombre Requerido ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email Requerido ";
} else {
    $email = $_POST["email"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Requiere un mensaje ";
} else {
    $message = $_POST["message"];
}

*/
$EmailTo = "administracion@bluecleaner.com.mx";
$Subject = "Nuevo mensaje largo desde la Página web";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Télefono: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "Dirección: ";
$Body .= $address;
$Body .= "\n";
$Body .= "Ciudad: ";
$Body .= $city;
$Body .= "\n";
$Body .= "Codigo Postal: ";
$Body .= $zip;
$Body .= "\n";
$Body .= "Mensage: ";
$Body .= $message;
$Body .= "\n";

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