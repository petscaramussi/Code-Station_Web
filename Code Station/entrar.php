<?php
if (isset($_COOKIE['msgcookie'])) {
$msgdescript = base64_decode($url = substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], '?')+1));
$msg = explode("=", $msgdescript);
@$msg = $msg[1];
}

@include "model/retiraextensao.php";
if(isset($_COOKIE['manterConexao'])):
@header("location:pagina");
else:
?>
<head>
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6361856937114237",
    enable_page_level_ads: true
  });
</script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<style>
<?php include 'model/registrar.css'; ?>
</style>

<link rel="icon" href="https://codestation.cf/icone.png?" />

<meta name="theme-color" content="#3d3d55">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

 <script>
    window.onload = function() {
    var recaptcha = document.forms["registro"]["g-recaptcha-response"];
    recaptcha.required = true;
    recaptcha.oninvalid = function(e) {
    alert("Por favor complete o captcha");
      }
   }
   </script>

</head>
<title>Code Station - Entrar</title>
</head>
<div class="login-wrapper">      

  <div class="login-left">
    <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("model/2.png")); ?>'>
    <div class="h1">Code Station<h2>Clique aqui</h2></div>
  </div>
  <div style="bottom:-5%;" class="login-right enter">
     <div style= class="login-right">
    <div class="h2">Entrar</div>
      <form method="POST" action="entrarsistema">
    <div class="form-group">
      <input required="required" type="email" name="email" id="Email" placeholder="Email">
      <label for="Email">Email</label>    
    </div>
    <div class="form-group">
      <input pattern="[0-9]+$" title="PIN(APENAS NUMEROS)" required="required" type="password" name="senha" id="Password" placeholder="PIN">
      <label for="Password">PIN</label>    
    </div>
    <div class="button-area">
      <a href="registrar" class="btn btn-secondary" style="text-decoration:none">Registrar</a>
      <a href="pagina" style="text-decoration:none"><button class="btn btn-primary">Entrar</button></a>
    </div>
      </form>
       <a id="esqueceusenha" href="esqueceusenha">Esqueceu a Senha</a>
  </div>
</div>
   <style>
<?php include 'model/registrar.css'; ?>
</style>
<script>
    <?php include 'model/registrar.js'?>
</script>
<style>
    #esqueceusenha{
        margin-left:35%;
    }
</style>
     <?php
if (isset($_COOKIE['msgcookie'])) {
?>  
          <?php if(@$msg == "erro"): ?>
          
<script>
              
    Swal.fire({
  position: 'center',
  type: 'error',
  title: 'Erro no Login',
  showConfirmButton: false,
  timer: 1500
})  
  
</script>
          
      <?php elseif(@$msg == "sucesso"):?>
      
<script>
      
     Swal.fire({
  position: 'center',
  type: 'success',
  title: 'Usuario Cadastrado com Sucesso',
  showConfirmButton: false,
  timer: 1500
})  

</script>
        
        <?php elseif(@$msg == "desativado"): ?>

                    
<script>
              
    Swal.fire({
  position: 'center',
  type: 'error',
  title: 'Conta desativada pelos administradores!',
  showConfirmButton: false,
  timer: 1500
})  
              
</script>

      <?php elseif(@$msg == "erroj"): ?>
                
<script>
              
    Swal.fire({
  position: 'center',
  type: 'error',
  title: 'Email Já Cadastrado!',
  showConfirmButton: false,
  timer: 1500
})  
              
</script>
          
      <?php elseif(@$msg == "sucessor"): ?>
      <script>
        Swal.fire({
  position: 'center',
  type: 'success',
  title: 'Senha Redefinida Com Sucesso',
  showConfirmButton: false,
  timer: 1500
})  
</script>

        <?php endif ?>
<?php } ?>
<?php endif; ?>