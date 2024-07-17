<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email_to = "sergiobasso1924@gmail.com";
    $email_subject = "Novo inscrito na newsletter";

    $email_from = $_POST['email'];

    $email_message = "Novo email adicionado à lista de contatos: " . $email_from;

    // Headers
    $headers = "From: " . $email_from . "\r\n";
    $headers .= "Reply-To: " . $email_from . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Send email
    mail($email_to, $email_subject, $email_message, $headers);

    // Redirect back to your HTML page
    header('Location: index.html');
}
?>
