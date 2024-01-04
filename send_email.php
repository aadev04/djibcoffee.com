<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "ahmadialgie34@gmail.com";
    $subject = "Nouvelle demande de formulaire de contact";
    $headers = "From: $email \r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "Nom: $name <br> Email: $email <br> Message: $message";

    mail($to, $subject, $body, $headers);
}
?>
