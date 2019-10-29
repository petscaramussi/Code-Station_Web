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
    $paginaBd = $dado2['pagina3'];
    $paginaBdcodificado = base64_encode("pagina3=".$paginaBd);
    header("location:javacap3?$paginaBdcodificado");
}

if($pagina > 29 || $pagina < 0 || $pagina == 0 || $pagina[0] == 0){
    $SQL = "SELECT * FROM capitulos WHERE idUsuario = '$id'";
    $buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
    $dado2 = mysqli_fetch_array($buscar);
    $paginaBd = $dado2['pagina3'];
    $paginaBdcodificado = base64_encode("pagina3=".$paginaBd);
    header("location:javacap3?$paginaBdcodificado");
}
else{
//Verificação de Pagina
$SQL = "SELECT * FROM capitulos WHERE idUsuario = '$id'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
$dado2 = mysqli_fetch_array($buscar);
$paginaBd = $dado2['pagina3'];
if($pagina > $paginaBd){
$SQL = "UPDATE capitulos SET pagina3 = '$pagina'  WHERE idUsuario = '$id'";
$buscar = mysqli_query($connect,$SQL) or die("Erro no banco de dados!");
}
}
include 'model/expiraLogin.php';?>
<html>
    <?php include 'model/header.php';?>
        <title><?php echo $titulo; ?> - Class Java</title>
    <body>
    <?php include 'model/navbar2.php';?>
    <section id="java">
      <div class="content">
     <!-- CONTEUDO -->
            <?php
             include "model/java-capitulo3/java$pagina.php";
            ?>
     
     <?php    
     $proximapag = 'pagina3='.($pagina+1);
     $proximapag = base64_encode($proximapag);
     $anteriorpag = 'pagina3='.($pagina-1);
     $anteriorpag = base64_encode($anteriorpag);
     ?>
     
     <a style="font-size:18px;position:absolute;float:left" class="javabtn" href="javap"><i style="margin-bottom:-2px;" class="fas fa-backward"></i>&ensp;Voltar para o Menu do Curso</a>
     
    
             <h2 style="text-align:center;"><?php if($pagina != 1): ?>
             <a  href="javacap3?cGFnaW5hMT0x"><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-double-left"></i></a>&ensp; <a href="javacap3?<?php  echo $anteriorpag ?>"><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-left"></i></a>
             <?php endif;?>
             &emsp; <?php echo $pagina ?> / 29  &emsp;<?php 
             if($pagina >= 1 && $pagina <= 28):?>
                 <a href="javacap3?<?php  echo $proximapag ?>"><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-right"></i></a>
                 <?php if($paginaBd == 29){?>
&ensp;<a href="javacap3?cGFnaW5hMT0zMA=="><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-double-right"></i></a>
                 <?php } ?>
                 <?php 
             elseif($pagina == 29): ?>
          
             <a  id="proximocap"><i style="cursor:pointer;font-size:35px;margin-bottom:-2px" class="fas fa-angle-double-right"></i></a></h2><?php endif ?>
             
                <script>
$('#proximocap').click(function(){
swal({
  title: "Você tem Certeza?",
  text: "Gostaria de fazer a prova final?",
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
    setTimeout("window.open('prova-java-cap3', 'minhaJanela', 'height=1050px,width=1680px')",1500);
  } else {
    
  }
});
});

                </script>
        </div>
    </section>
<?php include 'model/footer.php';?>
    <?php include 'model/scriptsjava.php';?>
    </body>
</html>
<?php else:
header("location: https://codestation.cf"); die('Erro');?>
<?php endif;?>