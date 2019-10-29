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
$java = $dado['java'];
$tultorial = $dado['tultorial'];

$busca = mysqli_query($connect,"SELECT * FROM capitulos WHERE idUsuario = '$id'");
$total = mysqli_num_rows($busca);
if($total == 0){
$busca = mysqli_query($connect,"INSERT INTO capitulos (idUsuario,provajavacap1) VALUES ('$id','0')");
}
$busca = mysqli_query($connect,"SELECT * FROM capitulos WHERE idUsuario = '$id'");
$dado2 = mysqli_fetch_array($busca);

$pagina = $dado2['pagina'];
$pagina2 = $dado2['pagina2'];
$pagina3 = $dado2['pagina3'];
$prova1 = $dado2['provajavacap1'];
$prova2 = $dado2['provajavacap2'];
$prova3 = $dado2['provajavacap3'];
$provafinal = $dado2['provajavafinal'];

if($java == 0){
$java = 1;
$SQL = "UPDATE cadastro SET java = '$java'  WHERE email = '$email'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
}

$paginacodificada = base64_encode("pagina1=".$pagina);
$paginacodificada2 = base64_encode("pagina2=".$pagina2);
$paginacodificada3 = base64_encode("pagina3=".$pagina3);



?>
<?php if(isset($_COOKIE['provaterminada'])){
    @setcookie("prova", "", time()-3600); 
    unset($_COOKIE['prova']);
    @setcookie('prova', null, -1, '/');
}?>
<html>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Java</title>
    <body>
<?php include 'model/navbar2.php';?>
    <section id="java">
      <div class="content" style="line-weight:25px">
        <h1 style="color:#fe412e">Java - Capitulos <a  id="aviso" class="tooltip" style="font-weight:lighter;font-size:25px;cursor:pointer;float:right;margin-right:1%;margin-top:2%"><i class="fas fa-exclamation"></i><p style="font-weight:500 ;text-transform: none;letter-spacing: normal;width:200px;margin-left:-225px;margin-top:-8%" class="tooltiptext">Complete todos os capítulos para fazer a prova final!</p></a></h1><br id="enter">
        
        <div id="colapsion">
 <button style="background-color:#fe412e" class="collapsible">Java Capítulo 1: Introdução <?php if($pagina == 20 && $prova1 < 8):?><a class="tooltip prova1" style="float:inherit;margin-left:77%"><i style="color:yellow;" class="fas fa-exclamation"></i><p style="width:200px;margin-left:-215px;margin-top:-8%" class="tooltiptext">Você tem uma prova para fazer</p></a> <?php endif;?></button>
<div style="background-color:white" class="content">
  <p style="background-color:white;display:none;">
      <h1 style="margin-top:50px">
          <?php
          if($pagina == 1 ){
              $pagina = 0;
          }
          $resultadocap1 = $pagina * 5.5;
          ?>
<?php if($resultadocap1 == 99 || $resultadocap1>100){
          $resultadocap1 = 100;}$resultadocap1 = intval($resultadocap1);?>
          <h1 style="margin-top:-40px;padding:7px;font-size:15px;text-align:center;"><?php echo $resultadocap1?>%</h1><div style="
    margin-top:10px"><progress style="margin-left:2.5%;margin-top:-40px;height:25px;width:95%" value="<?php echo $resultadocap1 ?>" max="100">
        
</progress></div></h1>
<p style="width:95%;margin-left:2.5%;text-align:justify">O Java o levará a novas fronteiras. No humilde lançamento para o público com a (suposta) versão 1.02, o Java seduziu os programadores com sua sintaxe amigável, recursos orientados a objetos, gerenciamento de memória e, o melhor de tudo - a promessa de portabilidade. A possibilidade de escrever uma vez/executar em qualquer local exerce uma atração muito forte. Seguidores devotados surgiram, enquanto os programadores combatiam os erros, limitações e, ah sim, o fato de ela ser muito lenta. Mais isso foi há muito tempo. Se você for iniciante em Java, tem sorte. Alguns de nós tiveram de passar por algo como andar quase dez quilômetros na neve e subir montanhas pelos dois lados (descalços), para fazer até o mesmo applet mais simples funcionar. Mas você pode manipular o mais fácil, rápido e muito mais poderoso Java atual.</p>

  </p>
  <a class="javabtn" style="float:right;margin-right:2.5%" href="javacap1?<?php echo $paginacodificada?>"><?php if($pagina == 20 && $prova1 >= 8): ?>Rever capítulo<?php elseif($pagina > 1 ):?>Continuar<?php else:?>Iniciar<?php endif ?></a>
  <?php if($pagina == 20 && $prova1 < 8 ):?>
  <a class="javabtn prova1" style="float:right;margin-right:2.5%">Fazer prova</a><?php endif ?>
    </div></div>  
    
     <?php if($resultadocap1 == 100 && $prova1 >= 8): ?>
                <div style="margin-top:30px" id="colapsion">
 <button style="background-color:#fe412e" class="collapsible">Java Capítulo 2: Orientação a Objetos <?php if($pagina2 == 27 && $prova2 < 8):?><a  id="aviso" class="tooltip" style="float:inherit;margin-left:70%"><i style="color:yellow;" class="fas fa-exclamation"></i><p style="width:200px;margin-left:-215px;margin-top:-8.5%" class="tooltiptext">Você tem uma prova para fazer</p></a> <?php endif;?></button>
<div style="background-color:white" class="content">
  <p style="background-color:white;display:none;">
      <h1 style="margin-top:50px">
          <?php
          if($pagina2 == 1 ){
              $pagina2 = 0;
          }
          $resultadocap2 = $pagina2 * 3.705;
          ?>
<?php if($resultadocap2 >= 99){
          $resultadocap2 = 100;}$resultadocap2 = intval($resultadocap2);?>
          <h1 style="margin-top:-40px;padding:7px;font-size:15px;text-align:center;"><?php echo $resultadocap2?>%</h1><div style="
    margin-top:10px"><progress style="margin-left:2.5%;margin-top:-40px;height:25px;width:95%" value="<?php echo $resultadocap2 ?>" max="100">
        
</progress></div></h1>

 <p style="width:95%;margin-left:2.5%;text-align:justify">Ouvi dizer que haveria objetos. No Capítulo 1, colocamos todo o código no método main( ). Essa não exatamente uma abordagem orientada a objetos. Na verdade ela definitivamente não é orientada a objetos. Bem, usamos alguns objetos, mas não desenvolvemos nenhum tipo de objeto por nossa própria conta. Portanto, agora temos que deixar esse universo procedimental para trás, sair de main( ) e começar a criar alguns objetos por nossa própria conta. Examinaremos o que torna o desenvolvimento orientado a objetos (OO) em java tão divertido. Discutiremos a diferença entre uma classe e um objeto. Examinaremos como os objetos podem melhorar sua vida (pelo menos a parte dela dedicada à programação).
</p>

  <a class="javabtn" style="float:right;margin-right:2.5%" href="javacap2?<?php echo $paginacodificada2?>"><?php if($pagina2 == 27 && $prova2 >= 8): ?>Rever capítulo<?php elseif($pagina2 > 1 ):?>Continuar<?php else:?>Iniciar<?php endif ?></a>
  <?php if($pagina2 == 27 && $prova2 < 8):?>
  <a class="javabtn prova2" style="float:right;margin-right:2.5%">Fazer prova</a><?php endif ?>
    </div></div>  
    <?PHP  $busca = mysqli_query($connect,"UPDATE capitulos SET capitulo = '2' WHERE id = '$id'"); ?>
    
    
          <?php else: ?>
          

             <div style="margin-top:5%" id="colapsion">
 <button style="background-color:#888" class="collapsible">Java Capítulo 2: Orientação a objetos</button>
<div style="background-color:white" class="content">
  <p style="background-color:white;">
  </p>
    </div> 
            <?php endif; ?>
          
          
        <?php if(@$resultadocap2 == 100 && $prova2 >= 8): ?>
        
          <div style="margin-top:30px;margin-bottom:90px" id="colapsion">
<button style="background-color:#fe412e" class="collapsible">Java Capítulo 3: Variáveis<?php if($pagina3 == 29 && $prova3 < 8):?><a id="aviso" class="tooltip" style="float:inherit;margin-left:79.6%"><i style="color:yellow;" class="fas fa-exclamation"></i><p style="width:200px;margin-left:-215px;margin-top:-8%" class="tooltiptext">Você tem uma prova para fazer</p></a> <?php endif;?></button>
<div style="background-color:white" class="content">
  <p style="background-color:white;display:none;">
      <h1 style="margin-top:50px">
          <?php
          if($pagina3 == 1 ){
              $pagina3 = 0;
          }
          $resultadocap3 = $pagina3 * 3.5;
          ?>
<?php if($resultadocap3 == 99 || $resultadocap3 > 100){
          $resultadocap3 = 100;}$resultadocap3 = intval($resultadocap3);?>
          <h1 style="margin-top:-40px;padding:7px;font-size:15px;text-align:center;"><?php echo $resultadocap3?>%</h1><div style="
    margin-top:10px"><progress style="margin-left:2.5%;margin-top:-40px;height:25px;width:95%" value="<?php echo $resultadocap3 ?>" max="100">
        
</progress></div></h1>

 <p style="width:95%;margin-left:2.5%;text-align:justify">Existem duas versões de variáveis: primitivas e de referência. Até agora você usou variáveis em duas situações: como estado do objeto (variáveis de instância) e como variáveis locais (variáveis declaradas dentro de um método). Posteriormente, usaremos variáveis como argumentos (valores enviados para um método pelo código que o chamou) e como tipos de retorno (valores retornados ao código que o chamou) e como tipos de retorno (valores retornados ao código que chamou o método). Você viu variáveis declaradas como valores inteiros primitivos simples (tipo int). Examinou variáveis declaradas como algo mais complexo do tipo string ou matriz. E se você tiver um objeto DonodeAnimal como uma varável de instância Cão? Ou uma Carro com um Motor? Neste capítulo desvaleremos os mistérios dos tipos Java e examinaremos o que você pode declarar como uma variável, o que pode inserir em uma variável e o que pode fazer com ela. E, para concluir, discutiremos o que acontece realmente na pilha de lixo coletável.</p>
  </p>
  <a class="javabtn" style="float:right;margin-right:2.5%" href="javacap3?<?php echo $paginacodificada3?>"><?php if($pagina3 == 29 && $prova3 >= 8): ?>Rever capítulo<?php elseif($pagina3 > 1 ):?>Continuar<?php else:?>Iniciar<?php endif ?></a>
  <?php if($pagina3 == 29 && $prova3 < 8):?>
  <a class="javabtn prova3" style="float:right;margin-right:2.5%">Fazer prova</a><?php endif ?>
    </div></div>  
          <?php else: ?>
          
            <div style="margin-top:30px" id="colapsion">
 <button style="background-color:#888" class="collapsible">Java Capítulo 3: Variáveis</button>
<div style="background-color:white" class="content">
  <p style="background-color:white;">
  </p>
    </div> 
          </a></h1><br>
          
            <?php endif; ?>
            
          <?php 
         @$resultado = intval(($resultadocap1+$resultadocap2+$resultadocap3)/3);  ?>
          <?php if($resultado == 99){
            $resultado = 100;
        }
        ?>
                <h1 style="text-align:center;font-size:35px;margin-top:-1%;margin-bottom:0%">Progresso Total<br><text stlye="text-align:center;"><?php  echo $resultado ?>%</text>
                <div style="position:absolute;z-index:-1;
    margin-left:20%;margin-top:-40px"></div></h1>
            <?php if($resultado == 100 && $prova3 >= 8):?>
            <?php if($provafinal >= 6):?>
                <h1 class="javabtn" style="text-decoration:line-through;font-size:25px;cursor:pointer;margin-top:80px;margin-right:37%;background-color:gray;border:1px solid gray">Prova Final!</h1><br>
            <?php else: ?>
            <h1 class="javabtn" id="finalizar" style="text-decoration:underline;font-size:25px;cursor:pointer;margin-top:80px;margin-right:37%;">Prova Final!</h1><br>
 
            <?php endif?>
            <?php endif?>
            <?php if($java == 2): ?>
            <h1 style="margin-left:29%;"><a href="conclusao" style="color:green">Certificado</a></h1><br>
            <?php endif; ?>
            <?php include 'model/colapsion.php';?>
        </div>
    </section>
     <?php include "model/hamburguermenu.php";?>
<?php include 'model/footer.php';?>
<?php include 'model/scriptsjava.php';?>
    </body>
</html>
<style>
#enter{
    line-height:50px;
}
br{
    line-height:120px;
}
 #java a{
        float:left;
    }
    .swal-overlay {
  background-color: rgba(85,85,85, 0.65);
}
.swal-wide{
    width:850px !important;
}


</style>
<script>
<?php if($tultorial == 0){?>
$( document ).ready(function() {
    tultorial();
});

function tultorial(){
Swal.fire({
  title: 'Tultorial Sobre os Cursos!',
  allowOutsideClick: false,
  confirmButtonText: 'Continuar!',
  text: 'Olá Bem vindo ao Elixir , neste momento iremos te ensinar sobre o sistema de cursos do site!',
   customClass: 'swal-wide',
  imageUrl: "data:image/png;base64,<?php echo base64_encode(file_get_contents('model/33333333.jpg')); ?>",
  imageWidth: 400,
  imageHeight: 200,
  imageAlt: 'Imagem sobre linguagens de programação!',
  animation: false
}).then((result) => {
    Swal.fire({
      title:'Capitulos & Paginas',
      text:'Todo curso tem “X” números de capítulos, feitos para dividir o conteúdo, todo capítulo tem “X” números de páginas equivalentes ao conteúdo que será ensinado em cada capítulo.',
         customClass: 'swal-wide',
         confirmButtonText: 'Continuar!',
         imageWidth: 600,
         imageHeight: 400,
         allowOutsideClick: false,
         imageUrl: "data:image/png;base64,<?php echo base64_encode(file_get_contents('model/capitulopagina.jpg')); ?>",
    }).then((result) => {
    Swal.fire({
      title:'Desbloqueando Capitulos & Provas',
      text:'Após ter completado o capítulo, chegando na última página você habilitará o a prova do respectivo capítulo , e assim consecutivamente, até chegar ao último capítulo e habilitar a prova final!',
         customClass: 'swal-wide',
         confirmButtonText: 'Continuar!',
         imageWidth: 600,
         imageHeight: 400,
         allowOutsideClick: false,
         imageUrl: "data:image/png;base64,<?php echo base64_encode(file_get_contents('model/desbloqueando.jpg')); ?>",
    }).then((result) => {
    Swal.fire({
      title:'Dúvidas!',
      text:'Caso você ainda tenha alguma dúvida, ou queira entrar em contato conosco, acesse nossa aba de ajuda, ou mande uma mensagem de contato, responderemos o mais rápido possível!',
         customClass: 'swal-wide ',
         showCancelButton: true,
         confirmButtonColor: '#3085d6',
         confirmButtonText: 'Continuar!',
         cancelButtonText: 'Repetir Tutorial!',
         imageWidth: 800,
         imageHeight: 400,
         allowOutsideClick: false,
         reverseButtons: true,
         imageUrl: "data:image/png;base64,<?php echo base64_encode(file_get_contents('model/ajuda.png')); ?>",
    }).then((result) => {
  if (result.value) {
    Swal.fire(
      'Tutorial concluído!',
      'Parabéns, agora você está apto a fazer os cursos em nossa plataforma!',
      'success'
    )
    <?php 
        $busca = mysqli_query($connect,"UPDATE cadastro SET tultorial = '1' WHERE id = '$id'");
    ?>
  }
  else{
      tultorial();
  }
})
})
})
})
}

<?php } ?>

$('.prova1').click(function(){
swal({
  title: "Você tem Certeza?",
  text: "Uma vez começado a prova você não podera voltar atrás!",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Cancelar", "Tenho certeza!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
      timer: 2500,
    });
    setTimeout("window.open('prova-java-cap1', 'minhaJanela', 'height=1050px,width=1680px')",1500);
           Swal.fire({
  position: 'center',
    allowOutsideClick: false,
  type: 'error',
    title: 'Você esta em prova espere o tempo acabar para acessar o site novamente, Caso termine a prova de refresh na página!',
  showConfirmButton: false,
  timer: 1800000
})
    
  } else {
    
  }
});
});


$('.prova2').click(function(){
swal({
  title: "Você tem Certeza?",
  text: "Uma vez começado a prova você não podera voltar atrás!",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Cancelar", "Tenho certeza!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
      timer: 2500,
    });
    setTimeout("window.open('prova-java-cap2', 'minhaJanela', 'height=1050px,width=1680px')",1500);
           Swal.fire({
  position: 'center',
    allowOutsideClick: false,
  type: 'error',
    title: 'Você esta em prova espere o tempo acabar para acessar o site novamente, Caso termine a prova de refresh na página!',
  showConfirmButton: false,
  timer: 1800000
})
    
  } else {
    
  }
});
});

$('.prova3').click(function(){
swal({
  title: "Você tem Certeza?",
  text: "Uma vez começado a prova você não podera voltar atrás!",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Cancelar", "Tenho certeza!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
      timer: 2500,
    });
    setTimeout("window.open('prova-java-cap3', 'minhaJanela', 'height=1050px,width=1680px')",1500);
           Swal.fire({
  position: 'center',
    allowOutsideClick: false,
  type: 'error',
  title: 'Você esta em prova espere o tempo acabar para acessar o site novamente, Caso termine a prova de refresh na página!',
  showConfirmButton: false,
  timer: 1800000
})
    
  } else {
    
  }
});
});


$('#finalizar').click(function(){
swal({
  title: "Você tem Certeza?",
  text: "Uma vez começado a prova você não podera voltar atrás!",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Cancelar", "Tenho certeza!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
      timer: 2500,
    });
    setTimeout("window.open('prova-java-final', 'minhaJanela', 'height=1050px,width=1680px')",1500);
    
    Swal.fire({
  position: 'center',
    allowOutsideClick: false,
  type: 'error',
  title: 'Você esta em prova espere o tempo acabar para acessar o site novamente, Caso termine a prova de refresh na página!',
  showConfirmButton: false,
  timer: 1800000
})

  } else {
    
  }
});
});

</script>
<style>
progress {
    display:block;
    -webkit-appearance: none;
    z-index:0;
}
    progress::-webkit-progress-value {
    background:#fe412e;
    border:3px solid white;
    border-radius:20px;
}
progress[value]::-webkit-progress-bar {
   background: white;
   border:1px solid black;
   border-radius:20px;
 }
 progress::-moz-progress-bar {  
    background:white;
   border:1px solid black;
}
</style>
<?php else: ?>
<?php header("location: entrar"); die('Erro ao Acessar...');?>
<?php endif;?>