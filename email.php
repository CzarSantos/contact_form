<?php

if(isset($_POST['email']) && !empty($_POST['email'])){/* se for preenchido e não preenchido com valor vazio */

$nome = addslashes($_POST['name']);/* pega nome digitado no formulario */
$email = addslashes($_POST['email']);
$mensagem = addslashes($_POST['message']);

/* direcionar email/estrutura*/
$to = "teste.com";/* email que será enviado a msg */
$subject = "Contato - Site Pessoal";
$body = "Nome: ".$nome. "\n".
        "Email: ".$email. "\n".
        "Mensagem: ".$mensagem;
$header = "From: teste@outlook.com"."\r\n".
            "Reply-To:".$email."\r\n"./* Reply-to Responder para o email que enviou a msg */
            "X=Mailer:PHP/".phpversion();/* Concatenando versão do PHP */

/* chamar função */
if(mail($to,$subject,$body,$header)){/* retorna true or false */
    echo("Email enviado!");
}else{
    echo("Email não enviado");
}

}

?>