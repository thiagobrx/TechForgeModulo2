<?php
    $to = "thiagolink500@gmail.com"; //destinátario

    $assunto = "Entre em contato";

    $mensagem = $_POST['mensagem']." - ".$_POST['nome'];

    $email = $_POST['email']; //remetente

    $headers[] = 'MIME-Version: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = 'To: $to';
    $headers[] = 'From: $email';

    $status = mail($to, $assunto, $mensagem, implode("\r\n", $headers));

    if($status==true){
        print "Mensagem foi enviada com sucesso!";
    }else{
        print "Não foi possivel enviar!";
    }
?>