<?php 
include "model/conexao.php";

session_start();//inicia sessão
//VERIFICA SE A VARIAVEL ESTA VAZIA
   if (empty($_POST['senhaAntiga']) ||  empty($_POST['senhaNova'] )) {
    header("location:alterarsenha?msg=erroe");
       exit();
   } 
//SQL INJECTION

$senha_antiga = mysqli_real_escape_string( $connect,$_POST['senhaAntiga']);
$senha_nova = mysqli_real_escape_string($connect,$_POST['senhaNova']);  
$id = mysqli_real_escape_string($connect,$_POST['id']); 
$msg = 0;


$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE id = '$id'");
$dado = mysqli_fetch_array($busca);
$senha = $dado['senha'];

if(md5($senha_antiga) == $senha){

$senhacript = md5($senha_nova);
//ATUALIZAÇÂO NO BANCO DE DADOS
$SQL = "UPDATE cadastro SET senha = '$senhacript' WHERE id = '$id'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
 
//REDIRECIONAMENTO
header("location:configuracao?msg=sucesso");
}
else{
    header("location:alterarsenha?msg=erros");
}

?>