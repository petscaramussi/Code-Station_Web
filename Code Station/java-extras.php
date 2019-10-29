<?php 
@session_start();
if(isset($_SESSION['logado'])): 
include "model/conexao.php";
include 'model/expiraLogin.php';
include "model/retiraextensao.php";
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$java = $dado['java'];
$id = $dado['id'];
?>

<html>
<?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Java Extras</title>
    <body style="visibility:hidden">
<?php include 'model/navbar2.php';?>
    <section id="java">
      <div class="content" style="line-weight:25px">
        <h1 style="color:#fe412e">Java - Extras</h1>
        <br><br>
      <div id="colapsion">
 <button style="background-color:#fe412e" class="collapsible">Instalação do Java (JDK)</button>
<div style="background-color:white" class="content">
  <p style="background-color:white;">
     <iframe src="JDK.pdf" width="100%" height="680" style="border: none;"></iframe>
  </p>
    </div>  
    <br><br> 
    </section>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>
<?php include 'model/colapsion.php'; ?>
<script>
    onload=function(){
document.body.style.visibility="visible"
}
</script>
<?php else: ?>
<?php header("location:https://codestation.cf/"); die('Erro ao Acessar...');?>
<?php endif;?>