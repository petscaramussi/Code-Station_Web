<?php 

if(isset($_COOKIE['manterConexao'])):
header("location:pagina");
else:
include("model/conexao.php");
include "model/retiraextensao.php";

date_default_timezone_set('America/Sao_Paulo');
$erro[] = "";
if(@isset($_POST[ok])){
    $email = mysqli_real_escape_string($connect,$_REQUEST['email']);
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $erro[] = "E-mail Inválido.";
     
    }
    
    if (isset($_POST['g-recaptcha-response'])) {
    $captcha_data = $_POST['g-recaptcha-response'];
    }

    
    $sql_code =  "SELECT senha,id FROM cadastro WHERE email = '$email'";
    $sql_query = mysqli_query($connect,$sql_code);
    $dado = mysqli_fetch_array($sql_query);
    $total = mysqli_num_rows($sql_query);
    
    if($total == 0) {
        $erro[] = "O email informado não existe";
    }
    
    if($total > 0 && !empty($captcha_data)){
        
    $codigo = base64_encode($email);
    $verificar = rand();
    $data_expirar = date('Y-m-d H:i:s ', time() + 3*60*60);
    $corpo = "<strong>Nova Senha Requisitada(Esqueceu Senha)!</strong><br><br>";
    $corpo .= "<br><strong>Caso não seja sua,não abra o link,caso contrario abra o link abaixo.</strong><br>";
    $corpo .= "https://codestation.cf/recuperar?codigo=$codigo&&verificacao=$verificar";
    $header = "Content-Type: text/html; charset= utf-8\n";
    $header .= "From: CodeStation@hotmail.com <dont-Reply-to: CodeStation@hotmail.com> \n";
    
    
    if(mail($email,"Esqueceu Senha",$corpo,$header)){
        
    $sql =  "SELECT * FROM codigos WHERE codigo = '$codigo'";
    $conectar = mysqli_query($connect,$sql);
    $totalcodigos = mysqli_num_rows($conectar);
        
        if($totalcodigos > 0 ){
    $sql_code =  "DELETE FROM codigos
WHERE codigo = '$codigo'";
    $busca = mysqli_query($connect,$sql_code);
        }
    $sql_code =  "INSERT INTO codigos (codigo,data,verificacao) VALUES ('$codigo','$data_expirar','$verificar')";
    $busca = mysqli_query($connect,$sql_code);
        if($sql_query){
            $erro[] = "Email Enviado com Sucesso";
        }
            }
        }      
    }

?>
<html>
    <head>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-6361856937114237",
    enable_page_level_ads: true
  });
</script>
        <meta name="theme-color" content="#3d3d55">
    </head>
<?php include 'model/header.php';?>
            <title><?php echo $titulo; ?> - Recuperação de Senha</title>
<body>
    <?php if(count(@$erro) > 0)
    foreach($erro as $msg){
        echo "<p class='erro'>$msg</p>";
    }
    ?>
<script src='https://www.google.com/recaptcha/api.js'></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
 <script>
    window.onload = function() {
    var recaptcha = document.forms["form"]["g-recaptcha-response"];
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
<div id="tudo">
<form id="form" method="post">
    <label><span>Email: </span><input  id="email" name="email" required="required" type="email" placeholder="Email"/></label>
    <div id="capta">
    <div  class="g-recaptcha" data-sitekey="6LeEIYcUAAAAADJ_HbjID2su3u6V4fHX1l46MwYq"></div>
    </div>
    <button name="ok" class="configbtn" style="border-radius:2.4px;
">Nova Senha &nbsp<i class="far fa-check-circle"></i></button>
    <a class="configbtn" style="padding: 0.5em;
        margin-right:15px;
        font: 300 100%/1.2 Ubuntu, sans-serif;" href="https://codestation.cf/"><i class="fas fa-angle-double-left"></i>&nbsp;Voltar</a>
        <div class="aviso"><h3>Aviso!</h3>
        <br><br>
        <p>O email provavelmente ira para a caixa de spam!<br><text>Gmail demora um pouco!</text></p>
        </div>
</form>
</div>

<?php include 'model/footer.php';?>
    </body>
    </html>
    <style>
        <?php include "model/form.css" ?>
    </style>
<style>
#tudo{
    margin-top:-150px;
}
    .aviso text{
        margin-left:82px;
    }
    .aviso p {
        font-weight:bold;
        padding:12px;
        font-size:15px;
    }
    .aviso h3{
        font-size:25px;
        font-weight:bolder;
        text-align:center;
    }
    
    #capta{
        margin-left:50%;
    }
    
    .aviso{
    margin:0;
    margin-left:50%;
    margin-top:100px;
    background-color:#fff9c4;
    border:4px solid #fff176  ;
    width:350px;
    height:180px;
    }
    
    #form{
        margin-top:20%;
        margin-right:20%;
    }
    
    body{
    overflow: hidden;
    background-image: url(4.jpg);
    background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
    }
    
.erro{
        font-size:20px;
        text-align:center;
        border:5px solid #333  ;
        background-color: #333 ;
        color: white;
        position: absolute;
        margin:0;
        z-index:100;
        top:0;
        left:0;
        right:0;
    }
        #comentario{
        position:absolute;
        bottom:0;
        left:0;
        right:0;
    }
</style>

<?php endif ?>