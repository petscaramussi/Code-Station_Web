<?php
@session_start();
if(isset($_SESSION['logado'])): 
$msg = 0;
include 'model/expiraLogin.php';
include "model/retiraextensao.php";
include 'model/conexao.php';
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$nome = $dado['nome'];
$id = $dado['id'];
?>
<html>
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php include 'model/header.php';?>
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script>
    window.onload = function() {
    var recaptcha = document.forms["contact"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
   const Toast = Swal.mixin({
  toast: true,
  position: 'top',
  showConfirmButton: false,
  timer: 3000
});

Toast.fire({
  type: 'error',
  title: 'Complete o Captcha!'
})
      }
   }
   </script>   
        <title><?php echo $titulo; ?> - Class Ajuda</title>
    <body id="topo">
<?php include 'model/navbar4.php';?>
    <section id="java">
      <div class="content">
        <h1 style="color:#333333">Contate-nos</h1><br><br>
        
          <div class="contato">
  <form id="contact" name="contact" method="POST" accept-charset="utf-8" action="processaContato.php">
      
  <label style="display:none"><span>Nome</span><input readonly required value="<?php echo $nome?>" name="nome" type="text" placeholder="Nome"/></label>
  
    <label style="display:none"><span>Email</span><input readonly required value="<?php echo $email?>" name="email" type="email" placeholder="Email"/></label>

    <textarea id="msg" minlength="15" required name="mensagem"></textarea>
    <div  class="g-recaptcha" data-sitekey="6LeEIYcUAAAAADJ_HbjID2su3u6V4fHX1l46MwYq"></div>
      
    <button class="configbtn" style="border-radius:2.4px;
">Confirmar &nbsp<i class="far fa-check-circle"></i></button>
  </form>
</div>
<br><br><br><br><br><br><br>


                    <h2 style="color:#333333">Imagens de ajuda</h2><br><br>
                    
<div id="colapsion">
 <button class="collapsible">Mapa do site</button>
<div class="content" style="background-color:white">
  <p><img style="height: 500px;width:100%" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("model/mapa.png")); ?>'></p>
</div>

<button class="collapsible">Caso de uso - Sistema</button>
<div class="content" style="background-color:white">
  <p><img style="height: 500px;width:100%" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("model/casodeuso.png")); ?>'></p>
</div>
<button class="collapsible">DER – Diagrama de Entidade e Relacionamento</button>
<div class="content" style="background-color:white">
  <p><img style="height: 500px;width:100%" src='data:image/png;base64,<?php echo base64_encode(file_get_contents("model/entidade.png")); ?>'></p>
</div>
<div id="colapsion">
 <button class="collapsible">Documentação</button>
<div class="content" style="background-color:white">
  <p><a style="text-decoration: underline;color:blue" href="documentacao">Documentação Aqui</a><br> Ou </p>
  <iframe src="documentacao.pdf" width="100%" height="680" style="border: none;"></iframe>
</div>
  </div>
          <br>
          <br>
          <a class="topobtn2" style="float:right;font-weight:bolder;text-decoration:none;border:2px solid #555;
    border-radius: 6px;padding: 5px;background-color:#555;color:white" href="#topo">Voltar ao Topo&nbsp&nbsp<i class="far fa-arrow-alt-circle-up"></i></a>
        </div>
    </section>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>
<style>
<?php include 'model/form.css'; ?>
</style>

<?php include 'model/colapsion.php'; ?>

       <?php 
       if (isset($_COOKIE['msgcookie'])) {
$msgdescript = base64_decode($url = substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], '?')+1));
$msg = explode("=", $msgdescript);
$msg = $msg[1];
}
if (isset($_COOKIE['msgcookie'])) :
if($msg == "enviada"): ?>
          
          <script>
              
    Swal.fire({
  position: 'center',
  type: 'success',
  title: 'Mensagem Enviada!',
  showConfirmButton: false,
  timer: 1500
})  
              
</script>
          
          <?php elseif($msg == "erro"): ?>
                    <script>
              
    Swal.fire({
  position: 'center',
  type: 'error',
  title: 'Erro ao Enviar a Mensagem!',
  showConfirmButton: false,
  timer: 1500
})  
              
</script>
          <?php endif ?>
          <?php endif ?>

<style type="text/css">
.contato{
    width:80%;
}
        .g-recaptcha{
            margin-left:43%;
            margin-bottom:2%;
            width:80%;
        }
#msg{
    margin-bottom:2%;
    margin-left:22%;
    width:80%;
}
.configbtn{
    margin:0;
    width:80%;
    margin-right:-2%;
}
    
    .topobtn2:active{
        color:white;
background-color:#333 !important;
border-color:#333 !important;
  transform: translateY(5px);
    transition:.3s;
        
    }
    .topobtn2:hover {
        color:white;
        background-color:#333 !important;
border-color:#333 !important;
    transition:.3s;
        
    }
    @media screen and (max-width:480px){
       
        .g-recaptcha{
            position:relative;
            margin-left:20px;
        }
    }
</style>
<script>
document.getElementsByTagName("img")[3].style.display = "none";
</script>
<?php
else:
header("location: https://codestation.cf/"); die('Erro');?>
<?php endif ?>