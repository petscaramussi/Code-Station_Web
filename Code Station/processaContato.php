<?php 

if (empty($_REQUEST['email']) ||  empty($_REQUEST['nome'] ) || empty($_REQUEST['mensagem'])) {
    $msgerro = base64_encode("msg=erro");
    header("location:ajuda?$msgerro");
setcookie("msgcookie","mensagem", time() + 10, '/');
       exit();
   } 
else{
$para = "juliofack007@hotmail.com";
    
$assunto = "Contato";
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensagem'];

$corpo = "<strong>Mensagem de Contato</strong><br><br>";
$corpo .= "<strong>Nome: </strong>$nome";
$corpo .= "<br><strong>Email: </strong>$email";
$corpo .= "<br><strong>Mensagem: </strong>$mensagem";

$header = "Content-Type: text/html; charset= utf-8\n";
$header .= "From: $email Reply-to: $email\n";

@mail($para,$assunto,$corpo,$header);
$msgsucesso = base64_encode("msg=enviada");
setcookie("msgcookie","mensagem", time() + 10, '/');
header("location:ajuda?$msgsucesso");
//. = concatenar 
}
?>