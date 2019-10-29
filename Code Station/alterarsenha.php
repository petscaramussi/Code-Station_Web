<?php
@session_start();
if(isset($_SESSION['logado'])):
include "model/retiraextensao.php";
include 'model/conexao.php';
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$id = $dado['id'];
$imagem = $dado['fotos'];

include 'model/expiraLogin.php';

?>
<html>
<?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Alterar Senha</title>
    <body>
    <?php
    if(isset($_GET['msg'])):
              $msg = $_GET['msg'];
              if($msg == "erroe"): ?>
          <h1 class="erro">Insira os dados nos campos</h1><?php
              endif;
                  if($msg == "erros"): ?>
          <h1 class="erro">Senha incorreta ou nvalida</h1><?php
              endif;
              endif;
              ?>
<?php include 'model/navbar3.php';?>
    <section id="java">
      <div class="content">
        <h1 style="color:#0b208e">Alterar senha</h1><br><br>

<form method="POST" id="alterarsenha" action="alterarsenhaform.php" enctype="multipart/form-data">
    <div id="imagem">
    <img class="imgPerfil" src="<?php echo $imagem?>">
    </div>
    <div class="info">
        <input type="hidden" name="id" value="<?php echo $id?>">
    <text class="perfil">Senha Antiga: </text><input title="Senha Antiga" id="senhaAntiga" name="senhaAntiga" required="required" type="password" placeholder="Senha Antiga"/></text><br><br><br>
    <text class="perfil">Nova Senha: </text><text><input style="margin-left:11px" id="senhaNova" title="Senha Nova" type="password"  name="senhaNova" required="required"  placeholder="Senha Nova"/></text>
    <br><br><br>
    <a style="position:absolute;left:-62%;top:120%" href="configuracao" class="configbtn"><i class="fas fa-angle-double-left"></i>&ensp;Voltar</a>
      <button type="button" id="alterar" style="margin-right:5px;margin-top:5px;margin-bottom:25px;width:495px;"  class="configbtn" style="border-radius:2.4px;
">Alterar Senha &nbsp<i class="far fa-check-circle"></i></button>
    </div>
</form>
          <br>
          <br>
          <br>
          <br>
         
        </div>
    </section>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>

<style>
<?php include 'model/form.css'; ?>
</style>

<script>
    document.getElementsByTagName("button")[0].disabled = true; 

$( "#senhaAntiga" ).keyup(function() {
  disabled();
}); 
$( "#senhaNova" ).keyup(function() {
  disabled();
});

function colocarDisabled() {
    document.getElementsByTagName("button")[0].disabled = true; 
}
function retirarDisabled() {
    document.getElementsByTagName("button")[0].disabled = false; 
}

function disabled(){
var senhaAntiga = document.getElementsByTagName("input")[1].value;
var senhaNova = document.getElementsByTagName("input")[2].value;

if(senhaAntiga != ""  && senhaNova != ""){
    retirarDisabled();
}
else{
    colocarDisabled();
}
}


     $('#alterar').click(function(){
swal({
  title: "Você tem certeza que deseja alterar suas informações?",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Cancelar mudança", "Tenho certeza"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando...", {
      icon: "success",
      buttons:false,
    });
    setTimeout("document.forms['alterarsenha'].submit()",1500);
  } else {
    
  }
});
});   
    
</script>

<style>
input:-moz-placeholder {
	color: #999;
}
input::-webkit-input-placeholder {
	color: #999;
}

     .sucesso{
         font-size:25px;
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
         font-size:25px;
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
    .info button{
        margin-top:20px;
        margin-right:90px;
 
    }
    
    .info button:disabled{
        color:grey;
        border-color:grey;
        background-color:white;
        cursor: default;
    }
    #nome{
        width:365px;
    }#email{
        width:365px;
    }
    .info{
        width:500px;
        margin-left:320px;
        margin-top:-230px;
        position:absolute;
    }
    .perfil{
        font-size:20px;
        font-weight:bolder;
        color:#0b208e;
    }
</style>
<?php else: 
header("location: https://codestation.cf/");
endif;?>