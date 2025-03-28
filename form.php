<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST['nome'] ?? '';
    $email = $_POST['email'] ?? '';
    $celular = $_POST['celular'] ?? '';
    $mensagem = $_POST['mensagem'] ?? '';


    $para = "Sthefanialima2025@icloud.com";
    

    $assunto = "Novo contato do portfólio: $nome";
    

    $corpo = "
    <html>
    <head>
        <title>Novo contato do portfólio</title>
        <style>
            body { font-family: Arial, sans-serif; line-height: 1.6; }
            .dados { background-color: #f4f4f4; padding: 20px; border-radius: 5px; }
            .dados p { margin: 10px 0; }
        </style>
    </head>
    <body>
        <h2>Você recebeu um novo contato!</h2>
        <div class='dados'>
            <p><strong>Nome:</strong> $nome</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Celular:</strong> $celular</p>
            <p><strong>Mensagem:</strong></p>
            <p>$mensagem</p>
        </div>
    </body>
    </html>
    ";
    

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: $nome <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    

    $enviado = mail($para, $assunto, $corpo, $headers);
    

    if ($enviado) {
        echo "<script>alert('Mensagem enviada com sucesso!'); window.location.href = 'index.html';</script>";
    } else {
        echo "<script>alert('Erro ao enviar mensagem. Tente novamente mais tarde.'); window.location.href = 'index.html';</script>";
    }
} else {

    header("Location: index.html");
}
?>