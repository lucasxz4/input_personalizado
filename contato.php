<?php 
    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone'])

    $to = "lucas598617@gmail.com";
    $assunto = "Coleta de dados";

    $corpo = "Nome: ".$nome. '\n'. "E-mail: ".$email. '\n'. "Telefone: ".$telefone;

    $cabeca = "From: lucas598617@gmail.com".'\n'."Reply-to: ".$email.'\n'."X-Mailer:PHP/".phpversion();

    if (mail($to,$assunto,$corpo,$cabeca)) {
        echo("E-mail enviado com sucesso!");
    } else {
        echo("Erro!")
    }
?>