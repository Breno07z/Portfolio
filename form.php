<?php 
$nome = addslashes($_POST('nome'));
$email = addslashes($_POST('email'));
$telefone = addslashes($_POST('telefone'));
$Mensagem = addslashes($_POST('Mensagem'));

$para = 'brenopereira@gmail.com';
$assunto = "Coleta de dados";


$corpo = "Nome: ".$nome."\n". "E-mail: ".$email."\n". "Telefone: ".$telefone."\n". "Mensagem: ".$mensagem;

$cabeca ="from: brenopereira343@gmail.com". "\n". "reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

if(mail($para,$assunto,$corpo,$cabeca)){
  echo("e-mail enviado com sucesso");
}else{
  echo("erro ao enviar o email");
}
?>