<?php 








$nome = addslashes($_POST['name']);
$telefone = addslashes($_POST['telefone']);
$email =  addslashes($_POST['email']);
$mensagem = addslashes($_POST['texto']);



$to = "contato@primesondagem.com";
$subject = "contato - Orçamento sondagem";
$body = "Nome: ".$nome."\r\n".
        "Email:".$email."\r\n".
        "Texto;".$texto;


$header = "From:contato@primesondagem.com"."\r\n".
            "Reply-to:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)) {

    echo("Email enviado com sucesso!");


} else {
    echo("O email não pode ser enviado");


    





}



?>