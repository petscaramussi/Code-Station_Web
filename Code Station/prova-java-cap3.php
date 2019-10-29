<?php 
@session_start();
if(isset($_SESSION['logado'])): 
include "model/conexao.php";
include "model/retiraextensao.php";
include 'model/expiraLogin.php';
$email = $_SESSION['email'];

$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$id = $dado['id'];

$busca = mysqli_query($connect,"SELECT * FROM capitulos WHERE idUsuario = '$id'");
$dado = mysqli_fetch_array($busca);
$pagina = $dado['pagina3'];
$paginacodificada = base64_encode("pagina3=".$dado['pagina3']);

if($pagina != 29 ){
    if($pagina == 1 && !isset($_COOKIE['provaterminada']))
    header("location:javacap3?$paginacodificada");
}

setcookie("prova", $email."Tempo:".time(), time() + 1800, "/");

if(isset($_GET['comecar'])){
    setcookie('prova');
    $comecar = $_GET['comecar'];
    setcookie("prova", $email."Tempo:".time(), time() + 1800, "/");
}

if(isset($_GET['desistir'])){
    setcookie('prova');
    $desistir = $_GET['desistir'];
    ?>
<script>
window.close();
</script>
  <?php  
}
?>

<?php 
$email = $_SESSION['email'];
$busca = mysqli_query($connect,"SELECT * FROM cadastro WHERE email = '$email'");
$dado = mysqli_fetch_array($busca);
$id = $dado['id'];
$nome = $dado['nome'];
$busca = mysqli_query($connect,"SELECT * FROM capitulos WHERE idUsuario = '$id'");
$dado = mysqli_fetch_array($busca);
$nota = $dado['provajavacap3'];

if(isset($_COOKIE['provaterminada']) || $nota >= 8){?>
<?php
    
include "model/conexao.php";
include "model/retiraextensao.php";
include 'model/expiraLogin.php';


?>
    <html>
        <?php include 'model/header.php';?>
        <body>
            <p>
            <center><link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'><style type='text/css'>

#backgroundowl{

  width:500px;

  height:721px;

  background-image:url(https://i.imgur.com/qEdGvVy.jpg?1);

}



.headerimg{

  width:150px;

  height:162px;

  background-image:url(https://i.imgur.com/Yfuhz5K.png);

}



.headertxt{

  width:500px;

  height:50px;

  font-family: times;

  font-size:24px;

  text-align:center;

}



.pass{

 

  font-family:times;

  font-size:16px;

  text-align: left;

  padding-left: 45px;

}

.fail{

 

  font-family:times;

  font-size:16px;

  text-align:left;

  padding-left:30px;

}



.owlname{

  font-family:times;

  font-size:20px;

  text-align:center;

  padding-top:10px;

}



.subject{

 

  font-family:times;

  font-size:16px;

  text-align: left;

  padding-top:10px;

  padding-left:50px;

}



.grades{

 

  font-family:times;

  font-size:16px;

  text-align:left;

  padding-left:230px;

  padding-top:10px;

}



.bottomowl{

  font-family:times;

  font-size:14px;

  text-align:center;

  padding-top:10px;

}



.owlsiggy{

  font-size:30px;

  text-align:center;

  padding-top:10px;

}



.owlsiggysub{

  font-family:times;

  font-size:9px;

  text-align:center;

  padding-top:5px;

}



.owlfoot1{

  font-family:times;

  font-size:18px;

  text-transform:uppercase;

  padding-top:10px;

}



.owlfoot2{

  font-family:times;

  font-size:12px;

  text-transform:uppercase;

  padding-top:5px;

}

 

</style>

<center><link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'><style type='text/css'>
#backgroundnewt{
  width:500px;
  height:721px;
  background-image:url(https://i.imgur.com/qEdGvVy.jpg?1);
}

.newtheaderimg{
  width:126px;
  height:126px;
    background: no-repeat center;
    background-size: cover;  
  background-image:url(icone.ico);
}

.newtheadertxt{
  width:500px;
  height:50px;
  font-family: times;
  font-size:24px;
  text-align:center;
}

.newtpass{
 
  font-family:times;
  font-size:16px;
  text-align: left;
  padding-left:45px;
}
.newtfail{
 
  font-family:times;
  font-size:16px;
  text-align:left;
  padding-left:30px;
}

.newtname{
  font-family:times;
  font-size:20px;
  text-align:center;
  padding-top:10px;
}

.newtsubject{
 
  font-family:times;
  font-size:16px;
  text-align: left;
  padding-top:10px;
  padding-left:50px;
}

.newtgrades{
 
  font-family:times;
  font-size:16px;
  text-align:left;
  padding-left:230px;
  padding-top:10px;
}

.newtbottom{
  font-family:times;
  font-size:14px;
  text-align:center;
  padding-top:10px;
}

.newtsiggy{
  font-size:30px;
  text-align:center;
  padding-top:10px;
}

.newtsiggysub{
  font-family:times;
  font-size:9px;
  text-align:center;
  padding-top:5px;
}

.newtfoot1{
  font-family:times;
  font-size:18px;
  text-transform:uppercase;
  padding-top:10px;
}

.newtfoot2{
  font-family:times;
  font-size:12px;
  text-transform:uppercase;
  padding-top:5px;
}

</style>

<div id='backgroundnewt'>
    <br>
<div class='newtheaderimg'></div>
  <br><br><br>
<div class='newtheadertxt'>Resultado da prova em Java</div> 
<br><br>
<div class='newtname'><b><?php echo $nome?></b> <i> tirou nota: <?php echo $nota?></i></div>
<br><br>
<div class='newtbottom'>Você concluiu a prova<br><br>

<?php if($nota >= 8):?>Parabéns por ter passado na prova <?php else:?>Infelizmente você não atingiu a nota 8<br><?php endif?><br>
<?php if($nota >= 8):?>Agora você esta apto a continuar o curso de Java<?php else:?>Você não esta apto a continuar o curso,seu progresso será resetado!<?php endif;?>
</div>
<br><br><br>
<div class='newtsiggy' style='text-decoration: underline;font-family:dancing script;font-style: oblique;'>CodeStation</div>
<div class='newtsiggysub'>Fundação de ensino de cursos de linguagens de programação</div>
<br><br>
<div class='newtfoot1'><b>Exame de Java 3</b></div>
  <br><br>
<div class='newtfoot2'>Prova 3, Senior em Java</div>
</div>
</center>
<br>
<a style="float:left;" onclick="window.close()" href="prova-java-cap3?desistir=true" class="javabtn">Fechar Janela</a><br><br>
</p>
    <?php 
    @setcookie("prova", "", time()-3600); 
    unset($_COOKIE['prova']);
    @setcookie('prova', null, -1);
    @setcookie('prova', null, -1, '/');?>
        </body>
    </html>
    <style>
        .javabtn{
            margin-left:46%
        }
    </style>
    <script>
        
    </script>
<?php }
else{ ?>

<html>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Prova Java Capítulo 3</title>
    <body>
        <h1>Prova Java Capítulo 3</h1><br><br>
        <?php if(!isset($comecar)):?>
                <a id="comecar" href="prova-java-cap3?comecar=true" style="margin-left:5%;cursor:pointer">Começar Prova</a>
                
                <a id="desistir" href="prova-java-cap3?desistir=true" style="margin-left:5%;cursor:pointer">Desistir da Prova</a>
                
                
<style>
.swal-wide{
    width:950px !important;
}
</style>
                
                <?php endif; ?>
                <?php  if(isset($comecar)):  ?>
                <text style="float:right;margin-right:10%">Tempo: <strong><span id="time">Carregando...</span></strong></text>
        <form action="verificarprovajava3">
        <div id="provatexto">
    <h2>1) Selecione o valor que pode ser armazenado em uma váriavel do tipo int:</h2><br>
            <input type="radio" name="1questao"  id="1a" required value="1a"><label for="1a"> Verdadeiro ou falso</label><br>
            <input type="radio" name="1questao"  id="1b" value="1b"><label for="1b"> 1.50</label><br>
            <input type="radio" name="1questao"  id="1c" value="1c"><label for="1c"> 1f</label><br>
            <input type="radio" name="1questao"  id="1d" value="1d"><label for="1d"> 1</label><br>
            <input type="radio" name="1questao"  id="1e" value="1e"><label for="1e"> "1"</label><br>    
            <!-- 2 Questão -->
            
            <h2>2) Selecione o valor que pode ser armazenado em uma váriavel do tipo double:</h2><br>
            <input type="radio" name="2questao"  id="2a" required value="2a"><label for="2a"> Verdeiro ou falso</label><br>
            <input type="radio" name="2questao"  id="2b" value="2b"><label for="2b"> 1.50</label><br>
            <input type="radio" name="2questao"  id="2c" value="2c"><label for="2c"> 1f</label><br>
            <input type="radio" name="2questao"  id="2d" value="2d"><label for="2d"> 1</label><br>
            <input type="radio" name="2questao"  id="2e" value="2e"><label for="2e"> "1"</label><br>
            
            <!-- 3 Questão -->
            
            <h2>3) Selecione o valor que pode ser armazenado em uma váriavel do tipo float:</h2><br>
            <input type="radio" name="3questao" id="3a" required value="3a"><label for="3a"> Verdeiro ou falso</label><br>
            <input type="radio" name="3questao" id="3b" value="3b"><label for="3b"> 1.50</label><br>
            <input type="radio" name="3questao" id="3c" value="3c"><label for="3c"> 1f</label><br>
            <input type="radio" name="3questao" id="3d" value="3d"><label for="3d"> 1</label><br>
            <input type="radio" name="3questao" id="3e" value="3e"><label for="3e"> "1"</label><br>
            
            <!-- 4 Questão -->
            
            <h2>4) Selecione o valor que pode ser armazenado em uma váriavel do tipo boolean:</h2><br>
            <input type="radio" name="4questao" id="4a" required value="4a"><label for="4a"> Verdeiro ou falso</label><br>
            <input type="radio" name="4questao" id="4b" value="4b"><label for="4b"> 1.50</label><br>
            <input type="radio" name="4questao" id="4c" value="4c"><label for="4c"> 1f</label><br>
            <input type="radio" name="4questao" id="4d" value="4d"><label for="4d"> 1</label><br>
            <input type="radio" name="4questao" id="4e" value="4e"><label for="4e"> "1"</label><br>
            
            <!-- 5 Questão -->
            
            <h2>5) Quantos bits um char suporta?</h2><br>
            <input type="radio" name="5questao" required id="5a" value="5a"><label for="5a"> 1</label><br>
            <input type="radio" name="5questao" id="5b" value="5b"><label for="5b"> 16</label><br>
            <input type="radio" name="5questao" id="5c" value="5c"><label for="5c"> 8</label><br>
            <input type="radio" name="5questao" id="5d" value="5d"><label for="5d"> 32</label><br>
            <input type="radio" name="5questao" id="5e" value="5e"><label for="5e"> 64</label><br>
            
            <!-- 6 Questão -->
            
            <h2>6) Quantos bits um double suporta?</h2><br>
            <input type="radio" name="6questao" id="6a" required value="6a"><label for="6a"> 1</label><br>
            <input type="radio" name="6questao" id="6b" value="6b"><label for="6b"> 128</label><br>
            <input type="radio" name="6questao" id="6c" value="6c"><label for="6c"> 64</label><br>
            <input type="radio" name="6questao" id="6d" value="6d"><label for="6d"> 100</label><br>
            <input type="radio" name="6questao" id="6e" value="6e"><label for="6e"> 32</label><br>
            
            <!-- 7 Questão -->
            
            <h2>7) Quantos bits um int suporta?</h2><br>
            <input type="radio" name="7questao" id="7a" required value="7a"><label for="7a"> 1</label><br>
            <input type="radio" name="7questao" id="7b" value="7b"><label for="7b"> 324</label><br>
            <input type="radio" name="7questao" id="7c" value="7c"><label for="7c"> 128</label><br>
            <input type="radio" name="7questao" id="7d" value="7d"><label for="7d"> 32</label><br>
            <input type="radio" name="7questao" id="7e" value="7e"><label for="7e">16</label><br>
           
            <!-- 8 Questão -->
            
            <h2>8) Quantos bits um short suporta?</h2><br>
            <input type="radio" name="8questao" id="8a" required value="8a"><label for="8a"> 128</label><br>
            <input type="radio" name="8questao" id="8b" value="8b"><label for="8b"> 64</label><br>
            <input type="radio" name="8questao" id="8c" value="8c"><label for="8c"> 8</label><br>
            <input type="radio" name="8questao" id="8d" value="8d"><label for="8d"> 16</label><br>
            <input type="radio" name="8questao" id="8e" value="8e"><label for="8e"> 1</label><br>
            
            <!-- 9 Questão -->
            
            <h2>9) Sixtaxe correta do método main:</h2><br>
            <input type="radio" name="9questao" id="9a" required value="9a"><label for="9a"> main(){}</label><br>
            <input type="radio" name="9questao" id="9b" value="9b"><label for="9b"> public void main(){}</label><br>
            <input type="radio" name="9questao" id="9c" value="9c"><label for="9c"> public main()</label><br>
            <input type="radio" name="9questao" id="9d" value="9d"><label for="9d"> Nenhuma das alternativas</label><br>
            <input type="radio" name="9questao" id="9e" value="9e"><label for="9e"> public static void main(){}</label><br>
            
            <!-- 10 Questão -->
            
            <h2>10) Isto é possível? Avengers a = new Movie();</h2><br>
            <input type="radio" name="10questao" id="10a" required value="10a"><label for="10a"> Verdadeiro</label><br>
            <input type="radio" name="10questao" id="10b" value="10b"><label for="10b"> Falso</label><br>
            
            <br>
            
          
            <button class="configbtn">Enviar <i class="fas fa-check"></i></button>
            <a class="configbtn" href="prova-java-cap3?desistir=true">Desistir</a>
        </form>
        </div>
    </body>	
</html>


<script>

 
var contador = '1800';

function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function() {
    minutes = parseInt(timer / 60, 10)
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = minutes + ":" + seconds;

    if (--timer < 0) {
        Swal.fire({
  title: 'Parece que o tempo acabou!',
  text: "Você ficou sem tempo a prova sera cancelada clique aqui para fechar a prova!",
  type: 'error',
  customClass: 'swal-wide',
  confirmButtonColor: '#3085d6',
    allowOutsideClick: false,
  confirmButtonText: 'Cancelar Prova!'
}).then((result) => {
  if (result.value) {
window.top.location.reload();
window.close();
window.location.replace("javap");
  }
})
    timer = 99999999999999999999999999999999}
  }, 1000);
}

window.onload = function() {
  var count = parseInt(contador),
    display = document.querySelector('#time');
  startTimer(count, display);
};

window.addEventListener('keydown', function (e) {
    var code = e.which || e.keyCode;
    if (code == 116) e.preventDefault();
window.close();
});

</script>
<style>

    .configbtn{margin-right:30%;float:right}
    input{margin-bottom:1%;margin-left:2%}
    h1{text-align:center;}
    h2{margin-top:2%;}
    div{margin-left:3%;}
    img{display:none;}
</style>
<?php else: ?>
<style>
    #comecar{background-color:green;left:-5%;right:0;position:absolute;text-align:center;color:white;padding:1.5%;font-size:3em;font-family: "Lato", serif !important;}
    #desistir{background-color:red;margin-top:20%;left:-5%;right:0;position:absolute;text-align:center;color:white;padding:1.5%;font-size:3em;font-family: "Lato", serif !important;}
    
    #provatexto{display:none}
    .configbtn{margin-right:30%;float:right}
    input{margin-bottom:1%;margin-left:2%}
    h1{text-align:center;}
    h2{margin-top:2%;}
    div{margin-left:3%;}
    img{display:none;}
    
    .configbtn:hover {
    background-color: #1dad3a;
    border: 2px solid #1dad3a;
    color: white;
}
.configbtn:active {
    background-color: #1dad3a;
    border: 2px solid #1dad3a;
  transform: translateY(5px);
  color: white;
}

    
</style>
<?php endif;?>
<?php } ?>
<?php else: ?>
<?php header("location: entrar"); die('Erro ao Acessar...');?>
<?php endif;?>