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


   if($_GET['1questao'] == '1d'){
       $nota++;
   }

if($_GET['2questao'] == '2b'){
       $nota++;
   }

if($_GET['3questao'] == '3c'){
       $nota++;
   }
   
   if($_GET['4questao'] == '4b'){
       $nota++;
   }
   
   if(@$_GET['5questao'] == '5b'){
       $nota++;
   }
   
   if($_GET['6questao'] == '6c'){
       $nota++;
   }
   
   if($_GET['7questao'] == '7d'){
       $nota++;
   }
   
   if($_GET['8questao'] == '8d'){
       $nota++;
   }

    if($_GET['9questao'] == '9e'){
       $nota++;
   }

    if($_GET['10questao'] == '10a'){
       $nota++;
   }
   $busca = mysqli_query($connect,"UPDATE capitulos SET provajavacap3 = '$nota' WHERE idUsuario = '$id'");
   if($nota < 8){
     $busca = mysqli_query($connect,"UPDATE capitulos SET pagina3 = 1 WHERE idUsuario = '$id'");
   }
   setcookie("provaterminada","terminou a prova", time() + 3000, '/');
   header("location:prova-java-cap3");
   endif;
?>