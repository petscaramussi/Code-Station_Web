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
        <title><?php echo $titulo; ?> - Class Java</title>
    <body>
<?php include 'model/navbar2.php';?>
    <section id="java">
      <div class="content" style="line-weight:25px">
          
        <h1 style="color:#fe412e;">Java - Resumo Sobre o Curso</h1>
        <a class="tooltip">"Computadores são inúteis, eles apenas dão respostas"<p class="tooltiptext"  >Uma frase do escultor, ceramista, cenógrafo, poeta e dramaturgo espanhol Picasso</p></a><text style="float:right;margin-right:2.5%">Carga horária: 30 horas</text>
        <p>O Java está na maioria das plataformas, entretanto, muitas pessoas não o conhecem ou sequer sabem que ele existe.</p>
        <p style="text-align:justify">Java é uma <a class="tooltip">Linguagem de Programação<span class="tooltiptext" >Linguagem de programação é basicamente uma linguagem especifica usada na programação ou seja é a "linguagem usada para programar"</span></a>&nbsp&nbsp<a class="tooltip">Orientada a Objeto<span class="tooltiptext"> É uma maneira de programar que tem como foco trazer objetos do mundo real para o digital</span></a>. A característica mais marcante dessa linguagem é que programas criados nele não são compilados em código nativo da plataforma. Programas em Java são compilados para um <a class="tooltip2">ByteCode<span class="tooltiptext">É um código que é transferido por uma máquina virtual, o que permite aos desenvolvedores criarem um programa uma única vez e depois executar este em qualquer uma das plataformas suportadas pela tecnologia.</span></a>. Esta afim de aprender mais sobre esse fantástico mundo e estar por dentro dos seus conceitos como ByteCode ou o que é uma linguagem de programação então venha e embarque nesse incrível curso de Java que vai te impressionar!</p> 
        <a href="javap"><button class="javabtn" style="border-radius:2.4px;
">
            <?php if($java==0):?>Iniciar!<?php elseif($java == 1):?>Continuar!<?php elseif($java == 2):?>Rever Conteudo!<?php endif;?> &nbsp<i class="fab fa-java" style="font-size:1.5em;"></i></button>
          </a>
          
          
       <br><br><br><br>
          <h2 style="text-align:center;">
Comentários sobre o curso de Java</h2><br>
 <!--<div style="float:right">
          <text  name="site" id="site">Disqus&ensp;<i class="fab fa-dyalog"></i></text>
          <text  name="disquis" id="disquis">Site&ensp;<i class="far fa-comments"></i></text>
          </div>
          <br>-->
          <br>
          
          <!--  <div id="comentario1">
          <?php include 'model/comentario2.php' ?>
        </div>-->
          
          
         <div  id="comentario2">
             <?php include 'model/comentario.php';?>
        </div>         
    </section>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>
<?php else: ?>
<?php header("location: https://codestation.cf/"); die('Erro ao Acessar...');?>
<?php endif;?>