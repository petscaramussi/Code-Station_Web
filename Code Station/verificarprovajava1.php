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


   if($_GET['1questao'] == '1a'){
       $nota++;
   }

if($_GET['2questao'] == '2b'){
       $nota++;
   }

if($_GET['3questao'] == '3a'){
       $nota++;
   }
   
   if($_GET['4questao'] == '4c'){
       $nota++;
   }
   
   if(@$_GET['5questao'] == '5d'){
       $nota++;
   }
   
   if($_GET['6questao'] == '6d'){
       $nota++;
   }
   
   if($_GET['7questao'] == '7b'){
       $nota++;
   }
   
   if($_GET['8questao'] == '8c'){
       $nota++;
   }

    if($_GET['9questao'] == '9b'){
       $nota++;
   }

    if($_GET['10questao'] == '10a'){
       $nota++;
   }
   $busca = mysqli_query($connect,"UPDATE capitulos SET provajavacap1 = '$nota' WHERE idUsuario = '$id'");
   if($nota < 8){
     $busca = mysqli_query($connect,"UPDATE capitulos SET pagina = 1 WHERE idUsuario = '$id'");
   }
   setcookie("provaterminada","terminou a prova", time() + 3000, '/');
   header("location:prova-java-cap1");
   endif;
?>