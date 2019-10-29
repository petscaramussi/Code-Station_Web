<?php
  include "model/conexao.php";    
  session_start();
    $email = $_SESSION['email'];
    $SQL = "SELECT * FROM cadastro WHERE email = '$email'";
    $buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
    $dado = mysqli_fetch_array($buscar);
    $nome = $dado['nome'];

  header("Content-type: application/vnd.ms-word");
  header("Content-Disposition: attachment;Filename=Certificado de Conclusão.doc");  
  echo "<html>";
  echo "<meta charset='utf-8' /> ";
  echo "<body>";
  echo "<h1 style='text-align:center;font-size:45px'>Certificado de Conclusão!</h1>";
  echo "<h2 style='text-align:center;'>Certificamos que:</h2>";
  echo "<h1 style='text-align:center;font-size:40px'>$nome</h2>";
  echo "<h2 style='text-align:center;'>Concluio Com Exito o Curso de:</h2>";
  echo "<h2 style='text-align:center;color:#fe412e'>JAVA!</h2>";
  echo "</body>";
  echo "</html>";
  ?>