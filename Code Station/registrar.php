<?php
if (isset($_COOKIE['msgcookie'])) {
$msgdescript = base64_decode($url = substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], '?')+1));
$msg = explode("=", $msgdescript);
$msg = $msg[1];
}

include "model/retiraextensao.php";
if(isset($_COOKIE['manterConexao'])):
header("location:pagina");
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

<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />


<meta http-equiv="X-UA-Compatible" content="IE=edge">

 <script>
    window.onload = function() {
    var recaptcha = document.forms["registro"]["g-recaptcha-response"];
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

</head>
<title>Code Station - Registar</title>
</head>
<div class="login-wrapper">      

  <div class="login-left">
    <img src='data:image/png;base64,<?php echo base64_encode(file_get_contents("model/1.png")); ?>'>

    <div class="h1">Code Station<h2>Clique aqui</h2></div>
  </div>
  <div class="login-right register">
      <form method="post" id="registro" action="cadastrar.php">
    <div class="h2">Registrar</div>
    <div class="form-group mobiler">
      <input name="nome" maxlength="30" minlength=3  pattern="^[A-Za-zÀ-ú\s]+$" title="Nome(Apenas Letras)" required="required" type="text" id="full-name" placeholder="Nome">
      <label for="full-name">Nome(Apelido)</label>    
    </div>
    <div class="form-group">
      <input name="email" title="Email Valido" required="required"  type="email" id="Email" placeholder="Email">
      <label for="Email">Email</label>    
    </div>
    <div class="form-group">
      <input name="senha" minlength=5  title="PIN(APENAS NUMEROS)" required="required" type="password" pattern="[0-9]+$" id="Password" placeholder="PIN">
      <label title="Apenas Numeros" for="senha">PIN</label>    
    </div>
    <div class="checkbox-container">
      <div style="margin-left:10px" class="g-recaptcha" data-sitekey="6LeEIYcUAAAAADJ_HbjID2su3u6V4fHX1l46MwYq"></div>
      </div> 
    <div class="button-area area-register">
      <a class="btn btn-secondary" href="https://codestation.cf/"style="text-decoration:none">Entrar</a>
      <a href="#" style="text-decoration:none"><button class="btn btn-primary">Registrar</button></a>
    </div>
      </form>
  </div>
</div>
<script>
    <?php include 'model/registrar.js'?>
</script>

      <?php if(@$msg == "erroe"): ?>
      <script>
<?php
if (isset($_COOKIE['msgcookie'])) {
?>
     Swal.fire({
  position: 'center',
  type: 'error',
  title: 'Os campos não podem ficar vazios',
  showConfirmButton: false,
  timer: 1500
})  
<?php
}    
?>              
</script>
        <?php elseif( @$msg == "naocadastrado"): ?>
        <script>
              
 <?php
if (isset($_COOKIE['msgcookie'])) {
?>             
Swal.fire({
  position: 'center',
  type: 'error',
  title: 'Conta não cadastrada na plataforma',
  showConfirmButton: false,
  timer: 1500
})           
</script><?php
}    
?>  
      <?php elseif(@$msg == "errobc"): ?>
      <script>
              
 <?php
if (isset($_COOKIE['msgcookie'])) {
?>             
Swal.fire({
  position: 'center',
  type: 'error',
  title: 'Não foi possivel cadastar o seu usuario',
  showConfirmButton: false,
  timer: 1500
})           
</script><?php
}    
?>  
    <?php endif ?>
<?php endif;?>
