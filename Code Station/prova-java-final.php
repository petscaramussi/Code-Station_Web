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
$pagina = $dado['pagina'];
$pagina2 = $dado['pagina2'];
$pagina3 = $dado['pagina3'];
$paginacodificada = base64_encode("pagina3=".$dado['pagina3']);

if($pagina3 != 29 || $pagina2 != 27 || $pagina != 20){
    if(!isset($_COOKIE['provaterminada']))
    header("location:javap");
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
$nota = $dado['provajavafinal'];

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
<div class='newtfoot1'><b>Exame de Java 4</b></div>
  <br><br>
<div class='newtfoot2'>Prova Final, Senior++ em Java</div>
</div>
</center>
<br>
<a style="float:left;" onclick="window.close()" href="prova-java-final?desistir=true" class="javabtn">Fechar Janela</a><br><br>
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
        <title><?php echo $titulo; ?> - Class Prova Java Final</title>
    <body>
        <h1>Prova Java Final</h1><br><br>
        <?php if(!isset($comecar)):?>
                <a id="comecar" href="prova-java-final?comecar=true" style="margin-left:5%;cursor:pointer">Começar Prova</a>
                
                <a id="desistir" href="prova-java-final?desistir=true" style="margin-left:5%;cursor:pointer">Desistir da Prova</a>
                
                
<style>
.swal-wide{
    width:950px !important;
}
</style>
                
                <?php endif; ?>
                <?php  if(isset($comecar)):  ?>
                <text style="float:right;margin-right:10%">Tempo: <strong><span id="time">Carregando...</span></strong></text>
        <form action="verificarprovajavafinal">
        <div id="provatexto">
    <h2>1) Selecione o método de acesso protected que recebe um ano como parametro e retorna verdadeiro:</h2><br>
            <input type="radio" name="1questao"  id="1a" required value="1a"><label for="1a"> public protected ano (Ano ano){ return true; }</label><br>
            <input type="radio" name="1questao"  id="1b" value="1b"><label for="1b"> public ano (Ano ano){ return true; }</label><br>
            <input type="radio" name="1questao"  id="1c" value="1c"><label for="1c"> protected ano (Ano ano){ return true; }</label><br>
            <input type="radio" name="1questao"  id="1d" value="1d"><label for="1d"> public protected ano (Int ano){ return true; }</label><br>
            <input type="radio" name="1questao"  id="1e" value="1e"><label for="1e"> protected ano (Int ano){ return true; }</label><br>    
            <!-- 2 Questão -->
            
            <h2>2) O que é sobrecarga (overload) de métodos?</h2><br>
            <input type="radio" name="2questao"  id="2a" required value="2a"><label for="2a"> Existência de vários métodos com o mesmo nome</label><br>
            <input type="radio" name="2questao"  id="2b" value="2b"><label for="2b"> Passar mais parametros do que o método originalmente tem</label><br>
            <input type="radio" name="2questao"  id="2c" value="2c"><label for="2c"> Escrever muitas linhas de código dentro do método</label><br>
            <input type="radio" name="2questao"  id="2d" value="2d"><label for="2d"> Dar um novo comportamento aos métodos</label><br>
            <input type="radio" name="2questao"  id="2e" value="2e"><label for="2e"> Usar os mesmos métodos em vários lugares ao mesmo tempo</label><br>
            
            <!-- 3 Questão -->
            
            <h2>3) Qual a diferença entre uma execeção e um erro?</h2><br>
            <input type="radio" name="3questao" id="3a" required value="3a"><label for="3a"> Uma execeção é algo que está ligado ao código e um erro a JVM</label><br>
            <input type="radio" name="3questao" id="3b" value="3b"><label for="3b"> Um erro está ligado ao código e uma execeção a JVM</label><br>
            <input type="radio" name="3questao" id="3c" value="3c"><label for="3c"> Ambos estão ligados ao código</label><br>
            <input type="radio" name="3questao" id="3d" value="3d"><label for="3d"> Ambos estão ligados a JVM</label><br>
            <input type="radio" name="3questao" id="3e" value="3e"><label for="3e"> Um pode ser corrigido e o outro não</label><br>
            
            <!-- 4 Questão -->
            
            <h2>4) O que é um StackOverFlowError?</h2><br>
            <input type="radio" name="4questao" id="4a" required value="4a"><label for="4a"> É um erro que ocorre quando não se verifica um dado já existenta na sua lista, fazendo o código permanecer executando recursicamente para sempre O(n)</label><br>
            <input type="radio" name="4questao" id="4b" value="4b"><label for="4b"> É um erro que acontece quando tentamos acessar uma referencia que está vázia</label><br>
            <input type="radio" name="4questao" id="4c" value="4c"><label for="4c"> É um erro que acontece que acontece quando estamos iterando dentro de um array, e consequentemente, acabamos percorrendo de mais e acessando uma posição que não possui index O(1)</label><br>
            <input type="radio" name="4questao" id="4d" value="4d"><label for="4d"> É um erro que acontece quando tentamos colocar um valor de uma váriavel de tipos diferentes</label><br>
            <p>Dica: O(n) e O(1) são níveis de complexidade, respectivamente do pior para o melhor
nao queria falar nada nao</p>
<br>
            <!-- 5 Questão -->
            
            <h2>5) Diferença entre null e 0:</h2><br>
            <input type="radio" name="5questao" id="5a" value="5a"><label for="5a"> A grande diferença é que o 0 é um valor que tem endereço na memória e o null não tem qualquer referencia</label><br>
            <input type="radio" name="5questao" id="5b" value="5b"><label for="5b"> A grande diferença é que o null é um valor que tem endereço na memória e o 0 não tem qualquer referencia</label><br>
            <input type="radio" name="5questao" id="5c" value="5c"><label for="5c"> Ambos são valores que tem endereço na memória</label><br>
            <input type="radio" name="5questao" id="5d" value="5d"><label for="5d"> Ambos não tem qualquer referencia</label><br>
            
            <!-- 6 Questão -->
            
            <h2>6) Qual desses não é um tipo primitivo? </h2><br>
            <input type="radio" name="6questao" id="6a" required value="6a"><label for="6a"> int</label><br>
            <input type="radio" name="6questao" id="6b" value="6b"><label for="6b"> double</label><br>
            <input type="radio" name="6questao" id="6c" value="6c"><label for="6c"> float</label><br>
            <input type="radio" name="6questao" id="6d" value="6d"><label for="6d"> string</label><br>
            <input type="radio" name="6questao" id="6e" value="6e"><label for="6e"> char</label><br>
            
            <!-- 7 Questão -->
            
            <h2>7)  Marque a opção que serve como exemplo para polimorfismo:</h2><br>
            <input type="radio" name="7questao" id="7a" required value="7a"><label for="7a"> Instância de uma referencia mais genéria para uma mais específica1</label><br>
            <input type="radio" name="7questao" id="7b" value="7b"><label for="7b"> Sobrescrever um método</label><br>
            <input type="radio" name="7questao" id="7c" value="7c"><label for="7c"> Sobrecarregar um método</label><br>
            <input type="radio" name="7questao" id="7d" value="7d"><label for="7d"> Encapsular uma váriavel privada, criando um getter e setter para acesso de outra classe</label><br>
            <input type="radio" name="7questao" id="7e" value="7e"><label for="7e"> Serializar uma classe</label><br>
            
            <!-- 8 Questão -->
            <h1>Questão de lógica (Questão especial)</h1>
            <h2>8) Observe esse algoritmo de seleção abaixo:</h2><br>
            
            <img style="margin-left:5%" src="questaoespecial.gif"><br><br><br>
            
           <p>
               O algortimo divide a lista de entrada em duas partes: a sub-lista de itens já ordenados, que é construída da esquerda para a direita na frente (esquerda) da lista, e a sub-lista de itens remanescentes a serem ordenados que ocupam o resto da lista. Inicialmente, a sub-lista ordenada está vazia e a sub-lista não ordenada é toda a lista de entrada. O algortimo procede encontrando o menor (ou maior, dependendo da ordem de ordenação) do subgrupo não ordenado, trocando-o pelo elemento não ordenado mais à esquerda (colocando-o em ordem de classificação) e movendo os limites da sub-lista um elemento para a direita.
           </p>
           <h3>Propriedades:</h3>
           <ul>
          <li>Pior caso de performance O(n^2)</li> 
         <li>Melhor caso de performance O(n^2)</li> 
          <li>Médio caso de performance O(n^2)</li> 
           </ul>

           <h3>Código simplificado:</h3><br>
<pre>
       for i = 1:n,
    k = i
    for j = i+1:n, if a[j] < a[k], k = j
    → invariante: a[k] menor que[i..n]
    troca um[i,k]
    → invariante: a[1..i] na posição final
end
</pre>
<p>
<ul>
  <li>Pior caso de performance O(n^2)</li>
  <li>Melhor caso de performance O(n^2)</li>
  <li>Médio caso de performance O(n^2)</li>
</ul>
</p>
<p>
    No entanto, a classificação de seleção tem a propriedade de minimizar o número de trocas. Em aplicações em que o custo de troca de itens é alto, o tipo de seleção pode ser o algoritmo escolhido.
</p>       
<p>Nessa questão estamos nos propondo a fazer você pensar. Na sua casa, pense em um algoritmo de ordenação que possa superar esse. Não precisa ser em Java, apenas use da sua lógica obtida durante o curso para pensar numa solução mais eficiente </p>
<br>
          
            <button class="configbtn">Enviar <i class="fas fa-check"></i></button>
            <a class="configbtn" href="prova-java-final?desistir=true">Desistir</a>
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

<script>
document.getElementsByTagName("img")[1].style.display = "none";
</script>
<?php endif;?>
<?php } ?>
<?php else: ?>
<?php header("location: entrar"); die('Erro ao Acessar...');?>
<?php endif;?>