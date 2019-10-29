<?php
@session_start();
if(isset($_SESSION['logado'])):
include 'model/conexao.php';
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$java = $dado['java'];
$nome = $dado['nome'];
$senha = $dado['senha'];
$id = $dado['id'];
$imagem = $dado['fotos'];

include 'model/expiraLogin.php';

include "model/retiraextensao.php";
?>
<html>
<?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Perfil</title>
    <body>
    <?php
    if(isset($_REQUEST['msg'])):
              $msg = $_REQUEST['msg'];
              if($msg == "sucesso"): ?>
          <h1 class="sucesso">Configuração Atualizada com Sucesso!</h1><?php
              endif;
              if($msg == "erro"): ?>
          <h1 class="erro">Erro ao Atualizar a Conta!</h1><?php
              endif;
                  if($msg == "tipo"): ?>
          <h1 class="erro">Tipo de Imagem Invalido!Use(JPEG,PNG,JPG,GIF)</h1><?php
              endif;
               if($msg == "tamanho"): ?>
          <h1 class="erro">Arquivo muito grande Tamanho Maximo 2MB</h1><?php
              endif;
               if($msg == "errop"): ?>
          <h1 class="erro">Nenhum Usuario foi Encontrado!</h1><?php
              endif;
              endif;
              ?>
<?php include 'model/navbar3.php';?>
    <section id="java">
      <div class="content">
        <h1 class="t1" style="color:#0b208e">Perfil</h1><br><br>
        <div class="pesquisa">
        
       <form method="POST" action="pesquisar">
        <input id="pesquisa" class="pesquisa" type="search" minlength=3 title="Procure seus Amigos(Nome)" pattern="^[A-Za-zÀ-ú\s]+$" required name="pesquisa" placeholder="Procure seus amigos!">
        </form>
        
<form method="POST" id="informacao" action="alterarInformacao" enctype="multipart/form-data">
    <div id="imagem">
        <label title="Mudar foto" for="foto">
            <div class="container">
    <img class="imgPerfil" src="<?php echo $imagem?>">
  <div class="overlay">
    <div class="text">Editar imagem de perfil</div>
  </div>
</div>
    </label>
    <input  name="foto" id="foto" type="file">
    </div>
    <div class="info" id"infomedia">
        <input type="hidden" name="id" value="<?php echo $id?>">
    <text class="perfilNome">Nome: </text><input  value="<?php echo $nome?>" title="Nome(Completo)" id="nome" name="nome" required="required" type="text" placeholder="Nome"/></text><br><br>
    <text class="perfilEmail">Email:&ensp;</text><text><input title="Seu Email" id="email" value="<?php echo $_SESSION['email']?>"  name="email" required="required" type="email" placeholder="Email"/></text>
  <br><br>
    
    <text title="Cursos Sendo Feitos" class="perfilCurso">Cursos: </text><text class="status" style="color:#fe412e;font-size:20px;font-weight:bolder">Java, </text><?php if($java == 0):?><text class="statusC" style="color:red;font-size:20px;font-weight:bolder">não começou</text><?php elseif($java==1):?><text class="statusC" style="color:#f57f17;font-size:20px;font-weight:bolder">cursando</text><?php elseif($java == 2):?><text class="statusC" style="color:green;font-size:20px;font-weight:bolder">feito!</text><?php endif?><br><br>
<div class="botoes">   
<button type="button" id="finalizar" disabled  class="configbtn" style="border-radius:2.4px;
">Confirmar alteração &nbsp<i class="far fa-check-circle"></i></button>

 <a id="alterarsenha"  class="configbtn alterbtn" style="border-radius:2.4px;
">Alterar senha &nbsp<i class="fas fa-cogs"></i></a>
</div> 
    </div>
</form>
          <br>
          <br>
        </div>
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

    $( "#foto" ).change(function() {
  disabled();
});   
$( "#nome" ).keyup(function() {
  disabled();
}); 
$( "#email" ).keyup(function() {
  disabled();
});
    
        
     $('#finalizar').click(function(){
swal({
  title: "Você tem Certeza que quer alterar suas informações?",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Cancelar Mudança", "Tenho certeza!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
    });
    setTimeout("document.forms['informacao'].submit()",1500);
  } else {
    
  }
});
});   

var nomePagina = document.getElementsByTagName("input")[3].value;
var emailPagina = document.getElementsByTagName("input")[4].value;



function colocarDisabled() {
    document.getElementsByTagName("button")[0].disabled = true; 
}
function retirarDisabled() {
    document.getElementsByTagName("button")[0].disabled = false; 
}

function disabled(){
var imagemPagina = document.getElementsByTagName("input")[1].value;
var nomePaginaReal = document.getElementsByTagName("input")[3].value;
var emailPaginaReal = document.getElementsByTagName("input")[4].value;
if(nomePagina != nomePaginaReal  || emailPagina != emailPaginaReal || imagemPagina != ""){
    retirarDisabled();
}
else{
    colocarDisabled();
}
}
    

$('#alterarsenha').click(function(){
swal({
  title: "Você tem Certeza?",
  text: "Você tem certeza de que quer alterar a sua senha?",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Não tenho certeza", "Tenho certeza!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
    });
    setTimeout("document.location = 'alterarsenha'",1500);
  } else {
    
  }
});
}); 
    
</script>
<style>

.t1{
    margin-left:3%;
}

input[type=search] {
	-webkit-appearance: textfield;
	-webkit-box-sizing: content-box;
	font-family: inherit;
	font-size: 100%;
	outline:none;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
	display: none; 
}

input[type=search] {
    
	background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
	border: solid 1px #ccc;
	padding: 9px 10px 9px 32px;
	width: 55px;
	-webkit-border-radius: 10em;
	-moz-border-radius: 10em;
	border-radius: 10em;
	position:absolute;
	margin-left:370px;
	margin-top:-88px;
	width: 315px;
	-webkit-transition: all .5s;
	-moz-transition: all .5s;
	transition: all .5s;
}
input[type=search]:focus {
	background-color: #fff;
	border-color: blue;
	
	-webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
	-moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
	box-shadow: 0 0 5px rgba(109,207,246,.5);
}


input:-moz-placeholder {
	color: #999;
}
input::-webkit-input-placeholder {
	color: #999;
}



#imagem label{
    width:0px;
}

.alterbtn{
    background-color:#ff8f00   ;
    border-color:#ff8f00   ;
    margin-right:91px;
    width:352px;
    color:white;
    margin-bottom:25px;
}
.alterbtn:active{
    background-color:#ff6f00 ;
    border-color:#ff6f00 ;
}
.alterbtn:hover{
    background-color:#ff6f00 ;
    border-color:#ff6f00 ;
}

input[type='file'] {
  display: none;
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
    cursor:pointer;
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
        margin-top:-225px;
        position:absolute;
    }
    .perfil{
        font-size:20px;
        font-weight:bolder;
        color:#0b208e;
    }
    .container {
  position: relative;
  width: 50%;
}

.image {
  width: 100%;
  border-radius:50%;
  height: auto;
}

.overlay {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  z-index:100;
  height: 256px;
  width: 256px;
  opacity: 0;
  transition: .5s ease;
  background-color:#777;
  border-radius:50%;
  cursor: pointer;
}

.container:hover .overlay {
  opacity: 0.95;
}

.text {
  color: white;
  font-size: 15px;
  position: absolute;
  top: 50%;
  margin-left:120px;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}


@media screen and (max-width:320px){



input
{
    border:1px solid #ccc;
    font-size:16px;
}
  
    .imgPerfil{
        position: relative;
        width: 128px;
        height:100px;
        margin-top: -40px;
        left:85px;
    }
    .overlay{
        display:none;
    }
    
    .t1{
       display: none;
    }
    h1{
        margin-right:-5%;
    }
    
    .textperfil{
        position:absolute;
        top: 260%;
        font-size: 10px;
    }
    
    #comentario{
        position:relative;
        margin-top:300px;
    }
    
    .pesquisa{
        position:absolute;
        top:150%;
        left: -100%;
        margin-top:90px;
        font-size: 14px;
        max-width:60%;
    }
    
    .perfilNome{
        position:absolute;
        top:240%;
        
    }
    
    .perfilEmail{
        position:absolute;
        top:290%;
    }
    
    .perfilCurso{
        position:absolute;
        top:340%;
    }
    
    .status{
        position:absolute;
        top:340%;
        left: 20%;
    }
    .statusC{
         position:absolute;
        top:340%;
        left: 30%;
    }

  .info{
      position: absolute;
      top: 160%;
      margin-left: 0%;
  }
    #nome{
        position:absolute;
        max-width:45%;
        margin-left:10%;
        top: 240%;
    }  
    #email{
        position:absolute;
        max-width:45%;
        margin-left:10%;
        top: 280%;
    }
    #finalizar{
        position:absolute;
        width:55%;
        margin-left:2.5%;
    }
    #alterarsenha{
        position:absolute;
        width:47%;
        top:440%;
        margin-left:2.5%;
    }
    #finalizar{
        color: white;
        background-color: #2E8B57;
        margin-top:5px;
        margin-bottom:20px;
        width:50%;
        top:400%;
        
    }
    
}
@media screen and (max-width:600px){
    
    body{
    }
    .t1{
        position: relative;
        margin-left:80px; 
        margin-bottom:100px;
     }
    #nome{
        position: absolute;
        top: 200%;
        right: 75%;
        
    }
     #email{
        position:absolute;
        top: 260%;
        right: 75%;
    }
    #comentario{
        position: relative;
        margin-top: 400px;
    }
      .perfilNome{
        position:absolute;
        top:200%;
        right: 150%;
        font-size: 28px;
        
    }
    .perfilEmail{
        position:absolute;
        top:260%;
        right: 150%;
        font-size: 28px;
    }
    .perfilCurso{
        position:absolute;
        top:320%;
        right: 150%;
        font-size: 28px;  
    }
    .status{
        position:absolute;
        top:320%;
        right: 135%;
        
    }
    .statusC{
         position:absolute;
        top:320%;
        right: 115%;
        
    }
    .botoes{
        position:absolute;
        top: 400%;
        right: 75%;
        
    }
    .imgPerfil{
        margin-left:35px;
    }
    #finalizar{
        max-width:78.5%;
    }
    #alterarsenha{
        max-width:75%;
    }
 .pesquisa input{
     position:absolute;
     right:7%;
 }
    
</style>
<?php else: 
header("location:https://codestation.cf/");
endif;?>