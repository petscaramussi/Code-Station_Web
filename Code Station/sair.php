<?php 
session_start();


include 'model/conexao.php';
$email = $_SESSION['email'];
$SQL = "UPDATE cadastro SET logado = '0'  WHERE email = '$email'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");

unset($_SESSION['logado']);
unset($_SESSION['email']);
session_destroy();
unset($_COOKIE['manterConexao']);
setcookie('manterConexao', null, -1, '/');
header("location:https://codestation.cf/");
?>