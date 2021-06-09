<?php
    if (isset($_POST['email']) && !empty($_POST['email'])){

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);    
        $telefone = addslashes($_POST['telefone']);

        $destinatario = "rafaelsilveirarafa@gmail.com";
        $assunto = "Contato ENEPET 2021";
        $body = "Nome: " .$nome. "\r\n".
                "Email: " .$email. "\r\n".
                "Telefone" .$telefone. "\r\n" .
                "Mensagem: " .$mensagem. "\r\n";
        $header = "From: rafaelsilver@academico.ufs.br"
                  ."Reply-To: ".$email
                  ."X=mailer:PHP/".phpversion();
        
        if (mail($destinatario, $assunto, $body, $header)){
            echo("Email enviado com sucesso !");
        }else {
            echo("Email não pode ser enviado !");
        }
    }
?>
