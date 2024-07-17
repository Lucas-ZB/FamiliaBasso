<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

    // Destinatário do e-mail
    $destinatario = "sergiobasso1924@gmail.com";

    // Cabeçalhos do e-mail
    $headers = "De: $nome <$email>" . "\r\n";
    $headers .= "Responder a: $email" . "\r\n";
    $headers .= "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Mensagem do e-mail
    $mensagem_email = "
    <html>
    <head>
    <title>Formulário de Contato</title>
    </head>
    <body>
    <h2>Detalhes do Formulário de Contato:</h2>
    <p><strong>Nome:</strong> $nome</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Assunto:</strong> $assunto</p>
    <p><strong>Mensagem:</strong> $mensagem</p>
    </body>
    </html>
    ";

    // Enviar e-mail
    if (mail($destinatario, $assunto, $mensagem_email, $headers)) {
        echo "Sua mensagem foi enviada com sucesso.";
    } else {
        echo "Desculpe, houve um problema ao enviar sua mensagem.";
    }
}
?>
