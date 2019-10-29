<?php session_start();
if(isset($_SESSION['logado'])):
include "model/conexao.php";

include "model/retiraextensao.php";

$url = substr($_SERVER["REQUEST_URI"], strpos($_SERVER["REQUEST_URI"], '?')+1);
$descodificapagina = base64_decode($url);
$descodificapagina = explode("=", $descodificapagina);
$descodificapagina = $descodificapagina[1];
$pagina = $descodificapagina;

@setcookie('provaterminada');
$email = $_SESSION['email'];
$SQL = "SELECT * FROM cadastro WHERE email = '$email'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
$dado = mysqli_fetch_array($buscar);
$id = $dado['id'];
$javaBanco = $dado['java'];

if($javaBanco == 0){
$java = 1;
$SQL = "UPDATE cadastro SET java = '$java'  WHERE email = '$email'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
}

if (base64_encode(base64_decode($url, true)) === $url){

} else {
    $SQL = "SELECT * FROM capitulos WHERE idUsuario = '$id'";
    $buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
    $dado2 = mysqli_fetch_array($buscar);
    $paginaBd = $dado2['pagina2'];
    $paginaBdcodificado = base64_encode("pagina2=".$paginaBd);
    header("location:javacap2?$paginaBdcodificado");
}

if($pagina > 27 || $pagina < 0 || $pagina == 0 || $pagina[0] == 0){
    $SQL = "SELECT * FROM capitulos WHERE idUsuario = '$id'";
    $buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
    $dado2 = mysqli_fetch_array($buscar);
    $paginaBd = $dado2['pagina2'];
    $paginaBdcodificado = base64_encode("pagina2=".$paginaBd);
    header("location:javacap2?$paginaBdcodificado");
}
else{
//Verificação de Pagina
$SQL = "SELECT * FROM capitulos WHERE idUsuario = '$id'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
$dado2 = mysqli_fetch_array($buscar);
$paginaBd = $dado2['pagina2'];
$pagina2Bd = $dado2['pagina3'];
if($pagina > $paginaBd){
$SQL = "UPDATE capitulos SET pagina2 = '$pagina'  WHERE idUsuario = '$id'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
}
}

$pagina2Bdcodificado = base64_encode("pagina2=".$pagina2Bd);
include 'model/expiraLogin.php';?>
<html>
    <?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Java Capitulo 2 Orientação a Objetos</title>
    <body>
    <?php include 'model/navbar2.php';?>
    <section id="java">
      <div class="content">
     <!-- CONTEUDO -->
            <?php
             include "model/java-capitulo2/java$pagina.php";
            ?>
     
     <?php    
     $proximapag = 'pagina2='.($pagina+1);
     $proximapag = base64_encode($proximapag);
     $anteriorpag = 'pagina2='.($pagina-1);
     $anteriorpag = base64_encode($anteriorpag);
     ?>
     <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <a style="font-size:18px;position:absolute;float:left;margin-top:25px" class="javabtn" href="javap"><i style="margin-bottom:-2px;" class="fas fa-backward"></i>&ensp;Voltar para o Menu do Curso</a>
    <div style="margin-top:120px;margin-bottom:-80px">
             <h2 style="text-align:center;"><?php if($pagina != 1): ?>
             <a  href="javacap2?cGFnaW5hMT0x"><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-double-left"></i></a>&ensp; <a href="javacap2?<?php  echo $anteriorpag ?>"><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-left"></i></a>
             <?php endif;?>
             &emsp; <?php echo $pagina ?> / 27  &emsp;<?php 
             if($pagina >= 1 && $pagina <= 26):?>
                 <a href="javacap2?<?php  echo $proximapag ?>"><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-right"></i></a>
                 <?php if($paginaBd == 27){?>
&ensp;<a href="javacap2?cGFnaW5hMj0zMA=="><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-double-right"></i></a>
                 <?php } ?>
                 <?php 
             elseif($pagina == 27): ?>
          
             <a  id="proximocap"><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-double-right"></i></a></h2><?php endif ?>
             </div>
             
             <?php if(1==1): ?>
                <script>
$('#proximocap').click(function(){ 	
   
Swal.fire({
  title: 'Gostaria de seu feedback no Capitulo',
  imageUrl: "data:image/png;base64,<?php echo base64_encode(file_get_contents('model/feedback.jpg')); ?>",
  inputPlaceholder: 'Digite sua mensagem',
  allowOutsideClick: false,
  showCancelButton: true,
  cancelButtonText: 'Não',
    confirmButtonText: 'Sim',
 
}).then((result) => {
  if (result.value) {
   Swal.fire({
  title: 'Nota do Capitulo?',
  imageUrl: "data:image/png;base64,<?php echo base64_encode(file_get_contents('model/feedback.jpg')); ?>",
  inputPlaceholder: 'Digite sua mensagem',
  allowOutsideClick: false,
  input: 'range',
  inputAttributes: {
    min: 1,
    max: 10,
    step: 1
  },
  inputValue: 5
}).then((result) => {
    Swal.fire({
      title:'Comentarios Sobre Curso ou Criticas!',
      text:'Por favor nós de sua opnião sobre o Curso',
      imageUrl: "data:image/png;base64,<?php echo base64_encode(file_get_contents('model/feedback.jpg')); ?>",
        html:
    '<textarea placeholder="Digite aqui!" style="resize: none;height:20%;" id="swal-input1" class="swal2-input"></textarea>',
         confirmButtonText: 'Enviar!',
         allowOutsideClick: false,
    })
}).then((result) => {
    Swal.fire({
      title:'Comentarios Sobre Curso ou Criticas!',
      text:'Por favor nós de sua opnião sobre o Curso',
      imageUrl: "data:image/png;base64,<?php echo base64_encode(file_get_contents('model/feedback.jpg')); ?>",
        html:
    '<textarea placeholder="Digite aqui!" style="resize: none;height:20%;" id="swal-input1" class="swal2-input"></textarea>',
         confirmButtonText: 'Enviar!',
         allowOutsideClick: false,
    }).then((result) => {
          swal({
  title: "Fazer a prova?",
  text: "Gostaria de fazer a prova do capitulo 2?",
  icon: "warning",
  buttons: true,
   buttons: ["Não", "Sim!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
    });
    setTimeout("window.open('prova-java-cap2', 'minhaJanela', 'height=1050px,width=1680px')",1500);
  } else {
    
  }
});
})
})


  } else {
      swal({
  title: "Fazer a prova?",
  text: "Gostaria de fazer a prova do capitulo 2?",
  icon: "warning",
  buttons: true,
   buttons: ["Não", "Sim!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
    });
    setTimeout("window.open('prova-java-cap2', 'minhaJanela', 'height=1050px,width=1680px')",1500);
  } else {
    
  }
});
  }
});  



});

</script>
<?php else: ?>
          <script>
$('#proximocap').click(function(){
swal({
  title: "Você tem Certeza?",
  text: "Gostaria de ir para o proximo capitulo!",
  icon: "warning",
  buttons: true,
    dangerMode: true,
   buttons: ["Não", "Sim!"],
})
.then((willDelete) => {
  if (willDelete) {
    swal("Redirecionando!", {
      icon: "success",
      buttons:false,
    });
    setTimeout("document.location = 'javacap3?<?php echo $pagina2Bdcodificado ?>'",1500);
  } else {
    
  }
});
});

                </script>
                <?php endif?>
</section>

<?php include 'model/footer.php';?>
    <?php include 'model/scriptsjava.php';?>
    </body>
</html>
<?php else:
header("location: https://codestation.cf/"); die('Erro');?>
<?php endif;?>