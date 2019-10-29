<?php 
session_start();
if(isset($_SESSION['logado'])): 
include 'model/expiraLogin.php';
include 'model/verifica_login.php';
include "model/retiraextensao.php";
include 'model/conexao.php';
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$logado = $dado['logado'];
$id  = $dado['id'];
?>
<html>
    



    <?php if($logado==0){?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script> 
   <?php } ?>
    <?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Main</title>
    <body>  
    <?php include 'model/navbar.php';?>
    <section id="pagina">
      <div class="content">
        <h1 style="color:#26b3fb">O que é o <?php echo $titulo?></h1> 
        <p style="line-weight:25px;text-align:justify;">
            O Code Station é um projeto idealizado e esquematizado por seis jovens programadores. Visando levar a programação para as pessoas que não a conhecem ou que querem aperfeiçoar suas habilidades. Temos preferência para os usuários que estão na faixa etária de 12 ~ 18 anos. O Code Station estará online numa página web, será uma plataforma de e-learning, com foco na linguagem Java; futuramente, pretendemos acrescentar mais algumas linguagens: Elixir e SQL. Trazendo a melhor sintaxe possível, de forma mais limpa e organizada para que todos os nossos alunos consigam entender o conteúdo sem muitas dificuldades.
</p>
<br><br>
          <h2 style="text-align:center;">Comentários sobre a plataforma</h2>
          
         <!-- <div style="float:right">
          <text  name="site" id="site">Disqus&ensp;<i class="fab fa-dyalog"></i></text>
          <text  name="disquis" id="disquis">Site&ensp;<i class="far fa-comments"></i></text>
          </div>-->
          <br>
          
            <!-- <div id="comentario1">
          <?php include 'model/comentario2.php' ?>
        </div>-->
          
          
         <div id="comentario2">
             <?php include 'model/comentario.php';?>
        </div>
        
    
        <?php if($logado == 0):?>
        <script>
        
        const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000
});

Toast.fire({
  type: 'success',
  title: 'Logado com sucesso'
})
        </script>
        <?php
        $SQL = "UPDATE cadastro SET logado = '1'  WHERE email = '$email'";
        $buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
        ?>
        <?php endif;?>
    </section>
  <?php include 'model/footer.php';?>
    <?php include 'model/scriptsjava.php';?>
    </body>
</html>
<?php else: 
header("location:https://codestation.cf/pagina");?>
<?php endif;?>