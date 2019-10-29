<?php 
include 'model/conexao.php';
session_start();//inicia sessão
date_default_timezone_set('America/Sao_Paulo');

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
}
if (isset($_POST['email'])) {
    $email = $_POST['email'];
}
if (isset($_POST['senha'])) {
    $senha = md5($_POST['senha']);
}

@$nome = $_POST['nome'];
@$email = $_POST['email'];
@$senha = md5($_POST['senha']);

setcookie("msgcookie","mensagem", time() + 10, '/');

if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
}
// Se nenhum valor foi recebido, o usuário não realizou o captcha

$query_select = "SELECT email FROM cadastro WHERE email = '$email'";

$select = mysqli_query($connect,$query_select);
$linhas = mysqli_num_rows($select);
$array = mysqli_fetch_array($select);
@$logarray = $array['$email'];
  if($email == "" || $email == null || $senha == "" || $senha == null || $nome == "" || $nome == null):
      $msgempty = base64_encode("msg=erroe");
    header("location:registrar?$msgempty");
    
        die();
else:
      if($logarray == $email):
        $msgerroj = base64_encode("msg=erroj");
           header("location:entrar?$msgerroj");
        die();
 
      else:
       
         
        if(!empty($captcha_data) && !empty($nome) && !empty($email) && !empty($senha) && $linhas == 0):
             $data_expirar = date('Y-m-d H:i:s ', time());

            $query = "INSERT INTO cadastro (senha,email,nome,dataCadastro) VALUES ('$senha','$email','$nome','$data_expirar')";
            $insert = mysqli_query($connect,$query);
            $insert = mysqli_query($connect,$query);
            $sucesso = base64_encode("msg=sucesso");
            header("location:entrar?$sucesso");
        else:
            $errobc = base64_encode("msg=errobc");
            header("location:registrar?$errobc");
            
            die();
            exit;
        endif;
        endif;
        endif;
?> 