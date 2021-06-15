<?

    # alterar a variavel abaixo colocando o seu email

    $destinatario = "rafaelsilveirarafa@gmail.com";

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $mensagem = $_REQUEST['mensagem'];
    $telefone = $_REQUEST['telefone'];
    $assunto = $_REQUEST['assunto'];

     // monta o e-mail na variavel $body

    $body = "===================================" . "\n";
    $body = $body . "FORMULARIO DE CONTATO - ENEPET 2021" . "\n";
    $body = $body . "===================================" . "\n\n";
    $body = $body . "Nome: " . $nome . "\n";
    $body = $body . "Email: " . $email . "\n";
    $body = $body . "Mensagem: " . $mensagem . "\n";
    $body = $body . "Telefone: " . $telefone . "\n\n";
    $body = $body . "===================================" . "\n";

    // envia o email
    mail($destinatario, $assunto , $body, "From: $email\r\n");

    // redireciona para a página de obrigado
    header("location:index.html");


    ?>
