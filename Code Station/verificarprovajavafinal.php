<?php 
session_start();
if(isset($_SESSION['logado'])):
    
$nota = 0;
    
include "model/conexao.php";
include "model/retiraextensao.php";
include 'model/expiraLogin.php';

$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$id = $dado['id'];


   if($_GET['1questao'] == '1c'){
       $nota++;
   }

if($_GET['2questao'] == '2a'){
       $nota++;
   }

if($_GET['3questao'] == '3a'){
       $nota++;
   }
   
   if($_GET['4questao'] == '4a'){
       $nota++;
   }
   
   if(@$_GET['5questao'] == '5a'){
       $nota++;
   }
   
   if($_GET['6questao'] == '6d'){
       $nota++;
   }
   
   if($_GET['7questao'] == '7a'){
       $nota++;
   }
   $busca = mysqli_query($connect,"UPDATE capitulos SET provajavafinal = '$nota' WHERE idUsuario = '$id'");
    if($nota >= 6){
     $busca = mysqli_query($connect,"UPDATE cadastro SET java = 2 WHERE id = '$id'");
   }
   setcookie("provaterminada","terminou a prova", time() + 3000, '/');
   header("location:prova-java-final");
   endif;
?>