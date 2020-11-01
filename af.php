<?php

if(isset($_POST['email']) && !empty($_POST['email'])) { 

$name = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$campo = addcslashes($_POST['campo']);

$to = "Paulosantos1799@outlook.com";
$subject = " Aprendendo a usar o  formulário !";
$body = 'Nome: '.$nome. '\n'.
        'Mensagem: '.$campo. '\n'.
        'Email: '.$email. '\n';

$header = "From:Paulosantos1799@outlook.com"."\n"."Reply-To:".$email."\n"."X=Mailer:PHP/".phpversion();

       if(mail($to,$subject,$body,$header)){
          
        echo("Email enviado com sucesso!");
        
       }else {
               echo("Houve um erro !");
       }
}
?>