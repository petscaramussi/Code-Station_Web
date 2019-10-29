<?php
session_start();
if(isset($_SESSION['logado'])):
include "model/conexao.php";
include "model/retiraextensao.php";
@$pesquisar = $_POST['pesquisa'];
@$resultado = "SELECT * FROM cadastro WHERE nome = '$pesquisar' ORDER BY nome";
$buscar = mysqli_query($connect,$resultado);
$total = mysqli_num_rows($buscar); 
if(is_numeric($pesquisar)){
	$resultado = "SELECT * FROM cadastro WHERE id LIKE '$pesquisar%' ORDER BY nome";
    $buscar = mysqli_query($connect,$resultado);
    $total = mysqli_num_rows($buscar); 
}
if($total == 0):
    header("location:configuracao?msg=errop");
    ?>
    <script>window.location.replace('configuracao?msg=errop');</script>
    <?php
    
elseif($total > 1):
    include "model/header.php";
     include "model/expiraLogin.php";?>
    <title><?php echo $titulo; ?> - Class Procurar Amigo!</title>
    <body style="visibility:hidden" >

<?php include 'model/navbar3.php';?>
    <section id="java">
      <div class="content">
        <h1 style="color:#0b208e">Aba de Procura!</h1><br><br>
       <div  class="conteiner">
 <table>
    <?php $valorform = 0;
    while($pessoas = mysqli_fetch_array($buscar)){
    $valorform += 1;?>
    <form id="form<?php echo $valorform?>" method="POST" action:"pesquisar">
    <tr>
        <input class="text" name="pesquisa" type="text" value="<?php echo $pessoas['id']?>">
    <td><a onClick="document.getElementById('form<?php echo $valorform?>').submit();"><img class="imgPerfil" src="<?php echo $pessoas['fotos'];?>"></td></a>
    <td class="perfil"><text><a onClick="document.getElementById('form<?php echo $valorform?>').submit();"><?php echo $pessoas['nome']?></text></td></a>
    </tr>
    <td class="space"></td>
    </form>
    <?php } ?>
</table>
    </div>
          <br>
          <br>
        <text style="color:#0b208e;font-weight:bolder;">Você esta na aba de pesquisa, Caso queira voltar para o seu <a style="color:black; text-decoration: underline;" href="configuracao">Clique Aqui!</a></text>
        </div>
    </section>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>
<script>
    onload=function(){
document.body.style.visibility="visible"
}
</script>

      <style>
      td text{
          cursor:pointer;
      }
      .text{
          display:none;
      }
      .space{
         height:15px;
      }
      .conteiner{
          margin-top:30px;
          margin-left:30px;
      }
        .imgPerfil{
    width:128px;
    height:128px;
    border-radius:50%;
    border:3px solid black;
    overflow: hidden;
    cursor:pointer;
}
    .perfil{
        position:absolute;
        font-size:20px;
        font-weight:bolder;
        color:#0b208e;
        margin-top:55px;
        margin-left:10px;
    }
    </style>
<?php
else:
    $dados = mysqli_fetch_array($buscar); 
    $imagem = $dados['fotos'];
    $nome = $dados['nome'];
    $email = $dados['email'];
    $java = $dados['java'];
    include "model/expiraLogin.php";?>
<html>
<?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Perfil</title>
    <body style="visibility:hidden">
<?php include 'model/navbar3.php';?>
    <section id="java">
      <div class="content">
        <h1 style="color:#0b208e">Perfil de <?php echo $nome?></h1><br><br>
<form method="POST" action="alterarInformacao.php" enctype="multipart/form-data">
    <div id="imagem">
        <label title="Foto de <?php echo $nome ?>" for="foto">
    <img class="imgPerfil" src="<?php echo $imagem?>">
    </label>
    </div>
    <div class="info">
        <input type="hidden" name="id" value="<?php echo $id?>">
    <text class="perfil">Nome: </text><input disabled value="<?php echo $nome?>" title="Nome(Completo)" id="nome" name="nome" required="required" type="text" placeholder="Nome"/></text><br><br>
    <text class="perfil">Cursos: </text><text style="color:#fe412e;font-size:20px;font-weight:bolder">Java, </text><?php if($java == 0):?><text style="color:red;font-size:20px;font-weight:bolder">Não Começou</text><?php elseif($java==1):?><text style="color:#f57f17;font-size:20px;font-weight:bolder">Cursando</text><?php elseif($java == 2):?><text style="color:green;font-size:20px;font-weight:bolder">Feito!</text><?php endif?><br><br>
    </div>
</form>
          <br>
          <br>
          <br>
        <text style="color:#0b208e;font-weight:bolder;">Você esta vendo o  perfil de <?php echo $nome ?>, Caso queira voltar para o seu <a style="color:black; text-decoration: underline;" href="configuracao">Clique Aqui!</a></text>
        </div>
    </section>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>
<script>
    onload=function(){
document.body.style.visibility="visible"
}
</script>

<style>

#imagem label{
    width:0px;
}
     .sucesso{
        text-align:center;
        border:5px solid #2e7d32   ;
        background-color: #2e7d32  ;
        color: white;
        position: absolute;
        margin:0;
        top:545px;
        left:0;
        right:0;
    }
    
    .erro{
        text-align:center;
        border:5px solid #d2322d  ;
        background-color: #d2322d ;
        color: white;
        position: absolute;
        margin:0;
        top:545px;
        left:0;
        right:0;
    }

.imgPerfil{
    width:256px;
    height:256px;
    border-radius:50%;
    overflow: hidden;
    cursor:default;
}

input[type=text]:disabled {
  background-color: white;
  border:none;
  color: black;
  cursor:text;
}

input
{
    border:1px solid #ccc;
}
    h1{
        text-align:left;
    }
    h2{
        text-align:left;
    }
    #nome{
        width:365px;
        font-size:20px;
    }
    .info{
        width:500px;
        margin-left:320px;
        margin-top:-175px;
        position:absolute;
    }
    .perfil{
        font-size:20px;
        font-weight:bolder;
        color:#0b208e;
    }
</style>



<?php 
endif;
else:header("location:entrar");
endif;?>